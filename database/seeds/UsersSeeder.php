<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Faker\Factory;

class UsersSeeder extends Seeder
{
    public function run()
    {
        $faker = Factory::create();
        $companiesCount = DB::table('companies')->count();

        $i = 10;
        while($i > 0) {
            DB::table('users')->insert([
                'name' => $faker->name,
                'email' => $faker->email,
                'company_id' => rand(1, $companiesCount),
                'created_at' => Carbon::today(),
                'updated_at' => Carbon::now(),
            ]);

            --$i;
        }
    }
}
