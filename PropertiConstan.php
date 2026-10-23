<?php
class produk{
    public string $kokde;
    public string $nama;
    public int $harga;
    public int $stock;

    public const PAJAK = 0.11;

    public function __construct($kode, $nama, $harga,$stock) {
        $this->kode = $kode;
        $this->nama = $nama;
        $this->harga = $harga;
        $this->stock = $stock;
    }
    
    public function pajak() {
        return self::PAJAK * 100;
    }

    public function total() {
        return $this->harga + ($this->harga * self::PAJAK);
    }
}

//object
$produk = new produk ('P0001','Laptop',1000000,5);

//hasil
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
?>