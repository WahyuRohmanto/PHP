

<?php
require_once "Bentuk.php";

class persegiPanjang extends Bentuk2D 
{
    public $panjang, $lebar;

    public function __construct($panjang,$lebar)
    {
        $this->panjang = $panjang;
        $this->lebar =$lebar;
    }

    public function namaBidang()
    {
        return "Persegi Panjang";
    }

    public function luasBidang()
    {
     $luas = $this->panjang * $this->lebar;
     return $luas;
    }

    public function kelilingBidang()
    {
      $keliling = 2 * ($this->panjang + $this->lebar);
      return $keliling;
    }


}



?>