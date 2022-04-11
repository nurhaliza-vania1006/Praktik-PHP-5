<?php
class dispenser {
    protected $volume;
    protected $hargaSegelas;
    private $volumeGelas;
    public $namaminuman;

    public function isi($vol){
        $this->volume = $vol;
        return $vol;
    }
    public function harga($harga){
        $this->hargaSegelas = $harga;
        return $harga;
    }
    public function volumgel ($vlmg){
        $this->volumeGelas = $vlmg;
        return $vlmg;
    }
    function nama($nama){
        $this->namaminuman = $nama;
        return $nama;
    }

}

$wadah = new Dispenser();
echo '<br/>' .$wadah -> isi('Isi : 300 L');
echo '<br/>' .$wadah -> harga('Harga : Rp 20000,-');
echo '<br/>' .$wadah -> volumgel('Volume Gelas : 1 L');
echo '<br/>' .$wadah -> nama('Produk : Hydro Coco');
?>