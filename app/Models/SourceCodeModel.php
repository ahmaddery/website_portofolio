<?php

namespace App\Models;

use CodeIgniter\Model;

class SourceCodeModel extends Model
{
    protected $table      = 'source_code';
    protected $primaryKey = 'id';

    protected $allowedFields = ['nama', 'foto', 'live_preview', 'download'];
}
