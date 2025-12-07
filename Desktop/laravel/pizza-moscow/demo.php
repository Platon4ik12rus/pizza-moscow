<?php
require 'vendor/autoload.php';

use PizzaMoscow\MoscowPizzaStore;

echo "=== ПИЦЦЕРИЯ «МОСКВА» ОТКРЫТА! ===\n\n";

$store = new MoscowPizzaStore();

echo "→ Заказ: сырная\n";
$store->orderPizza('cheese');
echo "\n";

echo "→ Заказ: пепперони\n";
$store->orderPizza('pepperoni');
echo "\n";

echo "→ Заказ: овощная\n";
$store->orderPizza('veggie');
echo "\n";

echo "Всё готово! Приятного аппетита!\n";