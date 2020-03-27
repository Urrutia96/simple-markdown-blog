<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BlogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blogs')->insert([
            'titulo' => 'Simple Markdown Blog con laravel, vue, vue-router',
            'slug' => Str::slug('Simple Markdown Blog con laravel, vue, vue-router'),
            'descripcion' => 'Este es un blog construido con laravel y vue. Se ha usado Vue-Router y Vue-SimpleMDE en el frontend. En el backend para procesar el markdown se uso ParseMarkdown/Laravel',
            'content' => "Este es un blog construido con laravel y vue. Se ha usado Vue-Router y Vue-SimpleMDE en el frontend. En el backend para procesar el markdown se uso ParseMarkdown/Laravel.\nEl primer paso para integrar laravel y vue con vue-router es decirle a laravel que cualquier ruta apunte a una sola vista que es la que tendra el componente de vue que se encargara de mostrar todo segun especifiquemos con vue router. Para ello modificamos la ruta por defecto de `routes\web.php`. \n``` php\nRoute::get('/{any}', function () {\n  return view('welcome');\n})->where('any', '.*');\n```\nContinuaremos en el siguiente capitulo...\nSaludos, Santos Urrutia."
        ]);
    }
}
