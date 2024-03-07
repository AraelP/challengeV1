<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;

class AsistenciaController extends Controller
{
    public function index()
    {
        $asistencias = Empleado::all();
    
        return view('asistencia', ['asistencias' => $asistencias]);
    }

    public function getAsistenciaById(Request $request)
    {
        $empleadoId = $request->Id;

        $empleado = Empleado::find($empleadoId);

        if (!$empleado) {
            return response()->json(['error' => 'Empleado no encontrado'], 404);
        }

        $hora_entrada = $empleado->hora_entrada;
        $hora_salida = $empleado->hora_salida;

        // Calcular total de horas trabajadas
        $total_horas = strtotime($hora_salida) - strtotime($hora_entrada);
        $total_horas = gmdate('H:i:s', $total_horas);

        return response()->json([
            'nombre' => $empleado->nombre,
            'apellido' => $empleado->apellido,
            'fecha_nacimiento' => $empleado->fecha_nacimiento,
            'hora_entrada' => $hora_entrada,
            'hora_salida' => $hora_salida,
            'total_horas' => $total_horas
        ]);
    }

    public function showAsistencia($id)
    {
        $asistencia = Empleado::find($id);

        if (!$asistencia) {
            return redirect()->back()->with('error', 'Empleado no encontrado');
        }

        return view('asistencia', ['asistencia' => $asistencia]);
    }

   
}