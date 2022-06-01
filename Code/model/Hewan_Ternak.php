<?php
    abstract class Hewan_Ternak{
        public $id;
        protected $jenkel;
        protected $umur;
        protected $kesehatan;
        protected $bobot;
        protected $pakan;
        protected $masuk;
        protected $keluar;
        protected $statusjual;
        public function __construct($id, $jenkel, $umur, $kesehatan, $bobot, $pakan, $masuk, $keluar, $statusjual) {
            $this->$id = $id;
            $this->$jenkel = $jenkel;
            $this->$umur = $umur;
            $this->$kesehatan = $kesehatan;
            $this->$bobot = $bobot;
            $this->$pakan = $pakan;
            $this->$masuk = $masuk;
            $this->$keluar = $keluar;
            $this->$statusjual = $statusjual;
        }
        abstract public function status(): string;
        abstract public function produce(): string;
        abstract public function health(): bool;
    }

    // class Sapi extends Hewan_Ternak{
    //     protected $bobotmeatsapi;
    // }

    // class Unggas extends Hewan_Ternak{
    //     protected $bobotmeatunggas;
    //     protected $jumlahegg;
    // }

    // class Kambing extends Hewan_Ternak{
    //     protected $bobotmeatkambing;
    //     protected $bobothair;
    // }
?>