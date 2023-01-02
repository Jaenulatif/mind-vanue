<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
// use Illuminate\Database\Eloquent\Model;

class MdlUser extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'mdl_user';

    protected $fillable = [
        'username',
        'password',
        'firstname',
        'lastname',
        'email',
        'institution',
        'departement',
        'picture',
        'idnumber',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function thread()
    {
        return $this->hasMany(Thread::class);
    }
}
