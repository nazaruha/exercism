<?php

class PizzaPi
{
    public function calculateDoughRequirement($pizzas, $persons)
    {
        return $pizzas * ($persons * 20 + 200);
    }

    public function calculateSauceRequirement($pizzas, $sauce)
    {
        define("SAUCE_PER_PIZZA", 125);
        
        return $pizzas * SAUCE_PER_PIZZA / $sauce;
    }

    public function calculateCheeseCubeCoverage($cheese_dimension, $thickness, $pizza_diameter)
    {
        return floor(($cheese_dimension**3) / ($thickness * pi() * $pizza_diameter));
    }

    public function calculateLeftOverSlices($pizzas, $friends)
    {
        return 8 % $friends;
    }
}
