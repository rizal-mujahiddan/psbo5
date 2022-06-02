<?php
    class Sapi extends Hewan_Ternak{
        protected $bobotmeatsapi;
    }

    class Sapi_Perah extends Sapi{
        private $milkstatus;
        private $meatstatus;
        private $volumemilk;

        function milkproduce($volumemilk, $milkstatus){
            if($milkstatus==1){

            }
            else{

            }
        }
        function meatproduce($bobotmeatsapi){

        }
    }

    class Sapi_Potong extends Sapi{
        private $meatstatus;
        function meatproduce($bobotmeatsapi){

        }
    }

?>