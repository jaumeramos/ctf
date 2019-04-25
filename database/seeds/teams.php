<?php

use Illuminate\Database\Seeder;

class teams extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('teams')->insert([
            'name' => 'T1',
            'longName' => Str::random(10),
        ]);

        DB::table('teams')->insert([
            'name' => 'T2',
            'longName' => Str::random(10),
        ]);

        DB::table('teams')->insert([
            'name' => 'T3',
            'longName' => Str::random(10),
        ]);
    }
}
