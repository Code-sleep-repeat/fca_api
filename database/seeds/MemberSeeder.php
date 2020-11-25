<?php

use Illuminate\Database\Seeder;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Member::truncate();

        $faker = \Faker\Factory::create();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 50; $i++) {
            Member::create([
                'voornaam' => $faker->firstname,
                'achternaam' => $faker->lastname,
                'email' => $faker->email,
                'email' => $faker->email
            ]);
    }
}
