<?php

use Illuminate\Database\Seeder;

class WisudawansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Wisudawan::class, 20)->create();
    }
}
