<?php
class myparent
{
    protected $name = 'kareem';
    public function test()
    {
        echo $this->name;
    }
}
class child extends myparent
{
    public function test()
    {
        echo $this->name;
    }
}
$obj = new myparent;
echo $obj->name;