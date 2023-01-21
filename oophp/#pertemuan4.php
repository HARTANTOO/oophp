<!-- Belajar Contractor PHP -->

<?php
class Produk
{
  //property
  public $mobil = "mobil",
    $merek = "merek",
    $tipe  = "tipe",
    $harga = 0;

  //method constructor
  public function __construct($mobil = "mobil", $merek = "merek", $tipe = "tipe", $harga = "0")
  {
    $this->mobil = $mobil;
    $this->merek = $merek;
    $this->tipe  = $tipe;
    $this->harga = $harga;
  }

  //method
  public function getlabel()
  {
    return "$this->merek,$this->tipe,$this->harga";
  }
}
$produk1 = new Produk("Camry", "Toyota", "Sedan", 100000);
$produk2 = new Produk("HRV", "Honda", "Hatchback", 3000000);

echo "Camry :" . $produk1->getlabel();
echo "<br>";
echo "HRV :" . $produk2->getlabel();
