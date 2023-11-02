<?php

namespace Abellart\Lw3;

use Abellart\Pizzastore\Pizza;

class PepperoniPizza extends Pizza
{
    public function __construct()
    {
        $this->name = 'Пепперони';
        $this->sauce = 'Томатный соус';
        $this->toppings = ['сыр ', 'пепперони '];
    }
}