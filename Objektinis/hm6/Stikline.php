<?php



class Stikline{
    private $turis, $kiekis;
public function __construct($turis){
    $this->turis=$turis;
    $this->kiekis=0;
}
    public function ipilti($volume) : void{
        if($this->turis>=$volume+$this->kiekis){ 
        $this->kiekis+=$volume;}
        else{
            $this->kiekis=$this->turis;
        }
    }
}