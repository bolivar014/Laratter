<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});
/*
    TIPOS DE DATOS EN FAKER...
    $faker->word // genera una sola palabra.
    $faker->word(5,true) // Genera un texto de 5 palabras, debe ir en modo TRUE.
    $faker->paragraph // Genera un parrafo.
    $faker->realText() // Genera texto de libros.

*/

//Función Faker, nos permite creación de datos 
$factory->define(App\Message::class, function(Faker $faker){
    return [
        'content' => $faker->realText(random_int(20, 160)), // Se le asigna una longitud en el texto de 20 a 160 caracteres.
        'image' => $faker->imageUrl(600,338)
    ];
});