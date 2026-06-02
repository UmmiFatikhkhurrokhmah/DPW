<?php
require_once 'Database.php';

class Mahasiswa extends Database {
    public function tambah($npm, $namaMhs, $prodi, $alamat, $noHP) {
        $statement = $this->con->prepare("INSERT INTO t_mahasiswa (npm, namaMhs, prodi, alamat, noHP) VALUES (?, ?, ?, ?, ?)");
        $statement->bind_param("issss", $npm, $namaMhs, $prodi, $alamat, $noHP);
        $statement->execute();
        return $statement;
    }

    public function tampilSemua() {
        $statement = $this->con->prepare("SELECT * FROM t_mahasiswa");
        $statement->execute();
        $hasil = $statement->get_result();
        return $hasil;
    }

    public function tampilSatu($npm) {
        $statement = $this->con->prepare("SELECT * FROM t_mahasiswa WHERE npm=?");
        $statement->bind_param("i", $npm);
        $statement->execute();
        $hasil = $statement->get_result();
        return $hasil;
    }

    public function ubah($npm, $namaMhs, $prodi, $alamat, $noHP) {
        $statement = $this->con->prepare("UPDATE t_mahasiswa SET namaMhs=?, prodi=?, alamat=?, noHP=? WHERE npm=?");
        $statement->bind_param("ssssi", $namaMhs, $prodi, $alamat, $noHP, $npm);
        $statement->execute();
        return $statement;
    }
    
    public function hapus($npm) {
        $statement = $this->con->prepare("DELETE FROM t_mahasiswa WHERE npm=?");
        $statement->bind_param("i", $npm);
        $statement->execute();
        return $statement;
    }
}
?>