<?php

$factory->define(App\Property::class, function (Faker\Generator $faker) {
    return [
        "transaction" => collect(["rent","sell",])->random(),
        "type" => collect(["Apartamento Padrão","Kitchenette/Conjugados","Loft","Casa Padrão","Terreno Padrão","Box/Garagem","Casa Comercial","Casa de Condomínio","Casa de Vila","Chácara","Conjunto Comercial/Sala","Fazenda","Flat","Galpão/Depósito/Armazém","Haras","Hotel","Indústria","Loja Shopping/ Ct Comercial","Loja/Salão","Loteamento/Condomínio","Motel","Pousada/Chalé","Prédio Inteiro","Sítio","Studio",])->random(),
        "cep" => $faker->name,
        "state" => $faker->name,
        "city" => $faker->name,
        "neighborhood" => $faker->name,
        "address" => $faker->name,
        "number" => $faker->name,
        "complement" => $faker->name,
        "rooms" => $faker->name,
        "suites" => $faker->name,
        "parking_slots" => $faker->name,
        "bathrooms" => $faker->name,
        "size" => $faker->name,
        "land_size" => $faker->name,
        "description" => $faker->name,
        "price" => $faker->name,
    ];
});
