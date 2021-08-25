<?php

namespace Database\Seeders;

use App\Models\Curso;
use App\Models\User;
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
        User::factory(10)->create();
        // permite llamar el archivo cursoseeder desde esta clase
        //de esta forma se crean los seeder sin necesidad de crear un archivo seed por cada modelo
        Curso::factory(50)->create();   
    }
}
