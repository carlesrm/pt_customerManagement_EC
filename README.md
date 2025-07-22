Prerequisitos para iniciar aplicación:
- php v8.2.12^
- composer v2.8.10^
- XAMPP v3.3.0^ con el modulo de MySQL en marcha
- node v22.17.1^
- npm v10.9.2^

Prueba técnica para empresa Essential Compositions

- Copiar .env adjuntado en el correo al proyecto
- Instalación de dependencias
  - `composer install`
  - `npm install`
- Ejecutar comando para crear base de datos:
  - `php artisan db:create`
- Ejecutar migraciones:
  - `php artisan migrate`
- Ejecutar aplicación (la url de la aplicación será [http://127.0.0.1:8000]([http://127.0.0.1:8000]))
  - `php artisan serve`

