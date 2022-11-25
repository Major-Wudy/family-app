<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserHasRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$needed_roles)
    {
        if(Session::get('username') !== null) {
            $user = User::where('username', Session::get('username'))->with('roles')->first();
            foreach($user->roles as $user_role)  {
                foreach($needed_roles as $role) {
                    if(strtoupper($user_role->role) == strtoupper($role)) {
                        return $next($request);
                        
                    } 
                }
            }
            return back()->with('error', __('role.hasRole'));
        } else {
            return redirect()->route('index-login');
        }
    }
}
