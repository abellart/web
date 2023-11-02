<?php

namespace Abellart\Lw3;

use Abellart\Pizzastore\Pizza;

class VeggiePizza extends Pizza
{
    public function __construct()
    {
        $this->name = 'Вегетарианская';
        $this->sauce = 'Томатный соус';
        $this->toppings = ['баклажаны ', 'маслины ', 'лук ', 'кукуруза ', 'помидоры ', 'сыр ', 'перец '];
    }
}
