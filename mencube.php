<?php
class produk {
    public $namaBarang = "Laptop ",
           $merk = "Pavillion",
            $harga = "12000000";
    /* public function sayHi(){
        return "HI";
    } */
    public function getCetak(){
        return "$this->namaBarang, $this->merk, $this->harga";
    }
}
/* $produk1 = new produk();
$produk1->namaBarang= "Flashdisk";
var_dump($produk1); */

$produk2 = new  produk();
$produk2->namaBarang = "Mouse";
$produk2->propertyBaru= "Biru";
echo "Nama Barang :" , $produk2->getcetak();

echo "<br";

$produk3 = new produk ();
$produk3->namaBarang="Flashdisk";
$produk3->merk="Sanddisk";
$produk3->harga=150000;
echo "Nama Barang :", $produk3->getCetak();