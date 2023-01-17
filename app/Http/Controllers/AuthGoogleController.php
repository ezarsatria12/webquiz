<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Exception;
use GuzzleHttp\Promise\Create;

class AuthGoogleController extends Controller
{
    //tambahkan script di bawah ini
    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }
  
  
    //tambahkan script di bawah ini 
    public function handleProviderCallback(Request $request)
    {
        try {
            $user_google    = Socialite::driver('google')->user();
            $user           = User::where('email', $user_google->getEmail())->first();

            //jika user ada maka langsung di redirect ke halaman home
            //jika user tidak ada maka simpan ke database
            //$user_google menyimpan data google account seperti email, foto, dsb

            if($user != null){
                Auth::login($user);
                return redirect()->route('home');
            }else{
                $create = User::Create([
                    'email'             => $user_google->getEmail(),
                    'name'              => $user_google->getName(),
                    'password'          => 0,
                    'google_id'         => $user->id,
                    'email_verified_at' => now()
                ]);
                Auth::login($create);
                return redirect()->route('home');
            }

        } catch (\Exception $e) {
            return redirect()->route('home');
        }


    }

}
