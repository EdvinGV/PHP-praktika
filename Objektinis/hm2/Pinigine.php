<?php



class Pinigine{
    public $popieriniaiPinigai=0;
    public $metaliniaiPinigai=0;

    public function ideti($kiekis) : int{
        if($kiekis<=2){
            return  $this->metaliniaiPinigai+=$kiekis;
        }
        else{
            return  $this->popieriniaiPinigai+=$kiekis;
        }

    }
    public function skaiciuoti(){
        return  $this->metaliniaiPinigai.' metaliniu pinigu ir '.$this->popieriniaiPinigai.' popierinius pinigu';
    }


}