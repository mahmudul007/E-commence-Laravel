<?php


namespace App\Http\Middleware;

use App\Models\Visitor;
use Auth;
use Closure;
use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;

class CountVisitors
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $ip = $request->ip();
        $ua = $this->getAgent();
        $usr = Auth::check() ? Auth::user()->id : null;

        $visitor = Visitor::where('date', date("Y-m-d"))->where('ip', $ip)
            ->where('user_agent', json_encode($ua))
            ->where('user_id', $usr)
            ->first();

        if ($visitor) {
            $visitor->count++;
            $visitor->save();
        } else {
            Visitor::create([
                'user_id' => $usr,
                'ip' => $ip,
                'date' => date("Y-m-d"),
                'user_agent' => $ua,
            ]);
        }
        return $next($request);
    }

    private function getAgent()
    {
        $agent = new Agent();

        return [
            'browser' => $agent->browser(),
            'platform'=> $agent->platform(),
            'version'=>$agent->version($agent->platform()),
            'is_mobile'=>$agent->isMobile(),
        ];
    }
}
