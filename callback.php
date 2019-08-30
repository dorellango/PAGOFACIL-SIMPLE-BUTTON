<?php

use PagoFacil\lib\Transaction;

include_once 'vendor/autoload.php';

$transaction = new Transaction();
$transaction->setToken(getenv('PAGOFACIL_TOKEN_SECRET'));

if ($transaction->validate($_POST)) {
    echo 'Orden completada exitosamente';
} else {
    throw new Exception('INVALID SIGNATURE', 422);
}
