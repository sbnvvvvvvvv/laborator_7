<?php
    class Product
    {
        public $name;
        public $description;
        public $cost;
        public $country;
        public function about_product()
        {
            echo "Product: ".$this -> name."<br>".
            "Cost: ".$this -> cost."<br>".
            "description: ".$this -> description."<br>".
            "Made In ".$this -> country."<br>";
            
            
        }
        public function new_information($name, $description, $country, $cost)
        {
            $this -> name = $name;
            $this -> description = $description;
            $this -> country = $country;
            $this -> cost = $cost;
        }
        public function new_cost($temp)
        {
            $this -> cost = $temp;
        }
    }

?>