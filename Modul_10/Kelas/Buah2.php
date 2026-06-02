<?php

class buah2
{
    public $nama;
    public $warna;
    public $bbobot;


    public function set_name($n)
    {
        $this->nama = $n;
    }

    public function set_color($n)   
    {
        $this->warna = $n;
    }

    public function set_weight($n)  
    {
        $this->bbobot = $n;
    }
}

$stroberi = new buah2();
$stroberi->set_name('Stroberi');
$stroberi->set_color('Merah');    
$stroberi->set_weight('500');      

echo "Nama   : " . $stroberi->nama   . "<br>";
echo "Warna  : " . $stroberi->warna  . "<br>";
echo "Bobot  : " . $stroberi->bbobot . " gram<br>";