<!-- Object Type -->

<?php

class inpo
{
  var $str;

  public function tampung($temp)
  {
    return $this->str = $temp;
  }

  public function cetak()
  {
    echo $this->str;
  }
}

$pesan = new inpo();
$pesan->tampung("hello World");
$pesan->cetak();


echo "<br>";






?>