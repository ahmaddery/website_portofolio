<?php

namespace App\Models;

use CodeIgniter\Model;

class BlogModel extends Model
{
    protected $table = 'blog';
    protected $primaryKey = 'id';
    protected $allowedFields = ['judul', 'foto', 'keterangan'];

    // You can add more methods if needed
}
