<?php

namespace App\Models;

use CodeIgniter\Model;

class TestimoniModel extends Model
{
    protected $table = 'testimoni';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama', 'foto', 'keterangan'];

    // Fungsi untuk mendapatkan semua testimoni
    public function getAllTestimoni()
    {
        return $this->findAll();
    }

    // Fungsi untuk mendapatkan testimoni berdasarkan ID
    public function getTestimoniById($id)
    {
        return $this->find($id);
    }

    // Fungsi untuk menyimpan testimoni
    public function saveTestimoni($data)
    {
        return $this->insert($data);
    }

    // Fungsi untuk mengupdate testimoni
    public function updateTestimoni($id, $data)
    {
        return $this->update($id, $data);
    }

    // Fungsi untuk menghapus testimoni
    public function deleteTestimoni($id)
    {
        return $this->delete($id);
    }
}
