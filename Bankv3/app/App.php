<?php

namespace Bank;

use Bank\Controllers\AccountsController;
use Bank\Controllers\HomeController;
use Bank\Controllers\LoginController;


class App
{


    static public function start()
    {


        $url = explode('/', $_SERVER['REQUEST_URI']);
        array_shift($url);

        return self::router($url);
    }

    static private function router($url)
    {

        //Loginas
        if ($_SERVER['REQUEST_METHOD'] == 'GET' && count($url) == 1 && $url[0] == 'login') {
            return (new LoginController)->index();
        }
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && count($url) == 1 && $url[0] == 'login') {
            return (new LoginController)->login($_POST);
        }
        //Logout
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && count($url) == 1 && $url[0] == 'logout') {
            return (new LoginController)->logout();
        }

        // Auth middleware
        if (!isset($_SESSION['name'])) {
            header('Location: /login');
            die;
        }
        ///Home
        if ($_SERVER['REQUEST_METHOD'] == 'GET' && count($url) == 1 && $url[0] == '') {
            return (new HomeController)->index();
        }

        //Accounts
        if ($_SERVER['REQUEST_METHOD'] == 'GET' && count($url) == 1 && $url[0] == 'accounts') {
            return (new AccountsController)->index();
        }
        //Register
        if ($_SERVER['REQUEST_METHOD'] == 'GET' && count($url) == 1 && $url[0] == 'register') {
            return (new AccountsController)->create();
        }
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && count($url) == 1 && $url[0] == 'register') {
            return (new AccountsController)->store($_POST);
        }
        //Editplus
        if ($_SERVER['REQUEST_METHOD'] == 'GET' && count($url) == 2 && $url[0] == 'editplus') {
            return (new AccountsController)->edit($url[1]);
        }
        //UpdatePlus
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && count($url) == 2 && $url[0] == 'updateplus') {
            return (new AccountsController)->updateplus($url[1], $_POST);
        }
        //Editminus
        if ($_SERVER['REQUEST_METHOD'] == 'GET' && count($url) == 2 && $url[0] == 'editminus') {
            return (new AccountsController)->editminus($url[1]);
        }
        //Updateminus 
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && count($url) == 2 && $url[0] == 'updateminus') {
            return (new AccountsController)->updateminus($url[1], $_POST);
        }
//Delete 
        if ($_SERVER['REQUEST_METHOD'] == 'GET' && count($url) == 2 && $url[0] == 'delete') {
            return (new AccountsController)->delete($url[1]);
        }
        //Destroy
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && count($url) == 2 && $url[0] == 'destroy') {
            return (new AccountsController)->destroy($url[1]);
        }
    

        {
            return self::view('404', [
                'pageTitle' => 'Page Not Found 404',
            ]);
        }
    }



    static public function view($path, $data = null)
    {
        if ($data) {
            extract($data);
        }

        ob_start();

        require __DIR__ . '/../views/' . $path . '.php';
        require __DIR__ . '/../views/top.php';
        require __DIR__ . '/../views/messages.php';
        return ob_get_clean();
    }
}
