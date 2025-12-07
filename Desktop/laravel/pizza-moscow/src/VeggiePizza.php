<?php

declare(strict_types=1);

namespace PizzaMoscow;

use PizzaFactory\Pizza;

class VeggiePizza extends Pizza
{
    public function __construct()
    {
        $this->name     = 'Овощная пицца';
        $this->sauce    = 'Томатный соус';
        $this->toppings = ['Болгарский перец', 'Оливки', 'Лук', 'Грибы', 'Помидоры'];
    }
}