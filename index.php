<?php

// customer = for who
function ordr_pz($pizzaType, $customer)
{
    $type = $pizzaType;
    echo 'Creating new order... <br>';
    $toPrint = 'A ';
    $toPrint .= $pizzaType;
    $price = calc_cts($type);

    $address = 'unknown';
    if ($customer == 'koen') {
        $address = 'a yacht in Antwerp';
    } elseif ($customer == 'manuele') {
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

function total_price($price)
{
    return $price;
}

function test($pizzaType)
{
    echo "Test: type is {$pizzaType}. <br>";
}

function calc_cts($pizzaType)
{
    $cst = 'unknown';

    if ($pizzaType == 'marguerita') {
        $cst = 5;
    } else {
        if ($pizzaType == 'golden') {
            $cst = 100;
        }

        if ($pizzaType == 'calzone') {
            $cst = 10;
        }

        if ($pizzaType == 'hawaii') {
            throw new Exception('Computer says no');
        }
    }

    return $cst;
}

function ordr_piz_all()
{
    $test = 0;
    ordr_pz('calzone', 'koen');
    ordr_pz('marguerita', 'manuele');

    ordr_pz('golden', 'students');
}

function make_Allhappy($doIt)
{
    if ($doIt) {
        ordr_piz_all();
    } else {
        // Should not do anything when false
    }
}

make_Allhappy(true);
