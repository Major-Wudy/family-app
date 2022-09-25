<?php

namespace App\Http\Services;

use Throwable;

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
        try {
            return redirect()->route('home');
        } catch(Throwable $e) {
            return redirect()->route('login')->with('error', __('login.login-error'));
        }
    }

    /**
     * @author Raphael Wudy (raphae.wudy94@web.de) alias Major-Wudy
     * 
     * Log user out
     * @return Boolean true on success else false
     */
    public static function logout() {
        try {
            return true;
        } catch(Throwable $e) {
            return false;
        }
    }
}