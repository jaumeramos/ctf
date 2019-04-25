<?php

use Illuminate\Database\Seeder;

class flags extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('flags')->insert([
            'name' => 'F1',
            'longName' => 'HanEncontradoMiBackDoorBender',
            'flag' => 'FLAG{HanEncontradoMiBackDoorBender}',
            'points' => 10,
        ]);


        DB::table('flags')->insert([
            'name' => 'F2',
            'longName' => 'Besa mi brillante trasero metálico',
            'flag' => 'FLAG{Besa mi brillante trasero metálico.}',
            'points' => 10,
        ]);

        DB::table('flags')->insert([
            'name' => 'F3',
            'longName' => 'Oh Dios mío, ella está atrapada en un bucle infinito de repetición... ¡Y Fry es idiota!',
            'flag' => 'FLAG {Oh Dios mío, ella está atrapada en un bucle infinito de repetición... ¡Y Fry es idiota!}',
            'points' => 10,
        ]);

        DB::table('flags')->insert([
            'name' => 'F4',
            'longName' => 'Dale duro Fry. Dale...',
            'flag' => 'FLAG{Dale duro Fry. Dale...}',
            'points' => 10,
        ]);

        DB::table('flags')->insert([
            'name' => 'F5',
            'longName' => '¡Maldito abrelatas!¡Mataste a mi padre y ahora has venido a por mí!',
            'flag' => 'FLAG{¡Maldito abrelatas!¡Mataste a mi padre y ahora has venido a por mí!}',
            'points' => 10,
        ]);

        DB::table('flags')->insert([
            'name' => 'F6',
            'longName' => 'Tengo que revisar mi programa. Mmm... ¡Sí!',
            'flag' => 'FLAG{Tengo que revisar mi programa. Mmm... ¡Sí!}',
            'points' => 10,
        ]);

        DB::table('flags')->insert([
            'name' => 'F7',
            'longName' => '131333',
            'flag' => 'FLAG{131333}',
            'points' => 20,
        ]);

        DB::table('flags')->insert([
            'name' => 'F8',
            'longName' => 'Y allaaaaaa vamoooooooos',
            'flag' => 'FLAG{Y allaaaaaa vamoooooooos}',
            'points' => 20,
        ]);

        DB::table('flags')->insert([
            'name' => 'F9',
            'longName' => 'El espacio parece extenderse sin límites. Hasta que llegas al final y aparece un mono lanzándote barriles',
            'flag' => 'FLAG{El espacio parece extenderse sin límites. Hasta que llegas al final y aparece un mono lanzándote barriles.}',
            'points' => 30,
        ]);

    }
}

/**
*1 - FLAG{HanEncontradoMiBackDoorBender}-10Punts
*2 - FLAG{Besa mi brillante trasero metálico.} - 10 Punts
*3 - FLAG {Oh Dios mío, ella está atrapada en un bucle infinito de repetición... ¡Y Fry es idiota!} - 10 Punts
*4 - FLAG{Dale duro Fry. Dale...} - 10 Punts
*5 - FLAG{¡Maldito abrelatas!¡Mataste a mi padre y ahora has venido a por mí!} - 10 Punts
*6 - FLAG{Tengo que revisar mi programa. Mmm... ¡Sí!} - 10 Punts
*7 - FLAG{131333} - 20 Punts
*8 - FLAG{Y allaaaaaa vamoooooooos} - 20 Punts
*9 - FLAG{El espacio parece extenderse sin límites. Hasta que llegas al final y aparece un mono lanzándote barriles.} - 30 Punts
*/
