<?php
    class Unggas extends Hewan_Ternak{
        protected $bobotmeatunggas;
        protected $jumlahegg;

    }

    class Ayam extends Unggas{
        private $milkstatus;
        private $bobotceker;

        function meatproduce(){

        }
        function eggproduce(){

        }
    }

    class Itik extends Unggas{
        function eggproduce(){

        }
    }

    class Bebek extends Unggas{
        private $meatstatus;

        function meatproduce(){

        }
        function eggproduce(){

        }
    }
?>