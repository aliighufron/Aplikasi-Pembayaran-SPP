<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'level'
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
   
  /**
   * Has One User -> Spp
   *
   * @return void
   */
    public function spps()
    {
         return $this->hasOne(Spp::class);
    }
   
  /**
   * Has One User -> Kelas
   *
   * @return void
   */
    public function kelass()
    {
         return $this->hasOne(Kelas::class);
    }
   
 /**
   * Belongs To Pembayaran -> User (petugas)
   *
   * @return void
   */
    public function pembayarans()
    {
         return $this->hasMany(Pembayaran::class);
    }
}
