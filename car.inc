<?php

class cars{
    public $color;
     public $type;
     private $mod;
     function get($var){
         $this->mod=$var;
     }
     function pr(){
         return($this->mod);
     }
             function getower()
     {
         $owner=array("mar","mahdi");
         return $owner;
     }
}
