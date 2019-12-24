<?php

use Illuminate\Database\Seeder;
use App\person;

class peopleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Person::class, 50) ->create();
    }
}
