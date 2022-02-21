<?php

function orderPizza($pizzaType, $customer)
{
    $address = 'unknown';
    if ($customer == 'Koen') {
        $address = 'a yacht in Antwerp';
    } elseif ($customer == 'Manuele') {
        $address = 'somewhere in Belgium';
    } elseif ($customer == 'students') {
        $address = 'BeCode office';
    }

    $type = $pizzaType;
    $price = calcAmount($type);
    echo "Creating new order... <br> A {$pizzaType} pizza should be sent to {$customer} <br> The address: {$address} <br>
    The bill is € {$price} <br> Order finished.<br><br>";
}

function calcAmount($pizzaType)
{
    $cost = 'unknown';

    if ($pizzaType == 'margherita') {
        $cost = 5;
    }
    if ($pizzaType == 'golden') {
        $cost = 100;
    }
    if ($pizzaType == 'calzone') {
        $cost = 10;
    }
    if ($pizzaType == 'hawaii') {
        throw new Exception('Computer says no');
    }
    return $cost;
}

function orderTotalPizza()
{
    orderPizza('calzone', 'Koen');
    orderPizza('margherita', 'Manuele');

    orderPizza('golden', 'students');
}

orderTotalPizza();
