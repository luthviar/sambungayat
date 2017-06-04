<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    protected $table = 'user';
    protected $fillable = ['id_user', 'username', 'password', 'nama_lengkap', 'email'
	, 'alamat', 'tanggal_lahir'
	
	
	];
}
