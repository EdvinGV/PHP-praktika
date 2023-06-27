<?php



class Pinigine1{
    public $popieriniaiPinigai=[];
    public $metaliniaiPinigai=[];
    public $monetosd=0; 
    public $banknotaid=0;
    public $i=0;

    public function monetos() {
      
        return $this->monetosd;
    }

    public function banknotai() {
      
        return $this->banknotaid;
    }

    public function ideti($kiekis) : int{
        if($kiekis<=2){

            return  $this->metaliniaiPinigai[]=$kiekis;
        
        }
        else{
            return  $this->popieriniaiPinigai[]=$kiekis;
        }

    }
   
    public function skaiciuoti():void{
        echo array_sum( $this->  metaliniaiPinigai) . ' metaliniu pinigu ir ' .array_sum($this->popieriniaiPinigai) . ' popierinius pinigu.  ' .'<br>';
        echo 'Dabar pinigineje yra '.count($this->metaliniaiPinigai) . ' kapeikos ir ' . count( $this->popieriniaiPinigai) . ' banknotai '.'<br>';
    }


}