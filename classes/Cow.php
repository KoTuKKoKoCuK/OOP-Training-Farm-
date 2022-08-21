<?php
class Cow
{
    public $milk;
    public $cowId;

    public function __construct($id)
    {
        $this->cowId=$id;
        $this->milk=rand(8,12);
    }
}
?>