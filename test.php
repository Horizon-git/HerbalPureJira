<?php
require_once 'vendor/autoload.php';

$faker = Faker\Factory::create('ru_RU');

for ($i = 0; $i < 10; $i++) {
    echo $faker->name, "\n";
  }


?>