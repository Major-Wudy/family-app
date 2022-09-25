<?php

namespace App\Http\Services;

use App\Models\User;
use Illuminate\Support\Facades\Session;

class LoginService 
{
    /**
     * @author Raphael Wudy (raphael.wudy94@web.de) alias Major-Wudy
     * 
     * Log user in
     * @param Array $credentials
     * 
     * @return Boolean true on success else false
     */
    public static function login($credentials) {
        
        if (AuthService::login($credentials)) {
            Session::put('username', $credentials['username']);
            return true;
        } else {
            return false;
        }
    }

    /**
     * @author Raphael Wudy (raphae.wudy94@web.de) alias Major-Wudy
     * 
     * Log user out
     * @return Boolean true on success else false
     */
    public static function logout() {
        if(Session::get('username') !== null) {

            $user = User::where('username', Session::get('username'))->first();
            $user->update(['token' => null]);
            Session::flush();
            return true;
        } else {
            return false;
        }
    }
}