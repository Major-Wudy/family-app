<?php

namespace App\Http\Controllers;

use App\Http\Services\LoginService;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.login');
    }

    /**
     * @author Raphael Wudy (raphael.wudy94@web.de) alias Major-Wudy
     * 
     * Log user in
     * @param Array $credentials
     * 
     * @return \Illuminate\Http\Response
     */
    public static function login($credentials) {
        LoginService::login($credentials);
    }

    /**
     * @author Raphael Wudy (raphae.wudy94@web.de) alias Major-Wudy
     * 
     * Log user out
     * @return \Illuminate\Http\Response
     */
    public static function logout() {
        $logged_out = LoginService::logout();
        if(!$logged_out) {
            return redirect()->route('home')->with('error', __('login.logout-error'));
        } else {
            return redirect()->route('home')->with('success', __('login.logout-success'));  
        }
    }
}
