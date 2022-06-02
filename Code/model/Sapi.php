<?php
    class Sapi extends Hewan_Ternak{
        protected $bobotmeatsapi;

    }

    class Sapi_Perah extends Sapi{
        private $milkstatus;
        private $meatstatus;
        private $volumemilk;
    }

    class Sapi_Potong extends Sapi{
        private $meatstatus;
    }

?>