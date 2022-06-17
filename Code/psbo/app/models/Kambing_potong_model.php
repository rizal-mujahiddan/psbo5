<?php


require_once 'Kambing_model.php';

class Kambing_potong_model extends Kambing_model{
    private $meatstatus;
    
    protected $db;
    
    public function __construct()
    {
        $this->db = parent::__construct();
        return $this->db;
    }
    function meatproduce(){

    }
    function hairproduce(){

    }

    public function tambahData($data) {
        $query = "INSERT INTO ternak VALUES 
                    ('', :jenis, :jk, :umur, :keadaan, :masuk, :daging, '-', :rambut)";

        $this->db->query($query);
        $this->db->bind('jenis', $data['jenis']);
        $this->db->bind('jk', $data['jk']);
        $this->db->bind('umur', $data['umur']);
        $this->db->bind('keadaan', $data['keadaan']);
        $this->db->bind('masuk', $data['masuk']);
        $this->db->bind('daging', $data['daging']);
        $this->db->bind('rambut', $data['rambut']);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function ubahData($data) {
        $query = "UPDATE ternak SET 
                    jenis = :jenis,
                    jk = :jk,
                    umur = :umur,
                    keadaan = :keadaan,
                    masuk = :masuk,
                    daging = :daging,
                    rambut = :rambut WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('id', $data['id']);
        $this->db->bind('jenis', $data['jenis']);
        $this->db->bind('jk', $data['jk']);
        $this->db->bind('umur', $data['umur']);
        $this->db->bind('keadaan', $data['keadaan']);
        $this->db->bind('masuk', $data['masuk']);
        $this->db->bind('daging', $data['daging']);
        $this->db->bind('rambut', $data['rambut']);

        $this->db->execute();
        return $this->db->rowCount();
    }
}

?>