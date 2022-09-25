<?php 

namespace App\Http\Services;

use App\Models\User;
use Illuminate\Support\Str;
use Throwable;

class AuthService
{
    public static function login($credentials) {
        try {
            $user = User::where('username', $credentials['username'])->where('password', $credentials['password'])->first();
            if($user != null) {
                $user->update(['token' => Str::random(10)]);
                return true;
            } else {
                return false;
            }
        } catch (Throwable $e) {
            return false;
        }
    }
}