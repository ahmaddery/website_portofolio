<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table = 'admin_users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['email', 'password'];

    // You may want to include additional validation and security measures.
}
