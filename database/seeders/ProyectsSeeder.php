<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProyectoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=10;$i<20;$i++){
            DB::table('projects')->insert([
                'title' => 'proyecto' . $i,
                'url' => 'proyecto-'.$_FILES,
                'description' => 'Proyecto ' . $i . 'gran proyecto de calidad suoerior' + $i,
            ]);
        }
    }
}
