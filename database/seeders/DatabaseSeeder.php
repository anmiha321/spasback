<?php

namespace Database\Seeders;

use App\Models\PeopleInSearch;
use Illuminate\Database\Seeder;
use \App\Models\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       User::factory(50)->create();
       PeopleInSearch::factory(50)->create();
    }
}
