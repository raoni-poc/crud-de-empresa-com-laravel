<?php

use Faker\Generator as Faker;

$factory->define(\App\Empresa::class, function (Faker $faker) {
    return [
        'nome' => $faker->company,
        'cnpj' => $faker->creditCardNumber,
        'nome_fantasia' => $faker->companySuffix,
        'contato' => $faker->name,
        'email' => $faker->email,
        'telefone' => $faker->phoneNumber,
    ];
});
