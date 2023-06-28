<?php

namespace Bank;

use App\DB\DataBase;
use Bank\IbanId;

class FileWriter implements DataBase
{
    private $data, $fileName;
    
    public function __construct($fileName)
    {
        $this->fileName = $fileName;
        if (!file_exists(__DIR__ . '/../data/' . $fileName . '.json')) {
            $this->data = [];
        } else {
            $this->data = json_decode(file_get_contents(__DIR__ . '/../data/' . $fileName . '.json'), 1);
        }
    }

    public function __destruct()
    {
        $this->data = array_values($this->data);
        file_put_contents(__DIR__ . '/../data/' . $this->fileName . '.json', json_encode($this->data));
    }

    
    
    public function create(array $userData) : void
    {
        $serial= rand(100000000, 999999999);
        $id = IbanId::generateLithuanianIBAN(); 
        $regbalance=0;
        $userData['serial'] = $serial;
        $userData['regbalance'] = $regbalance;
        $userData['id'] = $id;
        $this->data[] = $userData;
    }

    public function update(int $userId, array $userData) : void
    {
        foreach ($this->data as $key => $user) {
            if ($user['serial'] == $userId) {
                $userData['serial'] = $userId; // for safety
                $this->data[$key] = $userData;
            }
        }
    }

    public function delete(int $userId) : void
    {
        foreach ($this->data as $key => $user) {
            if ($user['serial'] == $userId) {
                unset($this->data[$key]);
            }
        }
    }

    public function show (int $userId) : array
    {
        foreach ($this->data as $key => $user) {
            if ($user['serial'] == $userId) {
                return $this->data[$key];
            }
        }
    }
    
    public function showAll() : array
    {
        return $this->data;
    }
}