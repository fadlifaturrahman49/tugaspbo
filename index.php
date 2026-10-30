<?php

//panggil propertyconstant
use Pbo\Marketplace\produk;

require('./PropertiConstan.php');

//object
$produk = new produk('P0001', 'Laptop', 1000000, 5);

//hasilnya
echo "produk: ". $produk->nama;
echo "<br/>";
echo "harga: ". $produk->harga;
echo "<br/>";
echo "stock: ". $produk->stock;
echo "<br/>";
echo "pajak: ".  $produk->pajak() ."%";
echo "<br/>";
echo "<br/>";
echo "Total harga setelah pajak: Rp.". $produk->total();