<?php
class Chicken
{
    public $eggs;
    public $chickId;
    public function __construct($id)
    {
        $this->chickId=$id;
        $this->eggs=rand(0,1);
    }
}
?>