<?php

namespace App\Controllers;

use App\Models\TestimoniModel;
use CodeIgniter\Controller;

class Testimoni extends Controller
{
    public function index()
    {
                            // Check if the admin session exists
    $session = session();
    if (!$session->has('admin_id')) {
        // Admin session doesn't exist, redirect to the login page
        return redirect()->to('admin/login');
    }
        $model = new TestimoniModel();
        $data['testimoni'] = $model->getAllTestimoni();

        return view('testimoni/index', $data);
    }

    public function create()
    {
                            // Check if the admin session exists
    $session = session();
    if (!$session->has('admin_id')) {
        // Admin session doesn't exist, redirect to the login page
        return redirect()->to('admin/login');
    }
        return view('testimoni/create');
    }

    public function store()
    {
                            // Check if the admin session exists
    $session = session();
    if (!$session->has('admin_id')) {
        // Admin session doesn't exist, redirect to the login page
        return redirect()->to('admin/login');
    }
        $model = new TestimoniModel();
        $data = [
            'nama' => $this->request->getPost('nama'),
            'foto' => $this->request->getFile('foto'),
            'keterangan' => $this->request->getPost('keterangan'),
        ];
    
        // Cek apakah file foto diunggah dengan benar
        if ($data['foto']->isValid() && !$data['foto']->hasMoved()) {
            // Pindahkan file ke direktori yang diinginkan
            $data['foto']->move('images/', $data['foto']->getName());
    
            // Simpan data ke database
            $model->saveTestimoni($data);
    
            return redirect()->to('/testimoni');
        } else {
            // Handle jika ada kesalahan saat mengunggah file
            $error = $data['foto']->getError();
            return redirect()->back()->with('error', $error);
        }
    }
    
    public function edit($id)
    {
                            // Check if the admin session exists
    $session = session();
    if (!$session->has('admin_id')) {
        // Admin session doesn't exist, redirect to the login page
        return redirect()->to('admin/login');
    }
        $model = new TestimoniModel();
        $data['testimoni'] = $model->getTestimoniById($id);

        return view('testimoni/edit', $data);
    }

    public function update($id)
{
                        // Check if the admin session exists
                        $session = session();
                        if (!$session->has('admin_id')) {
                            // Admin session doesn't exist, redirect to the login page
                            return redirect()->to('admin/login');
                        }
    $model = new TestimoniModel();
    $data = [
        'nama' => $this->request->getPost('nama'),
        'keterangan' => $this->request->getPost('keterangan'),
    ];

    $existingData = $model->getTestimoniById($id);

    // Cek apakah ada file foto yang diunggah
    $uploadedFile = $this->request->getFile('foto');

    if ($uploadedFile->isValid()) {
        // Hapus foto sebelumnya
        if (file_exists('images/' . $existingData['foto'])) {
            unlink('images/' . $existingData['foto']);
        }

        // Simpan foto baru ke direktori
        $data['foto'] = $uploadedFile->getName();
        $uploadedFile->move('images/', $data['foto']);
    } else {
        // Jika foto tidak diunggah, gunakan foto yang ada
        $data['foto'] = $existingData['foto'];
    }

    $model->updateTestimoni($id, $data);

    return redirect()->to('/testimoni');
}


    public function delete($id)
    {
                            // Check if the admin session exists
    $session = session();
    if (!$session->has('admin_id')) {
        // Admin session doesn't exist, redirect to the login page
        return redirect()->to('admin/login');
    }
        $model = new TestimoniModel();

        // Hapus foto sebelumnya
        $existingData = $model->getTestimoniById($id);
        if (file_exists('images/' . $existingData['foto'])) {
            unlink('images/' . $existingData['foto']);
        }

        $model->deleteTestimoni($id);

        return redirect()->to('/testimoni');
    }
}
