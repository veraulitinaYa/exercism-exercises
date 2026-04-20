<?php

class PizzaPi
{
    public function calculateDoughRequirement($pizzas_qt, $persons_nbr)
    { $add_dough_amt = 20;
      $basic_dough_amt = 200;
      return $pizzas_qt*(($persons_nbr*$add_dough_amt) + $basic_dough_amt);

    }

    public function calculateSauceRequirement($pizzas, $can_volume)
    {
        $vol_per_pizza = 125;
        return ($pizzas * $vol_per_pizza)/$can_volume;
    }

    public function calculateCheeseCubeCoverage($cube_side, $thickness, $pizza_diameter)
    {


        return (int)(($cube_side**3)/ ($thickness*pi()*$pizza_diameter));
    }

    public function calculateLeftOverSlices($pz, $fr)
    {
        $sl = 8;
        $numb = $pz*$sl;
        return ($numb%$fr);
    }
}
