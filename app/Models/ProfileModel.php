<?php

namespace App\Models;

use CodeIgniter\Model;

class ProfileModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['username', 'alamat', 'nohp', 'email', 'password'];

    // Your other model methods can be added here if needed
}
