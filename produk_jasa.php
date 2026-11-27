<?php

//panggil propertyconstant
use Pbo\Marketplace\jasa;

require('./jasa.php');

//object
$produk = new jasa();

$produk->setKode('p001') 
      ->setnama('Laptop')
      ->setHarga(1000000)
      ->setstok(5);

//hasilnya
echo "produk: ". $produk->getNama();
echo "<br/>";
echo "harga: ". $produk->getHarga();
echo "<br/>";
echo "stock: ". $produk->getStok();
echo "<br/>";
echo "pajak: ".  $produk->pajak() ."%";
echo "<br/>";
echo "<br/>";
echo "Total harga setelah pajak: Rp.". $produk->total();

echo "<br/>";
echo "Metode pembayaran: ", $produk ->payment('qris');