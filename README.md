# PAGO FACIL SIMPLE PHP

### Getting started

Instala las dependencias

`composer install`

Ingresa tus credenciales/token entregados por pagofacil, así también como las urls de cada respuesta (ex. ngrok).

```
PAGOFACIL_TOKEN_SERVICE=
PAGOFACIL_TOKEN_SECRET=
PAGOFACIL_URL_CALLBACK=
PAGOFACIL_URL_COMPLETE=
PAGOFACIL_URL_CANCEL=
APP_URL=
```

Puedes hacer uso del archivo de entorno .env.example que se incluye en el repo.

`cp .env.example .env`