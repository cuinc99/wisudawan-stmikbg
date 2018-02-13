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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
//$factory->define(App\User::class, function (Faker\Generator $faker) {
//    static $password;
//
//    return [
//        'name' => $faker->name,
//        'email' => $faker->unique()->safeEmail,
//        'password' => $password ?: $password = bcrypt('secret'),
//        'remember_token' => str_random(10),
//    ];
//});

$factory->define(App\Dosen::class, function (Faker\Generator $faker) {
    return [
        'nik' => '12.'.rand(1,100).'.34'.rand(1,9),
        'nama' => $faker->name,
    ];
});

$factory->define(App\Wisudawan::class, function (Faker\Generator $faker) {
    return [
        'nim' => '1'.rand(11,15).'052'.rand(1,9).'0'.rand(0,99),
        'password' => bcrypt('admin123'),
        'p' => 'admin123',
        'nama' => $faker->name,
        'tempat_lahir' => $faker->city,
        'tanggal_lahir' => $faker->dateTime($max = 'now', $timezone = null),
        'alamat' => $faker->address,
        'hp' => $faker->phoneNumber,
        'ipk' => rand(1,3).'.'.rand(10,99),
        'email' => $faker->email,
        'email' => $faker->email,
        'judul' => $faker->sentence($nbWords = 7),
        'prodi_id' => rand(1,4),
        'angkatan_id' => rand(1,5),
        'dosen_id' => rand(1,10),
        'photo' => 'example.jpg',
        'terbaik' => 0,
        'berprestasi' => 0,
    ];
});

$factory->define(App\Setting::class, function (Faker\Generator $faker) {
    return [
        'template_for' => 'stmikstiba',
        'home_judul' => 'RAPAT SENAT TERBUKA',
        'home_deskripsi' => 'DALAM RANGKA WISUDA KE-XXVII DAN DIES NATALIS KE-XXX STMIK BUMIGORA MATARAM WISUDA KE-VI DAN DIES NATALIS KE-VI STIBA BUMIGORA MATARAM',
        'home_tanggal' => 'MATARAM, 12 OKTOBER 2017',
        'intro_judul' => 'WISUDA & DIES NATALIS',
        'intro_deskripsi' => '- STMIK BUMIGORA MATARAM & STIBA BUMIGORA MATARAM -',
        'terbaik_judul' => 'WISUDAWAN TERBAIK',
        'berprestasi_judul' => 'WISUDAWAN BERPRESTASI',
        'stmik_judul' => 'STMIK BUMIGORA MATARAM',
        'stmik_deskripsi' => 'WISUDA KE-XXVII & DIES NATALIS KE-XXX',
        'stiba_judul' => 'STIBA BUMIGORA MATARAM',
        'stiba_deskripsi' => 'WISUDA KE-IV & DIES NATALIS KE-IV',
    ];
});


