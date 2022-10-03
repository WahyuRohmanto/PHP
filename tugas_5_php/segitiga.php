<?php 
require_once "Bentuk.php";

class Segitiga extends Bentuk2D{
    public $alas,$tinggi;

    public function __construct($alas,$tinggi)
    {
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }

    public function namaBidang()
    {
       return "Segitiga Siku-Siku";
    }

    public function luasBidang()
    {
        $luas = ($this->alas * $this->tinggi)/2;
        return $luas;
    }

    public function kelilingBidang()
    {
        $alas2 = pow($this->alas,2);
        $tinggi2 = pow($this->tinggi,2);
        $sisiMiring = sqrt($alas2 + $tinggi2);
        $keliling = $this->alas + $this->tinggi + $sisiMiring;
        return $keliling;
    }

}


?>