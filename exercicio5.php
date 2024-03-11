<?php

function invertString($str) {
    $invertedStr = '';
    $length = strlen($str);

    for ($i = $length - 1; $i >= 0; $i--) {
        $invertedStr .= $str[$i];
    }

    return $invertedStr;
}

$string = "Teste de String";

$invertedString = invertString($string);

echo "String original: $string\n";
echo "String invertida: $invertedString\n";