<?php

namespace Abellart\Lw3;

use Abellart\Pizzastore\Pizza;
use Abellart\Pizzastore\PizzaStore;
use Abellart\Lw3\BaconPizza;
use Abellart\Lw3\VeggiePizza;
use Exception;

class SecondPizzaStore extends PizzaStore
{
    public function createPizza(string $type): Pizza
    {
        if ($type === 'bacon') {
            return new BaconPizza();
        }

        if ($type === 'veggie') {
            return new VeggiePizza();
        }

        throw new Exception('Такой пиццы нет');
    }
}
