<?php
interface BangunDatar {
    public function luas();
    public function keliling();
    public function enlarge($factor);
    public function shrink($factor);
}

class Lingkaran implements BangunDatar {
    private $jari_jari;

    public function __construct($jari_jari) {
        $this->jari_jari = $jari_jari;
    }

    public function luas() {
        return pi() * $this->jari_jari ** 2;
    }

    public function keliling() {
        return 2 * pi() * $this->jari_jari;
    }

    public function enlarge($factor) {
        $this->jari_jari *= $factor;
    }

    public function shrink($factor) {
        $this->jari_jari /= $factor;
    }
}

class Persegi implements BangunDatar {
    private $sisi;

    public function __construct($sisi) {
        $this->sisi = $sisi;
    }

    public function luas() {
        return $this->sisi ** 2;
    }

    public function keliling() {
        return 4 * $this->sisi;
    }

    public function enlarge($factor) {
        $this->sisi *= $factor;
    }

    public function shrink($factor) {
        $this->sisi /= $factor;
    }
}

class PersegiPanjang implements BangunDatar {
    private $panjang;
    private $lebar;

    public function __construct($panjang, $lebar) {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }

    public function luas() {
        return $this->panjang * $this->lebar;
    }

    public function keliling() {
        return 2 * ($this->panjang + $this->lebar);
    }

    public function enlarge($factor) {
        $this->panjang *= $factor;
        $this->lebar *= $factor;
    }

    public function shrink($factor) {
        $this->panjang /= $factor;
        $this->lebar /= $factor;
    }
}

class BangunDatarDescriptor {
    public static function describe($bangun) {
        if ($bangun instanceof Lingkaran) {
            $jenis = "lingkaran";
        } elseif ($bangun instanceof Persegi) {
            $jenis = "persegi";
        } elseif ($bangun instanceof PersegiPanjang) {
            $jenis = "persegi panjang";
        } else {
            $jenis = "bangun datar";
        }

        return "Bangun datar ini adalah $jenis yang memiliki luas " . $bangun->luas() . " dan keliling " . $bangun->keliling() . ".";
    }
}


$lingkaran = new Lingkaran(5);
$persegi = new Persegi(4);
$persegi_panjang = new PersegiPanjang(6, 8);

echo BangunDatarDescriptor::describe($lingkaran) . "\n";
echo BangunDatarDescriptor::describe($persegi) . "\n";
echo BangunDatarDescriptor::describe($persegi_panjang) . "\n";
?>
