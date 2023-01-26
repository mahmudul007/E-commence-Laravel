<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Visitor;
use Illuminate\Support\Facades\DB;

use Barryvdh\Debugbar\Facade as DebugBar;

class AnalyticsController extends Controller
{
    public function visitors()
    {
        $analytics = null;
        $analytics['total_browse'] = Visitor::all()->sum('count');

        $analytics['grouped_visitors'] = DB::table('visitors')
             ->select(DB::raw('`ip` , `user_id` , `user_agent`, count(`ip`)as`total` ,sum(`count`) as browse'))
             ->groupBy('ip','user_id','user_agent')->get();

        $analytics['mobile_visitors'] = 0;
        $analytics['desktop_visitors'] = 0; 
        foreach ($analytics['grouped_visitors'] as $value) {
            
            $val = json_decode($value->user_agent);
            if ($val->is_mobile){
                $analytics['mobile_visitors']++;
            }else{
                $analytics['desktop_visitors']++;
            }
        }

        $analytics['unique_user_visits'] = DB::table('visitors')
            ->select(DB::raw('`ip` , `user_id` , `user_agent`, count(`ip`)as`total` ,sum(`count`) as browse'))
            ->groupBy('ip','user_id','user_agent')
            ->where('user_id','!=',null)
            ->orderBy('browse','desc')
            ->get();

      
        
        $analytics['date_vs_visits']=DB::select('SELECT DATE_FORMAT(`date`,"%D %b,%y") as `date`, SUM(total) as `visits` , sum(`browse`) as `browse` from (select `ip` , `user_id` , `user_agent`, `date` , count(`ip`)as`total` ,sum(`count`) as browse from `visitors` WHERE `date` >= DATE(NOW() - INTERVAL 15 DAY) group by `ip`, `user_id`, `user_agent`, `date`) as `groupd_visitors` GROUP BY `date` ORDER by MAX(`date`) ASC;');
        $analytics['unique_visitor_count_today'] = $analytics['date_vs_visits'][count($analytics['date_vs_visits'])-1]->visits;
        $analytics['unique_visitor_count'] = count($analytics['grouped_visitors']);
        $analytics['unique_random_visitor_count'] = $analytics['unique_visitor_count'] - count($analytics['unique_user_visits']);

        return view('admin.adminHome',[
            'analytics'=>$analytics
        ]);
    }
}
