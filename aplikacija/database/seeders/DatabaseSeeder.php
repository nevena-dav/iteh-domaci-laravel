<?php

namespace Database\Seeders;

use App\Models\Dobavljac;
use App\Models\Kategorija;
use App\Models\Proizvod;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        Proizvod::truncate();
        Dobavljac::truncate();
        Kategorija::truncate();
        User::truncate();


       User::factory(10)->create();
       Kategorija::factory(5)->create();
       Dobavljac::factory(5)->create();
       Proizvod::factory(10)->create();

    }
}
