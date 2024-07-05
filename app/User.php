<?php

namespace App;

/*use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;*/

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;

/*class User extends Model implements MustVerifyEmail
{
    use Notifiable, HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */  // extends Model esto se cambio para que funcione voyager
class User extends \TCG\Voyager\Models\User implements AuthenticatableContract {

    use Authenticatable;
    
    protected $fillable = [
        'name', 'email', 'password','peoples_id','groups_id','coins_id','validateemail'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function hasVerifiedEmail(){ }

    public function markEmailAsVerified(){ }

    public function sendEmailVerificationNotification(){ }

    public function getEmailForVerification(){ }
}
