<?php

namespace Abellart\Lw3;

use Abellart\Pizzastore\Pizza;
use Abellart\Pizzastore\PizzaStore;
use Abellart\Lw3\MargaritaPizza;
use Abellart\Lw3\PepperoniPizza;
use Exception;

class FirstPizzaStore extends PizzaStore
{
    public function createPizza(string $type): Pizza
    {
        if ($type === 'margarite') {
            return new MargaritaPizza();
        }

        if ($type === 'pepperoni') {
            return new PepperoniPizza();
        }
        
        throw new Exception('Такой пиццы нет');
    }
}
