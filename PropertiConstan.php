<?php
class produk{
    public string $kokde;
    public string $nama;
    public int $harga;
    public int $stock;

    public const PAJAK = 0.11;
}

$produk = new produk ();
$produk -> kode = "nugraha";
$produk -> nama = "pc";
$produk -> harga = "1000000";
$produk -> stock = 5;

$pajak = produk::PAJAK * 100;
$jumlahpajak = $produk-> harga* produk::PAJAK;

$total = $produk->harga + $jumlahpajak;

echo "produk: ". $produk->nama;
echo "harga: ". $produk->harga;
echo "stock: ". $produk->stock;
echo "pajak: ".  $pajak;
echo "<br/>";
echo "Total harga setelah pajak: Rp.". $total;
?>