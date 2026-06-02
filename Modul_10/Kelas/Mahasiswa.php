<?php
require_once "Manusia.php";

class mahasiswa extends Manusia
{
    protected $NIM;
    protected $jurusan;
    protected $kelas;

    public function __construct($nama)
    {
        
        $this->setNama($nama);
    }

    // Getter dan Setter NIM
    public function getNim()
    {
        return $this->NIM;
    }

    public function setNIM($nim)
    {
        $this->NIM = $nim;
    }

    // Getter dan Setter jurusan
    public function getJurusan()
    {
        return $this->jurusan;
    }

    public function setJurusan($jurusan)
    {
        $this->jurusan = $jurusan;
    }

    // Getter dan Setter kelas
    public function getKelas()
    {
        return $this->kelas;
    }

    public function setKelas($kelas)
    {
        $this->kelas = $kelas;
    }
}