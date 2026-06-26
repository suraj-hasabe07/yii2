<?php

class PizzaPi
{
    public function calculateDoughRequirement($pizzas,$persons)
    {
        return $pizzas * (($persons * 20) + 200);
    }

    public function calculateSauceRequirement($pizzas,$sauceCanVolume)
    {
        
        return ($pizzas * (125 / $sauceCanVolume));
    }

    public function calculateCheeseCubeCoverage($cheeseDimension,$thickness,$diameter)
    {
        $cubeDiamension = $cheeseDimension ** 3;
        $PI = 22/7;
        return floor($cubeDiamension/($thickness * $PI * $diameter ));
    }

    public function calculateLeftOverSlices($pizzas,$persons)
    {
       $totalSlices = $pizzas * 8;
       return $totalSlices % $persons; 
    }
}
