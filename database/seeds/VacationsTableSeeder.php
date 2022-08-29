<?php

use Illuminate\Database\Seeder;
use App\Vacation;
use Faker\Generator as Faker;

class VacationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $new_vacation = new Vacation();

        $new_vacation->name = $faker->words(3, true);
        $new_vacation->city = $faker->countryCode();
        $new_vacation->price = $faker->randomFloat(2, 100, 999999);
        $new_vacation->save();
    }
}
