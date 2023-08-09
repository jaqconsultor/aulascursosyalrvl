<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        DB::table('formato_archivo')->insert([
            'nombre' => 'PDF',
        ]);
        DB::table('formato_archivo')->insert([
            'nombre' => 'YOUTUBE',
        ]);


        DB::table('tipo_actividad')->insert([
            'nombre' => 'Video',
        ]);
        DB::table('tipo_actividad')->insert([
            'nombre' => 'Lectura',
        ]);
        DB::table('tipo_actividad')->insert([
            'nombre' => 'Guia de Practica',
        ]);
        DB::table('tipo_actividad')->insert([
            'nombre' => 'Evaluacion',
        ]);

        DB::table('planes')->insert([
            'nombre' => 'FREE',
        ]);
        DB::table('planes')->insert([
            'nombre' => 'BASICO',
        ]);
        DB::table('planes')->insert([
            'nombre' => 'INTERMEDIO',
        ]);
        DB::table('planes')->insert([
            'nombre' => 'AVANZADO',
        ]);

        DB::table('temas')->insert([
            'nombre' => 'TEMA 01',
        ]);
        DB::table('temas')->insert([
            'nombre' => 'TEMA 02',
        ]);
        DB::table('temas')->insert([
            'nombre' => 'TEMA 03',
        ]);
        DB::table('temas')->insert([
            'nombre' => 'TEMA 04',
        ]);
        DB::table('temas')->insert([
            'nombre' => 'TEMA 06',
        ]);

    }
}
