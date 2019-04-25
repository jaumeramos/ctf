<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class flag_team extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create();

        $flagIds = App\Flag::pluck('id')->all();
        $teamIds = App\Team::pluck('id')->all();

        for($i=1; $i <= 5; $i++) {

            DB::table('flag_team')->insert([
                'flag_id' => $faker->randomElement($flagIds),
                'team_id' => $faker->randomElement($teamIds),
                'captured' => date("Y-m-d H:i:s"),
            ]);


        }
    }
}
