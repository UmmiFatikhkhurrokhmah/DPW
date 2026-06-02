<?php
class Database {
    private $hostname = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname   = "db_praktikum";

    protected $con;

    public function __construct() {
        $this->con = new mysqli($this->hostname, $this->username, $this->password, $this->dbname);
        if ($this->con->connect_error) {
            die("Connection failed: " . $this->con->connect_error);
        }
    }

    public function __destruct() {
        $this->con->close();
    }
}
?>