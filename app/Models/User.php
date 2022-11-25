<?php

namespace App\Models;

use App\Http\Services\EncryptionService;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Throwable;

class User extends Model
{
    use HasFactory;

    protected $table = 'users';
    protected $fillable = [
        'username',
        'email',
        'email_verified_at',
        'password',
        'reset_password',
        'token',
        'remember_token',
        'forename',
        'surname',
    ];

    /**
     * @author Raphael Wudy (raphael.wudy94@web.de) alias Major-Wudy
     * 
     * register a new User
     * @param Array
     * @return Boolean true on success else false
     */
    public function register($values) {
        try {

            $user = new User([
                'username' => (new User)->createUsername($values['forename']),
                'forename' => $values['forename'], 
                'surname' => $values['surname'], 
                'email' => $values['email'], 
                'password' => (new EncryptionService)->encrypt($values['password']),
            ]);
            
            $user->save();
            $id = User::where('username', $user->username)->first();
            $role = new Roles([
                'user_id' => $id->id,
                'role' => $values['role'],
            ]);

            $role->save();

            Session::put('username', $id->username);
            return true;
        } catch (Throwable $e) {
            Log::error($e);
            return false;
        }
    }

    /**
     * 
     * creates a unique username
     * @param String $forename
     * @return Boolean true on success else false
     */
    public function createUsername($forename) {
        $exists = User::where('username', $forename)->first();
        if($exists == null) {
            return $forename;
        } else {
            $potential = "";
            $counter = 1;
            for($counter = 1; $counter <= 10; $counter++) {
                $potential = $forename . $counter;
                $exists = User::where('username', $potential)->first();
                if($exists == null) {
                    return $potential;
                }
            }
            return Str::random(10);
        }
    }

    public function roles() {
        return $this->hasMany(Roles::class, 'user_id');
    }
}
