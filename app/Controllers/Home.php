<?php

namespace App\Controllers;

use App\Models\SourceCodeModel;
use App\Models\TestimoniModel;
use App\Models\UserModel;
use App\Models\BlogModel;

class Home extends BaseController
{
    public function index()
    {
        // Check if the user session has expired
        if (!session('user_id')) {
            session()->setFlashdata('warning', 'Sesi pengguna telah habis. Silakan login kembali.');
        }
    
        // Get testimonials
        $testimoniModel = new TestimoniModel();
        $data['testimoni'] = $testimoniModel->getAllTestimoni();
    
        // Assuming you have a BlogModel
        $blogModel = new BlogModel();
    
        // Get source codes with pagination
        $sourceCodeModel = new SourceCodeModel();
        $sourceCodePager = \Config\Services::pager();
        $sourceCodePage = $this->request->getVar('source_code_page') ? $this->request->getVar('source_code_page') : 1;
        $sourceCodePerPage = 6; // Number of source codes per page
    
        $data['source_codes'] = $sourceCodeModel->paginate($sourceCodePerPage, 'group2', $sourceCodePage);
        $data['sourceCodePager'] = $sourceCodeModel->pager;
    
        // Get the latest 6 blogs with pagination
        $blogPage = $this->request->getVar('blog_page') ? $this->request->getVar('blog_page') : 1;
        $blogPerPage = 6; // Number of blogs per page
    
        $data['blogs'] = $blogModel->paginate($blogPerPage, 'blog_page');
        $data['blogPager'] = $blogModel->pager;
    
        return view('index', $data);
    }

    public function hubungisaya()
    {


        return view('hubungisaya');
    }
    
    public function sendEmail()
    {
        $name = $this->request->getPost('name');
        $phoneNumber = $this->request->getPost('phone_number');
        $email = $this->request->getPost('email');
        $message = $this->request->getPost('message');

        // Send email
        $emailService = service('email');
        $emailService->setTo('ahmadderi880@gmail.com');
        $emailService->setFrom('admin@ahmadderi.my.id', 'Email notifikasi');
        $emailService->setSubject('Contact Form Submission');
        $emailService->setMessage("Name: $name\nPhone Number: $phoneNumber\nEmail: $email\n\nMessage:\n$message");

        // Check if the email is sent successfully
        if ($emailService->send()) {
            // Email sent successfully, redirect back to the form with a success message
            session()->setFlashdata('success', 'Pesan Anda telah berhasil terkirim!');
            return redirect()->to('hubungisaya');
        } else {
            // Email failed to send, redirect back to the form with an error message
            session()->setFlashdata('error', 'Kesalahan pengiriman pesan. Silakan coba lagi nanti.');
            return redirect()->to('hubungisaya');
        }
    }

    public function product()
    {
        // Check if the user is logged in
        if (!session('user_id')) {
            // Redirect to the login page
            return redirect()->to('/login');
        }

        // If the user is logged in, proceed to load the product view
        $sourceCodeModel = new SourceCodeModel();
        $data['source_codes'] = $sourceCodeModel->findAll();

        return view('product', $data);
    }
    
    public function blog()
    {
        $blogModel = new BlogModel();

                    // Fetch data from the BlogModel
    $data['blogs'] = $blogModel->findAll();

        return view('blog', $data);
    }

    public function view($id)
{
    $blogModel = new BlogModel();
    $data['blog'] = $blogModel->find($id);

    return view('detailview', $data);
}
public function akses()
{


    return view('akses');
}


}
