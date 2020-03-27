# Simple Markdown Blog

### Instalación

Clonar el repositorio.
Renombrar el archivo `.env.example` a `.env`.
Crear base de datos `simpleblog`
Ejecutar `composer install` y `npm install && npm run dev`.
Ejecutar migraciones y seeders

``` cmd
php artisan migrate --seed
```

Levantar servidor 

``` cmd 
php artisan serve
```