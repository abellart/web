<?php

namespace Abellart\Lw3;

use Abellart\Pizzastore\Pizza;

class BaconPizza extends Pizza
{
    public function __construct()
    {
        $this->name = 'Бекон';
        $this->sauce = 'Томатный соус';
        $this->toppings = ['бекон ', 'помидоры ', 'сыр '];
    }
}
