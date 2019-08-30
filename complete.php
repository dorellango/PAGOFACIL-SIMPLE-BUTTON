<?php

use Dotenv\Dotenv;
use PagoFacil\lib\Transaction;

include_once 'vendor/autoload.php';

$dotenv = Dotenv::create(__DIR__);
$dotenv->load();

$transaction = new Transaction();
$transaction->setToken(getenv('PAGOFACIL_TOKEN_SECRET'));
$wasValidated = $transaction->validate($_POST);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>SIMPLE PAGO FACIL BUTTON - RESULTADO</title>
  <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
  <div class="container mx-auto">
    <div class="h-screen flex items-center justify-center">
      <div class="flex flex-col font-mono">
          <h1 class="text-2xl mb-4 texr-gray-600 text-center">
            TRANSACTION <?php echo $wasValidated ? 'SUCCESS' : 'FAIL'; ?>
          </h1>
          <div class="p-4 bg-gray-300 rounded border-dashed border-gray-600">
            <?php var_dump($_POST) ; ?>
          </div>
      </div>
    </div>
  </div>
</body>
</html>

