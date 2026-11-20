<?php

namespace Pbo\Marketplace;

class produk {
    private string $kokde;
    private string $nama;
    private int $harga;
    private int $stock;

    public const PAJAK = 0.11;

    public function __construct() {

        }
    
     //setter
    public function setKode($kode) {
        $this->kode = $kode;
        return $this;
    }

    public function setnama($nama) {
        $this->nama  = $nama;
        return $this;
    }

    public function setharga($harga) {

        if($harga <= 0) {
            echo "harga tidak boleh 0";
            exit();
        }

        $this->harga = $harga;
        return $this;
    }

    public function setStok($stok) {

        if($stok <= 0) {
            echo "stok tidak boleh 0";
            exit();
        }

        $this->stok= $stok;
        return $this;
    }

    //getter
    public function getkode() {
        return $this->kode;
    }

     public function getnama() {
        return $this->nama;
    }

     public function getharga() {
        return $this->harga;
    }

     public function getstok() {
        return $this->stok;
    }
    
    //--
    public function pajak() {
        return self::PAJAK * 100;
    }

    public function total() {
        return $this->harga + ($this->harga * self::PAJAK);
    }
}


?>