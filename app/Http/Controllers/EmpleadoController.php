<?php

namespace App\Http\Controllers;

use Facade\FlareClient\View;
use Illuminate\Http\Request;
//use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redis;
use App\Models\Empleado;
use App\Http\Requests\ValidacionEmpleado;

class EmpleadoController extends Controller
{

    public function index()
    {
        can('listar-empleados');
        $datas = Empleado::orderBy('id')->get();
        return view('empleado.index', compact('datas'));  //

    }

    public function crear()
    {
        can('crear-empleado');
        return View('empleado.crear');
    }


    public function guardar(ValidacionEmpleado $request)
    {
        Empleado::create($request->all());
        return redirect('empleado')->with('mensaje', 'Menú creado con exito');

    }


    public function mostrar($id)
    {
        //
    }


    public function editar($id)
    {
        can('modificar-empleado');
        $data = Empleado::findOrFail($id);
        return view('empleado.editar', compact('data'));
    }


    public function actualizar(Request $request, $id)
    {
        Empleado::findOrFail($id)->update($request->all());
        return redirect('empleado')->with('mensaje', 'Menú actualizado con exito');
    }

    public function eliminar(Request $request, $id)
    {
        can('eliminar-empleado');   //Rol aplicado a la persona.
         if ($request->ajax()) {
            if (Empleado::destroy($id)) {
                return response()->json(['mensaje' => 'ok']);
            } else {
                return response()->json(['mensaje' => 'ng']);
            }
        } else {
            abort(404);
        }
    }

}
