<?php
class Client
{
    public $name;
    public $lastOrder;
    public $money;
    public function about_client()
    {
        echo "Имя: ".$this -> name."<br>".
             "Последний заказ: ".$this -> lastOrder."<br>".
             "Баланс: ".$this -> money."<br>";
    }
    public function last_order($item)
    {
        $this -> lastOrder = $item;
    }
    public function monyee($temp)
    {
        $this -> monye += $temp;
    }
    public function create($name, $lastOrder, $money)
    {
        $this -> name = $name;
        $this -> lastOrder = $lastOrder;
        $this -> money = $money;
    }



}


?>