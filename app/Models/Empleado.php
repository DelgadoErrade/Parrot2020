<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table = "empleados";
    protected $fillable = ['cedula', 'apellidos', 'nombre', 'fecha_nacimiento', 'fecha_ingreso', 'telefono', 'email','direccion', 'ciudad', 'zona_postal'];
    protected $guarded = ['id'];
}
