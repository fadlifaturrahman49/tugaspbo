<?php

namespace Pbo\Marketplace;

require_once('./PropertiConstan.php');

use Pbo\Marketplace\Produk;

class Jasa {

    use Produk;

    public function payment($tipe) {

        return match($tipe) {
            "virtual" => "virtual account",
            "qris" => "QRIS",
            default => "hanya bisa pakai va dan qris"
        };

    }
}