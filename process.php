<?php

use Dotenv\Dotenv;
use PagoFacil\lib\Request;
use PagoFacil\lib\Transaction;

include_once 'vendor/autoload.php';

$dotenv = Dotenv::create(__DIR__);
$dotenv->load();

$request = new Request(); // Se crea el objeto Request
$request->account_id = getenv('PAGOFACIL_TOKEN_SERVICE'); // Token Service entregado por Pago Facil
$request->amount = $_POST['ammount']; // Monto de la transaccion
$request->currency = 'CLP'; // Moneda de la transaccion
$request->reference = 'mycustomorder-' . rand(111, 999); // Numero de orden de la tienda
$request->customer_email = 'me@acme.com'; // Email del cliente
$request->url_complete = getenv('PAGOFACIL_URL_COMPLETE'); // URL a la cual se redirecciona el sistema
$request->url_cancel = getenv('PAGOFACIL_URL_CANCEL'); // URL de cancelacion
$request->url_callback = getenv('PAGOFACIL_URL_CALLBACK'); // URL de response
$request->shop_country = 'CL'; // ISO Code de pais
$request->session_id = date('Ymdhis') . rand(0, 9) . rand(0, 9) . rand(0, 9);

$transaction = new Transaction($request); // Se crea la transaccion
$transaction->environment = 'DESARROLLO'; // Se especifica el ambiente en el cual se va a trabajar, puede ser DESARROLLO, BETA o PRODUCCION
$transaction->setToken(getenv('PAGOFACIL_TOKEN_SECRET')); // Se debe colocar el Token Secret entregado por Pago Facil
$transaction->initTransaction($request); // Se inicia la transaccion enviando por parametros el request creado
