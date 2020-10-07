<?php 

/* Ton code commence ici :) */

//
// Premiere partie 
//

$amount = 123;

// declaration de la fonction de conversion en dollars
function getAmountInDollar($dollar){
    $dollar = $dollar * 1.14;
    return $dollar;
}

// declaration de la fonction de conversion en yen
function getAmountInYen($yen){
    $yen = $yen * 126;
    return $yen;
}

// execution des différentes fonctions pour les tester 

$amountInDollar = getAmountInDollar($amount);

echo $amount." € = ".$amountInDollar." $ = ".getAmountInYen($amount)." Yen<br>";

$numberToConvert = $_GET['number'];
echo $numberToConvert." € = ".getAmountInDollar($numberToConvert)." $ = ".getAmountInYen($numberToConvert)." Yen<br>";

//
// Bonus
//

// Conversion générique

function getConvertedAmount($numberToConvert, $devise){
    // création d'un tableau ou nous allons concerver toutes les valeur a convertir
    $devises = [
        'USD' => 1.14,
        'JPY' => 126,
        'ARS' => 33.18
    ];  
    // J'appelle la devise que le client a souhaiter utilisé
    $convert = $numberToConvert * $devises[$devise];
    return $convert;
}

echo getConvertedAmount(100, 'ARS')."<br>";

// Est pair

function isEven($number){
    if ($number%2 === 0){
        return true;
    } else{
        return false;
    }
}

$number = $_GET['number'];

if (isEven($number) === true){
    echo 'Le nombre '.$number.' est pair<br>';
} else{
    echo 'Le nombre '.$number.' est impair<br>';
}

// Est impair

function isOdd($number){
    if ($number%2 !== 0){
        return true;
    } else{
        return false;
    }
}

if (isOdd($number) === true){
    echo 'Le nombre '.$number.' est impair<br>';
} else{
    echo 'Le nombre '.$number.' est pair<br>';
}

//
// Méga bonus
//

// je declare la fonction 
function getPlusPetitChiffre($number){
    // la fonction str_split va decomposer un nombre en tableau
    $min = min(str_split($number)); // la fonction min va ressortir la plus petite valeur d'un tableau 
    return $min;
}

$min = $_GET['number'];

echo getPlusPetitChiffre($min).'<br>';

// Conversion en binaire

$decimalNumber = $_GET['number'];

echo 'la valeur en décimal du nombre'.$decimalNumber.' est '.decbin($decimalNumber)."<br>";

// Est premier

// ici la fonction pour déterminé si un nombre est premier ou pas
function isPrime($number){

    if ($number%2 !== 0 || $number === 2){
        if ($number === 1){ 
            return $number." n'est pas un nombre premier";
        } elseif( $number/$number === 1 && $number/1 === $number){
            return $number." est un nombre premier";
        } else{
            return $number." n'est pas un nombre premier";
        }
    } else{
        return $number." n'est pas un nombre premier";
    }
}

$premierOrNot = (int) $_GET['number'];

echo isPrime($premierOrNot);
