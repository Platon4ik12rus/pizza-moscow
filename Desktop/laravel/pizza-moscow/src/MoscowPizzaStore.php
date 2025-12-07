<?php

declare(strict_types=1);

namespace PizzaMoscow;

use PizzaFactory\Pizza;
use PizzaFactory\PizzaStore;

class MoscowPizzaStore extends PizzaStore
{
    protected function createPizza(string $type): Pizza
    {
        return match ($type) {
            'cheese'    => new CheesePizza(),
            'pepperoni' => new PepperoniPizza(),
            'veggie'    => new VeggiePizza(),
            default     => throw new \InvalidArgumentException("Неизвестный тип: $type"),
        };
    }
}