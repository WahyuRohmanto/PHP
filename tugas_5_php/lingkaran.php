<?php
require_once "Bentuk.php";

class Lingkaran extends Bentuk2D  {
public $jari_jari;

public function __construct($jari_jari)
{
   $this->jari_jari = $jari_jari;
}

public function namaBidang()
{
    return "Lingkaran";
}

public function luasBidang()
{
    $luas = 3.14 * pow($this->jari_jari,2);
    return $luas;
}

public function kelilingBidang()
{
    $keliling = 2*3.14*$this->jari_jari;
    return $keliling;
}


}

$lingkaran1 = new Lingkaran(12);



?>

