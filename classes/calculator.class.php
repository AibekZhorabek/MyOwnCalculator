<?php

class Calculator {
    public $num1;
    public $num2;
    public $calMethod;

    public function __construct($num1, $num2, $calMethod){
        $this->num1 = $num1;
        $this->num2 = $num2;
        $this->calMethod = $calMethod;
    }

    public function option($opt){
        $result;
        switch ($this->calMethod) {
            case 'add':
                $result = $this->num1 + $this->num2;
                return $result;
                break;
            case 'substr':
                $result = $this->num1-$this->num2;
                return $result;
                break;
            case 'mul':
                $result = $this->num1*$this->num2;
                return $result;
                break;
            case 'div':
                $result = $this->num1/$this->num2;
                return $result;
                break;
            default:
                return 'Error';
                break;
        }
    }

}