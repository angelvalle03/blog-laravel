<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    //con esta variable protegida nos aseguramos de se guarden solo los campos del formularion con estos nombres
    // protected $fillable = ['name','description','categoria'];

    //Esta otra variable permite proteger los campos no permitidos
    //si la dejamos vacia no hay problema al momento de crear un registro
    protected $guarded = [];

    //con este metodo se le indica a laravel que almoemento de mandar el id por url mande el slug y no el id
    // es decir va a mostrar todo lo relacionado a ese slug 
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
