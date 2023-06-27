<?php
namespace Bank\Controllers;

use Bank\App;
use Bank\FileWriter;

class LoginController
{

    public function index()
    {
       
        return App::view('auth/index');
       
    }

    public function login(array $data)
    {
       
        $password = $data['psw'] ?? '';
        $name = $data['name']?? '';

        $users = (new FileWriter('users'))->showAll();

        foreach ($users as $user) {
            if ($user['name'] == $name && $user['password'] == ($password)) {
                
                $_SESSION['name'] = $user['name'];
                // message( 'You are logged in');
                header('Location: /');
                die;
            }
        }
        // message('Wrong email or password');
        header('Location: /login');
        die;
    }

    public function logout()
    {
        unset($_SESSION['name']);
        unset($_SESSION['password']);
        header('Location: /');
        exit;
    }
}