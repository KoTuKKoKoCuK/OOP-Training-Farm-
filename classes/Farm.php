<?php
class Farm
{
    public $cows=[];
    public $chicks=[];
    public $milk;
    public $eggs;


    public function __construct($sumCows, $sumChicks)
    {
        for ($i=1; $i<=$sumCows; $i++)
        {
            $this->cows[]=new Cow($i);
        }
        for ($i=1; $i<=$sumChicks; $i++)
        {
            $this->chicks[]=new Chicken($i);
        }
    }
    public function addCows(int $cows)
    {
        for ($i=1; $i<=$cows; $i++)
        {
            array_push($this->cows, new Cow((array_key_last($this->cows)+1)+1));
        }
    }
    public function addChicks(int $chicks)
    {
        for ($i=1; $i<=$chicks; $i++)
        {
        array_push($this->chicks, new Cow((array_key_last($this->chicks)+1)+1));
        }
    }
    public function claimMilk()
    {
        $arr=[];
        foreach ($this->cows as $cows)
        {
            $arr[]=$cows->milk;
        }
        $this->milk=$this->milk + array_sum($arr);
    }
    public function claimEggs()
    {
        $arr=[];
        foreach ($this->chicks as $chicks)
        {
            $arr[]=$chicks->eggs;
        }
        $this->eggs=$this->eggs + array_sum($arr);
    }
    public function getMilk()
    {
        return $this->milk;
    }
    public function getEggs()
    {
        return $this->eggs;
    }
}
?>