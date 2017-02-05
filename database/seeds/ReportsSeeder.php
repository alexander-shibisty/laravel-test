<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Faker\Factory;

class ReportsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        $usersCount = DB::table('users')->count();
        
        $i = 100;
        while($i > 0) {
            DB::table('reports')->insert([
                'resource' => $faker->url,
                'transferrend' => rand(1, 20),
                'user_id' => rand(1, $usersCount),
                'created_at' => Carbon::today(),
                'updated_at' => Carbon::now(),
            ]);

            --$i;
        }
    }
}
