<?php

class showMonster
{

    public function __construct()
    {

    }
    public function display(array $monster)
    {
        $name = $monster["name"];
        $age = $monster["age"];
        $color = $monster["color"];
        $price = $monster["price"];
        print("The monsters name is: $name\nits age is: $age\nits base color is: $color\nkilling it will pay: $price\n");
    }

}