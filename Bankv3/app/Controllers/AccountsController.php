<?php

namespace Bank\Controllers;

use Bank\App;
use Bank\FileWriter;
use Bank\Messages;
use Bank\IDcheck;
class AccountsController
{
    public function index()
    {
        $data = new FileWriter('user');

     
      
        return App::view('accounts/index', ['accounts' => $data->showAll()]);
    }


    public function create()
    {
        return App::view('register/index');
    }


    public function store(array $request){
        $accounts = new FileWriter('user');
        
    
        foreach ($accounts as $account) {
            if ($account['regid'] == $request['regid']) {
                Messages::addMessage('danger', 'ID already registered');
                header('Location: /register');
                exit;
            }
        }

            
        if(IDcheck::validateAsmensKodas($request['regid']) == false){
            Messages::addMessage('danger', 'ID is not valid');
                header('Location: /register');
                die;
          }






    if(strlen($request['regname'])<3 || strlen($request['regsurname'])<3){
        Messages::addMessage('danger', 'Name and Surname must be at least 3 characters long');
        header('Location: /register');
        die;
    } 





        else{
            $request['regname']=strtolower($request['regname']);
            $request['regname']=ucfirst($request['regname']);
            $request['regsurname']=strtolower($request['regsurname']) ;
            $request['regsurname']=ucfirst($request['regsurname']) ;
        $data = new FileWriter('user');
        $data->create($request);
        Messages::addMessage('success', 'Account Created');
        header('Location: /register');
    }
}

    public function edit(int $id)
    {
        $data = new FileWriter('user');
        $account = $data->show($id);

        return App::view('/bankoptions/editplus', ['account' => $account, 'id' => $id]);
    }

    public function editminus(int $id)
    {
        $data = new FileWriter('user');
        $account = $data->show($id);

         return App::view('/bankoptions/editminus', ['account' => $account, 'id'=> $id]);
    }

    public function updateplus(int $id, array $request)
    {


        if(!is_numeric($request['regbalance'] ) || $request['regbalance']<0.01 ){
            Messages::addMessage('danger', 'Wrong Value Provided');
            header('Location: /editplus/' . $id);
                die;
          }









        $data = new FileWriter('user');
        $account = $data->show($id);
        $account['regbalance']+= number_format($request['regbalance'], 2, '.', '');
        $data->update($id, $account);
        Messages::addMessage('success', 'Transaction Successful');
        header('Location: /editplus/' . $id);
    }
    public function updateminus(int $id, array $request)
    {  
        
        
        $data = new FileWriter('user');
        $account = $data->show($id);

        if(!is_numeric($request['regbalance'] ) || $request['regbalance']<0.01 ){
            Messages::addMessage('danger', 'Wrong Value Provided');
            header('Location: /editminus/' . $id);
                die;
          }

          if($account['regbalance']-$request['regbalance']<0){
            Messages::addMessage('danger', 'Balance is too low for the transaction');
            header('Location: /editminus/' . $id);
                die;
          }
         





       
        $account['regbalance']-= number_format($request['regbalance'], 2, '.', '');
        $data->update($id, $account);
        Messages::addMessage('success', 'Transaction Successful');
        header('Location: /editminus/' . $id);
    }

    public function delete(int $id)
    {
        $data = new FileWriter('user');
        $account = $data->show($id);

        return App::view('/bankoptions/delete', ['account' => $account,'id' => $id]);
    }

    public function destroy(int $id)
    {
        $data = new FileWriter('user');
        $account = $data->show($id);
        if ($account['regbalance']== 0){
            $data->delete($id);
            Messages::addMessage('success', 'Account deleted');
            header('Location: /accounts');
            }else {
                Messages::addMessage('danger', 'Balance is not 0, cannot delete');
            header('Location: /delete/'.$id);
        }
        
    

      
    }
}



