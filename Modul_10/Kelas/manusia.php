<?php

class Manusia
{
    // Deklarasi Variabel
    protected $name;
    protected $nik = "123212131243243";
    protected $umur;

    // Getter nama
    public function getNama()
    {
        return $this->name;
    }

    // Setter nama
    public function setNama($name)
    {
        $this->name = $name;
    }

    // Getter NIK (private - hanya bisa diakses dari dalam kelas)
    private function getNIK()
    {
        return " nik {$this->nik} ";
    }

    // Getter umur
    public function getUmur()
    {
        return $this->umur;
    }

    // Setter umur
    public function setUmur($umur)
    {
        $this->umur = $umur;
    }

    // Method publik untuk menampilkan NIK (wrapper dari getNIK yang private)
    public function tampilkanNIK()
    {
        return $this->getNIK();
    }
}