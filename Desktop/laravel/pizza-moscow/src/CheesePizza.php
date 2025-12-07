<?php

declare(strict_types=1);

namespace PizzaMoscow;

use PizzaFactory\Pizza;

class CheesePizza extends Pizza
{
    public function __construct()
    {
        $this->name = 'Сырная пицца';
        $this->sauce = 'Сырный соус';
        $this->toppings = ['Моцарелла', 'Пармезан'];
    }
}