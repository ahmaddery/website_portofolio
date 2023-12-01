<?php

namespace App\Controllers;

use App\Models\BlogModel;
use CodeIgniter\Controller;

class Blog extends Controller
{

public function index()
{
    // Check if the admin session exists
    $session = session();
    if (!$session->has('admin_id')) {
        // Admin session doesn't exist, redirect to the login page
        return redirect()->to('admin/login');
    }

    // Admin session exists, proceed to load the blog index
    $blogModel = new BlogModel();
    $data['blogs'] = $blogModel->findAll();

    return view('blog/index', $data);
}


    public function create()
    {
            // Check if the admin session exists
    $session = session();
    if (!$session->has('admin_id')) {
        // Admin session doesn't exist, redirect to the login page
        return redirect()->to('admin/login');
    }
        return view('blog/create');
    }

    public function store()
    {
            // Check if the admin session exists
    $session = session();
    if (!$session->has('admin_id')) {
        // Admin session doesn't exist, redirect to the login page
        return redirect()->to('admin/login');
    }
        $blogModel = new BlogModel();

        $data = [
            'judul' => $this->request->getPost('judul'),
            'keterangan' => $this->request->getPost('keterangan'),
        ];

        // Handle image upload
        $image = $this->request->getFile('foto');
        if ($image->isValid() && !$image->hasMoved()) {
            $newName = $image->getRandomName();
            $image->move('images/', $newName);
            $data['foto'] = 'images/' . $newName;
        }

        $blogModel->insert($data);

        return redirect()->to('blog/index');
    }

    public function edit($id)
    {
            // Check if the admin session exists
    $session = session();
    if (!$session->has('admin_id')) {
        // Admin session doesn't exist, redirect to the login page
        return redirect()->to('admin/login');
    }
        $blogModel = new BlogModel();
        $data['blog'] = $blogModel->find($id);

        return view('blog/edit', $data);
    }

    public function update($id)
    {
            // Check if the admin session exists
    $session = session();
    if (!$session->has('admin_id')) {
        // Admin session doesn't exist, redirect to the login page
        return redirect()->to('admin/login');
    }
        $blogModel = new BlogModel();

        $data = [
            'judul' => $this->request->getPost('judul'),
            'keterangan' => $this->request->getPost('keterangan'),
        ];

        // Handle image upload
        $image = $this->request->getFile('foto');
        if ($image->isValid() && !$image->hasMoved()) {
            // Delete the previous photo
            $prevBlog = $blogModel->find($id);
            if ($prevBlog['foto'] && file_exists($prevBlog['foto'])) {
                unlink($prevBlog['foto']);
            }

            $newName = $image->getRandomName();
            $image->move('images/', $newName);
            $data['foto'] = 'images/' . $newName;
        }

        $blogModel->update($id, $data);

        return redirect()->to('blog/index');
    }

    public function delete($id)
    {
            // Check if the admin session exists
    $session = session();
    if (!$session->has('admin_id')) {
        // Admin session doesn't exist, redirect to the login page
        return redirect()->to('admin/login');
    }
        $blogModel = new BlogModel();
        $blog = $blogModel->find($id);

        // Delete the photo
        if ($blog['foto'] && file_exists($blog['foto'])) {
            unlink($blog['foto']);
        }

        $blogModel->delete($id);

        return redirect()->to('blog/index');
    }
}
