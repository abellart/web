<?php

namespace Abellart\Lw3;

use Abellart\Pizzastore\Pizza;

class MargaritaPizza extends Pizza
{
    public function __construct()
    {
        $this->name = 'Маргарита';
        $this->sauce = 'Томатный соус';
        $this->toppings = ['сыр ', 'помидоры ', 'базилик '];
    }
}
