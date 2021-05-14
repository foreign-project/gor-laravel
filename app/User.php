<?php

namespace App;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    
    protected $table = "users";
    protected $fillable = ['kode_user', 'nama', 'email', 'password' , 'telepon', 'roles' ];
    protected $primaryKey = 'kode_user';
    public $timestamps = false;

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

    
    function transaksi() {
        return $this->hasMany(Transaksi::class,'kode_user');
    }

}
