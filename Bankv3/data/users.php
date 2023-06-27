<?php
$users=[
    [
        'name' => 'gitanas', 'password' => '123'
    ]];
    file_put_contents (__DIR__ . '/users.json', json_encode($users));
    echo "\ users.json created \n";