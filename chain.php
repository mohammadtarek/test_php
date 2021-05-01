<?php
class Number {
    private $num;
    public function get_num($num){
        $this-> num=$num;
        return $this;

    }
    public function mulby2(){
        $this->num *=2;
        return $this;


    }
    public function add_two (){
        $this->num+=2;
        return $this;
    }
    public function print(){
        echo $this->num;
    }
}
$num = new Number;
$num->get_num(3)->mulby2()->add_two()->print();