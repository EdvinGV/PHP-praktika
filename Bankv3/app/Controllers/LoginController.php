<?php
namespace Bank\Controllers;

use Bank\App;
use Bank\FileWriter;
use Bank\Messages;

class LoginController
{

    public function index()
    {
       
        return App::view('auth/index');
       
    }

    public function login(array $data)
    {
       print_r($data);
        $logpassword = $data['logpassword'] ?? '';
        $logname = $data['logname']?? '';

        $users = (new FileWriter('admins'))->showAll();

        foreach ($users as $user) {
            if ($user['logname'] == $logname && $user['logpassword'] == ($logpassword)) {
                
                $_SESSION['name'] = $user['logname'];
                // message( 'You are logged in');
                header('Location: /');
                die;
            }
            
            
           
        }
       
        Messages::addMessage('danger', 'Wrong email or password');
        header('Location: /login');
        die;
    }

    public function logout()
    {
        unset($_SESSION['name']);
        Messages::addMessage('success', 'Logged out');
        header('Location: /');
        exit;
    }
}