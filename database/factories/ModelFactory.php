<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/*$factory->define(App\User::class, function ($faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => str_random(10),
        'remember_token' => str_random(10),
    ];
});*/

$factory->define(Agenda\Pessoa::class, function ($faker) {
    return [
        'nome' => $faker->name,
        'sexo' => rand(0, 1) ? 'F' : 'M',
        'apelido' => $faker->name,
        'email' => $faker->email,
        'endereco' => $faker->address,
    ];
});

$factory->define(Agenda\Telefone::class, function ($faker) {
    return [
        'pessoa_id' => Agenda\Pessoa::all()->random()->id,
        'descricao' => $faker->word,
        'telefone' => $faker->phoneNumber,
        'codPais' => rand(10,99),
        'ddd' => rand(10,99),
    ];
});
