<?php

use App\Models\Admin\Permiso;
use Illuminate\Database\Eloquent\Builder;

if (!function_exists('getMenuActivo')) {
    function getMenuActivo($ruta)
    {
        if (request()->is($ruta) || request()->is($ruta . '/*')) {
           return 'active';
        } else {
            return '';
        }
    }
}

if (!function_exists('can')) {
    function can($permiso, $redirect = true)
    {
        if (session()->get('rol_nombre') == 'administrador') {
            return true;
        } else {
            $rolId = session()->get('rol_id');
            $permisos = cache()->tags('permiso')->rememberForever("permiso.rolid.$rolId", function () {
                return Permiso::whereHas('roles', function ($query) {
                    $query->where('rol_id', session()->get('rol_id'));
                })->get()->pluck('slug')->toArray();
            });
            if (!in_array($permiso, $permisos)) {
                if ($redirect) {
                    if (!request()->ajax())
                    return redirect()->route('inicio')->with('mensaje', 'No tienes permisos para entrar en este modulo')->send();
                    abort(403, 'No tiene permiso');
                } else {
                    return false;
                }
            }
            return true;
        }
    }
}
if (!function_exists('d_ES_MYSQL')) {
    function d_ES_MYSQL($fecha)
    {
    /* El formato de $fecha es dd/mm/aaaa
        Como salida se tendra un string de fecha con el formato aaaa/mm/dd
        para utilizar como valor de ingreso a MySQL.                       */
        $dia = substr($fecha,0,2);
        $mes = substr($fecha,3,2);
        $annio=substr($fecha,6,4);
        $salida = $annio."/".$mes."/".$dia;
        return $salida;
    }
}

if (!function_exists('dMySQL_ES')) {
    function dMySQL_ES($fecha){
        //Transforma la fecha de formato MySQL (yyyy/mm/dd) a formato espaÃ±ol (dd/mm/yyyy)
            $dia = substr($fecha,8,2);
            $mes = substr($fecha,5,2);
            $annio=substr($fecha,0,4);
            $salida = sprintf("%02s/%02s/%04s",$dia, $mes, $annio);
            return $salida;
    }
}
