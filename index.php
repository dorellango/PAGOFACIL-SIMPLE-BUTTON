<?php

include_once 'vendor/autoload.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>SIMPLE PAGO FACIL BUTTON</title>
  <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
  <div class="container mx-auto">
    <div class="h-screen flex items-center justify-center">
      <div class="flex flex-col font-mono">
          <h1 class="text-2xl mb-4 texr-gray-600 text-center">How much they owe you?</h1>
          <form method="POST" action="/process.php">
            <input
              name="ammount"
              type="number"
              class="font-mono p-4 rounded shadow bg-gray-300 mb-4 w-full">
            <button
              type="submit"
              class="py-2 px-4 rounded bg-teal-600 text-teal-100 w-full mb-4"
              type="submit">¡PAYME 😄(PF)!</button>
              <p class="text-sm text-gray-500 text-center">Through <strong>Pagofacil SDK</strong></p>
          </form>
      </div>
    </div>
  </div>
</body>
</html>
