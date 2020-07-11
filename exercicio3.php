<?php

    class Properties {
        private $x = 1;
        private $y = 1;
        private $z = 1;
    
        function getX(){
            return $this->x;
        }

        function setX($value){
            $this->x = $value;
        }

        function getY(){
            return $this->y;
        }

        function setY($value){
            $this->y = $value;
        }

        function getZ(){
            return $this->z;
        }

        function setZ($value){
            $this->z = $value;
        }

        function Multiply(){
            return $this->x * $this->y * $this->z;
        }
        
    } 

    $prop = new Properties;

    $prop->setX(3);
    $prop->sety(5);
    $prop->setz(6);

    print $prop->Multiply();

?>
