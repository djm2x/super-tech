<?php

use Illuminate\Database\Seeder;

class ObjetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Objet', 1000)->create();
    }
}
