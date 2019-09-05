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
        DB::table('generos')->insert([
            ['genero' => 'Masculino'],
            ['genero' => 'Femenino']
        ]);

        DB::table('maritals')->insert([
            ['estado_civil' => 'Soltero(a)'],
            ['estado_civil' => 'Casado(a)'],
            ['estado_civil' => 'Divorciado(a)'],
            ['estado_civil' => 'Viudo(a)'],
            ['estado_civil' => 'Union Libre']
        ]);

        DB::table('levels')->insert([
            ['nivel_interes' => 'Preparatoria'],
			['nivel_interes' => 'Licenciatura'],
            ['nivel_interes' => 'Posgrado']
        ]);
    }
}
