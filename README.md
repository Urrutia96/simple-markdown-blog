# Simple Markdown Blog

### Instalación

1. Clonar el repositorio.
2. Renombrar el archivo `.env.example` a `.env`.
3. Crear base de datos `simpleblog`.
4. Ejecutar `composer install` y `npm install && npm run dev`.
5. Ejecutar migraciones y seeders

``` cmd
php artisan migrate --seed
```

6. Levantar servidor 

``` cmd 
php artisan serve
```