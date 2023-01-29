<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Image;

use Laravel\Socialite\Facades\Socialite;
use Exception;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Carbon\Carbon;

class SocialAuthController extends Controller
{
   /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
        

        
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function handleGoogleCallback()
    {
        try {
      
            $user = Socialite::driver('google')->stateless()->user();

       
            $finduser = User::where('google_id', $user->id)->first();
            // dd($user);
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect()->route('home');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id'=> $user->id,
                    'email_verified_at'=> Carbon::now(),
                    'password' => encrypt('123456dummy')

                ]);
                $newUserimage = Image::create([
                    'table' => 'users',
                    'tag' => 'profile',
                    'link'=> $user->avatar,
                    'ref_id'=>  $newUser->id,

                ]);
               
                
      
                Auth::login($newUser);
      
                return redirect()->route('home');
            }
      
        } catch (Exception $e) {
            dd($e);
        }
    }
}


