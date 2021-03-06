<?php

namespace Database\Factories;

use App\Models\Curso;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
class CursoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Curso::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        //ene esta parte se crean los datos falsos de prueba en el cual se crea el slug con el mismo nombre del name para hacer urls amigables
        $name = $this->faker->sentence();
        return [
            'name'=> $name,
            'slug'=> Str::slug($name,'-'),
            'description'=> $this->faker->paragraph(),
            'categoria'=> $this->faker->randomElement(['desarrollo web','diseño web'])
        ];
    }
}
