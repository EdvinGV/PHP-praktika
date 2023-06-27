<?php

namespace Bank\Controllers;
use Bank\App;
use Bank\FileWriter;


class AccountsController
{
    public function index()
    {
       
       return App::view('accounts/index');
      
    }
    public function show(int $id)
    {
       
    }

    public function create()
    {
        return App::view('register/index' );
    }

    public function store(array $request)
    {
        $data = new FileWriter('racoon');
        $data->create($request);

        header('Location: /racoon');
    }

    public function edit(int $id)
    {
        $data = new FileWriter('racoon');
        $racoon = $data->show($id);

        return App::view('racoon/edit', [
            'pageTitle' => 'Edit racoon',
            'racoon' => $racoon,
        ]);
    }

    public function update(int $id, array $request)
    {
        $data = new FileWriter('racoon');
        $data->update($id, $request);

        header('Location: /racoon');
    }

    public function delete(int $id)
    {
        $racoon = (new FileWriter('racoon'))->show($id);
        return App::view('racoon/delete', [
            'pageTitle' => 'Confirm racoon delete',
            'racoon' => $racoon,
        ]);
    }

    public function destroy(int $id)
    {
        $data = new FileWriter('racoon');
        $data->delete($id);

        header('Location: /racoon');
    }


}