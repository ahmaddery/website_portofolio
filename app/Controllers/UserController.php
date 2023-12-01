<?php

namespace App\Controllers;

use App\Models\ProfileModel;
use CodeIgniter\Controller;

class UserController extends Controller
{
    public function profile()
    {
        $profileModel = new ProfileModel();
        $userId = session('user_id');
    
        $data['user'] = $profileModel->find($userId);

        return view('tentangsaya', $data); // Assuming your view file is named 'profile.php'
    }

    public function updateProfile()
    {
        $profileModel = new ProfileModel();
        $userId = session('user_id');

        // Validate the form data (modify this based on your validation rules)
        $validation = \Config\Services::validation();
        $validation->setRules([
            // Define your validation rules here
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            // Validation failed
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        // Update user data
        $data = [
            'username' => $this->request->getPost('username'),
            'alamat' => $this->request->getPost('alamat'),
            'nohp' => $this->request->getPost('nohp'),
            'email' => $this->request->getPost('email'),
            'password' => $this->request->getPost('password'), // Update this line based on your needs
        ];

        // Ensure the password field is not empty before updating
        if (empty($data['password'])) {
            unset($data['password']);
        } else {
            // Hash the password if it's not empty
            $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
        }

        $profileModel->update($userId, $data);

        return redirect()->to('tentangsaya');
    }
}
