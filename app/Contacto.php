<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
     protected $table = 'contactos';

     protected $fillable = ['_token', 'nombre', 'apellidos', 'correo_electronico', 'telefono', 'ciudad', 'estado', 'pais', 'area_interes', 'comentarios'];

}