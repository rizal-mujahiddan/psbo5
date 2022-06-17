<?php


require_once 'Ternak_model.php';

    class Kambing_model extends Ternak_model{
        protected $bobotmeatkambing;
        protected $bobothair;

        
        function meatproduce(){
            $query = "SELECT * FROM ternak WHERE jenis = 'kambingperah'";
            $this->db->query($query);
            $this->db->execute();

            $data = $this->db->resultSet();
            $sum = 0.0;
            foreach ($data as $dt) :
                $sum = $sum + $dt['daging'];
            endforeach;
            
            $query2 = "SELECT * FROM ternak WHERE jenis = 'kambingpotong'";
            $this->db->query($query2);
            $this->db->execute();

            $data = $this->db->resultSet();
            foreach ($data as $dt) :
                $sum = $sum + $dt['daging'];
            endforeach;
            return $sum;
        }

        function hairproduce(){
            $query = "SELECT * FROM ternak WHERE jenis = 'kambingperah'";
            $this->db->query($query);
            $this->db->execute();

            $data = $this->db->resultSet();
            $sum = 0.0;
            foreach ($data as $dt) :
                $sum = $sum + $dt['rambut'];
            endforeach;
            
            $query2 = "SELECT * FROM ternak WHERE jenis = 'kambingpotong'";
            $this->db->query($query2);
            $this->db->execute();

            $data = $this->db->resultSet();
            foreach ($data as $dt) :
                $sum = $sum + $dt['rambut'];
            endforeach;
            return $sum;
        }

        public function __construct()
        {
            $this->db = new Database;
            return $this->db;
        }
        
        public function getAllData() {
            $this->db->query('SELECT * FROM '. $this->tabel);
            return $this->db->resultSet();
        }

    public function tambahData($data) {
        $query = "INSERT INTO ternak VALUES 
                    ('', :jenis, :jk, :umur, :keadaan, :masuk, :daging, :susu, :rambut)";

        $this->db->query($query);
        $this->db->bind('jenis', $data['jenis']);
        $this->db->bind('jk', $data['jk']);
        $this->db->bind('umur', $data['umur']);
        $this->db->bind('keadaan', $data['keadaan']);
        $this->db->bind('masuk', $data['masuk']);
        $this->db->bind('daging', $data['daging']);
        $this->db->bind('susu', $data['susu']);
        $this->db->bind('rambut', $data['rambut']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    }


?>