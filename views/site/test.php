
<?php
require 'C:/OpenServer/OSPanel/domains/herbalpure.org/vendor/autoload.php';

$faker = Faker\Factory::create('ru_RU');
$fp = fopen('C:/OpenServer/OSPanel/domains/herbalpure.org/file1.csv', 'w');
$fp2 = fopen('C:/OpenServer/OSPanel/domains/herbalpure.org/file2.csv', 'w');
$fp3 = fopen('C:/OpenServer/OSPanel/domains/herbalpure.org/file3.csv', 'w');
$fp4 = fopen('C:/OpenServer/OSPanel/domains/herbalpure.org/file4.csv', 'w');
for ($i = 0; $i < 1000; $i++) {
    fputcsv($fp, array($faker->unique()->userName,$faker->firstName,$faker->lastName,$faker->unique()->e164PhoneNumber,$faker->unique()->email,$faker->numberBetween($min = 1, $max = 2),$faker->word,$faker->text($maxNbChars = 1000), $faker->date($format = 'Y-m-d', $max = 'now'), $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = NULL) ));
} 

// for ($i = 0; $i < 5000; $i++) {
// fputcsv($fp2, array($faker->numberBetween($min = 1, $max = 3000), $faker->date($format = 'Y-m-d', $max = 'now'),$faker->date($format = 'Y-m-d', $max = 'now'),$faker->numberBetween($min = 1, $max = 5),$faker->text($maxNbChars = 1000),$faker->word, $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = NULL)));
// }


for ($i = 0; $i < 1000; $i++) {
    fputcsv($fp3, array($faker->word, $faker->numberBetween($min = 10, $max = 5000),$faker->text($maxNbChars = 1000),$faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = NULL),$faker->word,$faker->numberBetween($min = 1, $max = 31),$faker->numberBetween($min = 1, $max = 1000),$faker->date($format = 'Y-m-d', $max = 'now') ));

}

// for ($i = 0; $i < 7000; $i++) {
//     fputcsv($fp4, array($faker->numberBetween($min = 1, $max = 3000),$faker->numberBetween($min = 1, $max = 5000),$faker->numberBetween($min = 1, $max = 1000), $faker->text($maxNbChars = 1000), $faker->date($format = 'Y-m-d', $max = 'now'),$faker->word, $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = NULL)));
//     }
?>