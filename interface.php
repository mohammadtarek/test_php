<?php
interface shape{
    public function area();
    public function diameter();

}
class square implements shape{
    public function __construct(private $len)
    {
        
    }
    public function area(){

        return $this->len**2;


    }
    public function diameter()
    {
        return$this->len*4;
    }
}