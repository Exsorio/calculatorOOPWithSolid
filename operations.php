<?php 
    require_once('calculator.php');
    class Operations extends Calculator
    {
        private $total;

        public function __construct($numberOne, $numberTwo){
            parent::__construct($numberOne, $numberTwo);
            $this->total = 0;
        }

        public function  somar(){
            return $this->total = $this->numberOne + $this->numberTwo;
        }
        public function  subtrair(){
            return $this->total = $this->numberOne - $this->numberTwo;
        }
    
        public function  multiplicar(){
            return $this->total = $this->numberOne * $this->numberTwo;
        }
    
        public function  dividir(){
            if($this->numberTwo == 0){
                return $this->total = 'Infinit';
            }else{
                return $this->total = $this->numberOne / $this->numberTwo;
            }
        }

    }
