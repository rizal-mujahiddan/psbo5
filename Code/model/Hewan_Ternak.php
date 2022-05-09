<?php
    abstract class Hewan_Ternak{
        public $nama;
        protected $berat;
        protected $tinggi;
        public function __construct($nama, $berat, $tinggi) {
            $this->nama = $nama;
            $this->$berat = $berat;
            $this->$tinggi = $tinggi;
        }
        abstract public function bunyi(): string;
    }
?>