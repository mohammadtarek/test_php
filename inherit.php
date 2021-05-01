<?php
class person{
    public $name,$email;
    public function greet(){
        echo "hello user $this->name";
    }
}
class teacher extends person{
public $subject,$salary;
public function greet(){
    echo"hi teacher over ride $this->name";
}
public function addsubject(){}
}
class student extends person{
    public $grade , $acyear;
    public function updategrade(){

    }

}
$ahmed=new teacher;
$ahmed->name='ahmed';
$ahmed->greet();
echo"<br>";
print_r($ahmed);

abstract class user{
    public $name,$age,$email;
    public function __construct($name,$age,$email)
    {
        $this->name=$name;
        $this->age=$age;
        $this->email=$email;
        
    }
    public function greet(){
        echo"hello user $this->name<br>";
    }
    abstract public function set_data($data);
}
class teachers extends user{
    public $subject;
    public function set_data($data)
    {
        //dp
    }
    public function greet()
    {
        echo "hello $this->name<br>";
    }
}