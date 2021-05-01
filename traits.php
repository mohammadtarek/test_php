<?php
trait A 
{
    public $a;
    public function testa()
{
    
}
}
trait B {
    public $b; 
    public function b()
    {

    }
}
class c{
    use a,b;
    public $c;
}
$C=new c;
print_r($C);