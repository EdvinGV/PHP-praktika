<?php

class MarsoPalydovas{
    
    static public $planetos=[]; // ci storinam ojbektus 
    private $pavadinimas;// cia tuscias kintamasis kur naudosim priduot varda kiekvienam objektui
    
private function  __construct($pavadinimas){
    $this->pavadinimas= $pavadinimas;
}
    public static  function get(){// objekto sukurimo funkcija
        if(!isset(self::$planetos[0])){
           return self::$planetos[0]= new self('Deimas');
        }
        if(!isset(self::$planetos[1])){
           return self::$planetos[1]= new self('Fobas');
        }
      
    return self::$planetos[rand(0,1)];
      

    }

}

