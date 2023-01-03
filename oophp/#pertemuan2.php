<?php
class laptop
{
  //property
  var $pemilik;
  var $merek;
  var $ukuran_layar;

  //method
  function hidupkan_laptop()
  {
    return "hidupkan laptop";
  }

  function matikan_laptop()
  {
    return "matikan laptop";
  }
}

//instansiasi
$laptop_anto = new laptop();

//set property
$laptop_anto->pemilik = "dwi";
$laptop_anto->merek = "asus";
$laptop_anto->ukuran_layar = "15 inchi";

//tampilkan property
echo $laptop_anto->pemilik;
echo "<br>";
echo $laptop_anto->merek;
echo "<br>";
echo $laptop_anto->ukuran_layar;
echo "<br>";

//menampilkan method
echo $laptop_anto->hidupkan_laptop();
echo "<br>";
echo $laptop_anto->matikan_laptop();
