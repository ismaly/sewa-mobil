<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;

class User extends Model implements AuthenticatableContract
{
    use HasFactory, Notifiable, Authenticatable;

    protected $fillable = [
        'nama', 'alamat', 'nohp', 'nosim', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getAuthIdentifierName()
    {
        return 'nohp'; // Ganti dengan nama kolom yang merupakan pengenal (biasanya email atau username)
    }

    public function getAuthPassword()
    {
        return $this->password;
    }
}

