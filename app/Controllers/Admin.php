<?php

namespace App\Controllers;

use App\Models\AdminModel;

class Admin extends BaseController
{
    public function login()
    {
        // Load the login view
        return view('admin/login');
    }
    public function doLogin()
    {
        // Retrieve input data from the form
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
    
        // Validate the input
        $validationRules = [
            'email'    => 'required|valid_email',
            'password' => 'required',
        ];
    
        if (!$this->validate($validationRules)) {
            // Validation failed, redirect back to the login page with errors
            return redirect()->to('admin/login')->withInput()->with('validation', $this->validator);
        }
    
        // Check if the user exists in the database
        $adminModel = new AdminModel();
        $user = $adminModel->where('email', $email)->first();
    
        if (!$user || !password_verify($password, $user['password'])) {
            // Invalid credentials, redirect back to the login page with an error message
            return redirect()->to('admin/login')->with('error', 'Invalid email or password');
        }
    
        // Valid credentials, set session data
        $session = session();
        $session->set('admin_id', $user['id']);
        $session->set('admin_email', $user['email']);
        // You can set more session data as needed
    
        return redirect()->to('/blog/index'); // Replace '/blog/index' with your actual dashboard route
    }
    
    public function logout()
    {
        // Destroy the admin session
        $session = session();
        $session->remove('admin_id');
        $session->remove('admin_email');
        // You can remove more session data as needed

        // Redirect to the login page
        return redirect()->to('admin/login');
    }
   
}
