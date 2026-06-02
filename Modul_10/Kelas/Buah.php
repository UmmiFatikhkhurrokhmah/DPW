<?php

class buah
{
    public    $nama;
    protected $warna;
    private   $berat;

    // Getter & Setter warna (protected)
    public function getWarna()
    {
        return $this->warna;
    }

    public function setWarna($warna)
    {
        $this->warna = $warna;
    }

    // Getter & Setter berat (private)
    public function getBerat()
    {
        return $this->berat;
    }

    public function setBerat($berat)
    {
        $this->berat = $berat;
    }
}

$mangga        = new buah();
$mangga->nama  = 'mangga';           
$mangga->setWarna('Kuning');        
$mangga->setBerat('300');           

echo "Nama  : " . $mangga->nama . "<br>";
echo "Warna : " . $mangga->getWarna() . "<br>";
echo "Berat : " . $mangga->getBerat() . " gram<br>";