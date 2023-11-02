<?php

namespace Abellart\Lw3;

require_once './vendor/autoload.php';

use Abellart\Lw3\FirstPizzaStore;
use Abellart\Lw3\SecondPizzaStore;

$pizzaStoreOne = new FirstPizzaStore();

$pizzaStoreOne->orderPizza('margarite');
$pizzaStoreOne->orderPizza('pepperoni');

$pizzaStoreTwo = new SecondPizzaStore();

$pizzaStoreTwo->orderPizza('bacon');
$pizzaStoreTwo->orderPizza('veggie');
