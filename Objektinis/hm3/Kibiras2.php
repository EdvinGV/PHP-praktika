<?php



class Kibiras2
{
    private static $akmenuKiekisKibiruose = 0;
    public $akmenai=0;
    public static function getAkmenuKiekis(): int
    {
        return self::$akmenuKiekisKibiruose;
    }
    
    
    

    public function prideti1Akmeni(): void
    {

        self::$akmenuKiekisKibiruose += 1;
    }

    public function pridetiDaugAkmenu($kiekis): void
    {

       self::$akmenuKiekisKibiruose +=  $kiekis;
    }
}
