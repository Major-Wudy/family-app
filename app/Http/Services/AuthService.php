<?php 

namespace App\Http\Services;

use App\Models\User;
use Illuminate\Support\Str;
use Throwable;

class AuthService
{
    public static function login($credentials) {
        $ds = new DecryptionService();
        try {
            $user = User::where('username', $credentials['username'])->first();
            $pw = $credentials['password'];
            if($ds->decrypt($user->password) == $pw) {
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