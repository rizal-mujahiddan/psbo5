<?php

class Ternak_model {
    private $tabel = 'ternak';
    private $db;

    protected $id;
    protected $jenis;
    protected $jk;
    protected $umur;
    protected $keadaan;
    protected $masuk;  

   
    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllData() {
        $this->db->query('SELECT * FROM '. $this->tabel);
        return $this->db->resultSet();
    }

    
    public function getData($id) {
        $query = "SELECT * FROM ternak WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->single();
    }

    public function hapusData($id) {
        $query = "DELETE FROM ternak WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahData($id) {
        $query = "UPDATE ternak SET WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function getJumlahSapiPerah() {
        $query = "SELECT * FROM ternak WHERE jenis = 'sapiperah'";
        $this->db->query($query);
        $this->db->execute();
        return $this->db->rowCount();
    }
    
    public function getJumlahSapiPotong() {
        $query = "SELECT * FROM ternak WHERE jenis = 'sapipotong'";
        $this->db->query($query);
        $this->db->execute();
        return $this->db->rowCount();
    }
    
    public function getJumlahKambingPerah() {
        $query = "SELECT * FROM ternak WHERE jenis = 'kambingperah'";
        $this->db->query($query);
        $this->db->execute();
        return $this->db->rowCount();
    }
    
    public function getJumlahKambingPotong() {
        $query = "SELECT * FROM ternak WHERE jenis = 'kambingpotong'";
        $this->db->query($query);
        $this->db->execute();
        return $this->db->rowCount();
    }
    
    public function getJumlahSakit() {
        $query = "SELECT * FROM ternak WHERE keadaan = 'tidak'";
        $this->db->query($query);
        $this->db->execute();
        return $this->db->rowCount();
    }
    
    public function getJumlahSehat() {
        $query = "SELECT * FROM ternak WHERE keadaan = 'ya'";
        $this->db->query($query);
        $this->db->execute();
        return $this->db->rowCount();
    }
}

?>
