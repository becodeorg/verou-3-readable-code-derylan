<?php

// customer = for who
function orderPizza($pizzaType, $customer)
{
    $type = $pizzaType;
    echo 'Creating new order... <br>';
    $toPrint = 'A ';
    $toPrint .= $pizzaType;
    $price = calcAmount($type);

    $address = 'unknown';
    if ($customer == 'Koen') {
        $address = 'a yacht in Antwerp';
    } elseif ($customer == 'Manuele') {
        $address = 'somewhere in Belgium';
    } elseif ($customer == 'students') {
        $address = 'BeCode office';
    }

    $toPrint .=   ' pizza should be sent to ' . $customer . ". <br>The address: {$address}.";
    echo $toPrint;
    echo '<br>';
    echo 'The bill is €' . $price . '.<br>';
    echo "Order finished.<br><br>";
}

function totalPrice($price)
{
    return $price;
}

function test($pizzaType)
{
    echo "Test: type is {$pizzaType}. <br>";
}

function calcAmount($pizzaType)
{
    $cost = 'unknown';

    if ($pizzaType == 'marguerita') {
        $cost = 5;
    } else {
        if ($pizzaType == 'golden') {
            $cost = 100;
        }

        if ($pizzaType == 'calzone') {
            $cost = 10;
        }

        if ($pizzaType == 'hawaii') {
            throw new Exception('Computer says no');
        }
    }

    return $cost;
}

function orderTotalPizza()
{
    $test = 0;
    orderPizza('calzone', 'Koen');
    orderPizza('marguerita', 'Manuele');

    orderPizza('golden', 'students');
}

function makeAllHappy($doIt)
{
    if ($doIt) {
        orderTotalPizza();
    } else {
        // Should not do anything when false
    }
}

makeAllHappy(true);
