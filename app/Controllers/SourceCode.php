<?php

namespace App\Controllers;

use App\Models\SourceCodeModel;

class SourceCode extends BaseController
{

    protected $model;

    public function __construct()
    {
        $this->model = new SourceCodeModel();
    }

    public function index()
    {
                    // Check if the admin session exists
    $session = session();
    if (!$session->has('admin_id')) {
        // Admin session doesn't exist, redirect to the login page
        return redirect()->to('admin/login');
    }
        $model = new SourceCodeModel();
        $data['source_codes'] = $model->findAll();

        return view('source_code/index', $data);
    }

    public function create()
    {
                    // Check if the admin session exists
    $session = session();
    if (!$session->has('admin_id')) {
        // Admin session doesn't exist, redirect to the login page
        return redirect()->to('admin/login');
    }
        return view('source_code/create');
    }

    public function store()
    {
                    // Check if the admin session exists
    $session = session();
    if (!$session->has('admin_id')) {
        // Admin session doesn't exist, redirect to the login page
        return redirect()->to('admin/login');
    }
        $model = new SourceCodeModel();

        $data = [
            'nama'         => $this->request->getPost('nama'),
            'foto'         => $this->handleImageUpload('foto'), // Function to handle image upload
            'live_preview' => $this->request->getPost('live_preview'),
            'download'     => $this->request->getPost('download'),
        ];

        $model->insert($data);

        return redirect()->to('/source_code');
    }

    public function edit($id = null)
    {
                    // Check if the admin session exists
    $session = session();
    if (!$session->has('admin_id')) {
        // Admin session doesn't exist, redirect to the login page
        return redirect()->to('admin/login');
    }
        $model = new SourceCodeModel();

        $data['source_code'] = $model->find($id);

        return view('source_code/edit', $data);
    }

    public function update()
    {
                    // Check if the admin session exists
    $session = session();
    if (!$session->has('admin_id')) {
        // Admin session doesn't exist, redirect to the login page
        return redirect()->to('admin/login');
    }
        $id = $this->request->getPost('id');
        $existingData = $this->model->find($id);
    
        $data = [
            'nama'         => $this->request->getPost('nama'),
            'foto'         => $this->handleImageUpload('foto', $id, $existingData['foto']),
            'live_preview' => $this->request->getPost('live_preview'),
            'download'     => $this->request->getPost('download'),
        ];
    
        $this->model->update($id, $data);
    
        return redirect()->to('/source_code');
    }
    

    public function delete($id = null)
    {
                    // Check if the admin session exists
    $session = session();
    if (!$session->has('admin_id')) {
        // Admin session doesn't exist, redirect to the login page
        return redirect()->to('admin/login');
    }
        $existingData = $this->model->find($id);

        // Delete the associated photo before deleting the record
        $this->deletePhoto($existingData['foto']);

        $this->model->delete($id);

        return redirect()->to('/source_code');
    }


    // Function to handle image upload
    private function handleImageUpload($fieldName, $id = null, $existingPhoto = null)
    {
        $file = $this->request->getFile($fieldName);
    
        if ($file->isValid() && !$file->hasMoved()) {
            // Delete previous photo if updating with a new one
            if ($id !== null && $existingPhoto !== null) {
                $this->deletePhoto($existingPhoto);
            }
    
            // Generate a unique name for the file
            $newName = $file->getRandomName();
            
            // Move the file to the public/images directory
            $file->move(ROOTPATH . '/images', $newName);
    
            // Return the path to the uploaded file
            return 'images/' . $newName;
        } else {
            // If no new file is uploaded, use the existing file path for update
            return $existingPhoto ?? '';
        }
    }
    // Function to delete photo
    private function deletePhoto($photoPath)
    {
        // Check if the photo path is not empty and is not the default photo path
        if (!empty($photoPath) && strpos($photoPath, 'images/') !== false) {
            $photoFullPath = ROOTPATH . 'public/' . $photoPath;
            
            // Check if the file exists before attempting to delete
            if (file_exists($photoFullPath)) {
                unlink($photoFullPath);
            }
        }
    }
}
