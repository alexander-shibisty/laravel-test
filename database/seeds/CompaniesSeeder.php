<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Faker\Factory;

class CompaniesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        
        $i = 10;
        while($i > 0) {
            DB::table('companies')->insert([
                'name' => $faker->company,
                'quota' => rand(1, 100),
                'created_at' => Carbon::today(),
                'updated_at' => Carbon::now(),
            ]);

            --$i;
        }
    }
}
