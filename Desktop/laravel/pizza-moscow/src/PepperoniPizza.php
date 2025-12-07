<?php

declare(strict_types=1);

namespace PizzaMoscow;

use PizzaFactory\Pizza;

class PepperoniPizza extends Pizza
{
    public function __construct()
    {
        $this->name     = 'Пепперони';
        $this->sauce    = 'Томатный соус';
        $this->toppings = ['Пепперони', 'Моцарелла', 'Ещё немного пепперони'];
    }
}