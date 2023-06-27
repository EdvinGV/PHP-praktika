<?php



class Kibiras1
{
    private $akmenuKiekis = 0;

    public function prideti1Akmeni(): int
    {

        return $this->akmenuKiekis += 1;
    }

    public function pridetiDaugAkmenu($kiekis): int
    {

        return $this->akmenuKiekis+=  $kiekis;
    }
}
