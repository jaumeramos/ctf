<?php

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



        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        App\Flag::truncate();
        App\Team::truncate();
        DB::table('flag_team')->truncate();

        $this->call(flags::class);
        $this->command->info('Flags table seeded!');

        $this->call(teams::class);
        $this->command->info('Teams table seeded!');

        $this->call(flag_team::class);
        $this->command->info('flag_team table seeded!');




        DB::statement('SET FOREIGN_KEY_CHECKS=1');

    }
}
