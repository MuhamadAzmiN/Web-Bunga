<?php 


class Calculate {
    public $waktu,
           $modal,
           $bunga;

    public function hitungBungaSederhana()
    {
    return $this->modal * ($this->bunga / 100) * $this->waktu;
    }


    public function getWaktu($waktu)
    {
        $this->waktu = $waktu;
    }


    public function getModal($modal){
        $this->modal = $modal;
    }   


    public function getBunga($bunga){
        $this->bunga = $bunga;
    }


}
$bunga = new Calculate();
$bunga->getModal(1000000);
$bunga->getWaktu(5);
$bunga->getBunga(10);
echo $bunga->hitungBungaSederhana();