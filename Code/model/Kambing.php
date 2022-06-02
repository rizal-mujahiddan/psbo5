<?php
    class Kambing extends Hewan_Ternak{
        protected $bobotmeatkambing;
        protected $bobothair;

    }

    class Kambing_Perah extends Kambing{
        private $milkstatus;
        private $meatstatus;
        private $volumemilk;

        function meatproduce(){

        }
        function milkproduce(){

        }
        function hairproduce(){

        }

    }

    class Kambing_Potong extends Kambing{
        private $meatstatus;
        function meatproduce(){

        }
        function hairproduce(){

        }
    }

?>