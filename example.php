<?php
abstract class elec{
    
    
    public function __construct( public $name,public $price,public $quantity)
    {
        $this->$name=$name;
        $this->$price=$price;
        $this->$quantity=$quantity;

    }
    abstract public function setdiscount();
    abstract public function printdiscount();
    
}
class laptop extends elec{

public static $discount;
public function setdiscount()
{
    $discount=$this->price*0.5;
    return $this;

}

    public function printdiscount()
    
    {
        
        $price_after=$this->price - $this->discount;
        echo "laptop name: $this->name price: $this->price after dis :$price_after";
        return $this;
    }
} 

class mobile extends elec{
    public  $discount=55;

    public function setdiscount()
    {
        $this->discount=$this->price*0.010;
        return $this;
    }
    
    public function printdiscount()
        
    {   $price_after=$this->price - $this->discount;
        echo "mobile name: $this->name price: $this->price after dis :$price_after";
            return $this;
    }
} 

    $mobile1=new mobile("hp",10000,2);
    $mobile1->setdiscount()->printdiscount();
