<?php

namespace Database\Seeders;
use App\Models\Curso;
use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $curso = new Curso();
        $curso->name="Laravel";
        $curso->description="el mejor framework de php";
        $curso->categoria="Desarrollo web";

        $curso->save();

        $curso2 = new Curso();
        $curso2->name="Laravel";
        $curso2->description="el mejor framework de php";
        $curso2->categoria="Desarrollo web";

        $curso2->save();
    }
}
