<?php

namespace App\Http\Controllers;

use App\Imports\EmpleadosImport;
use Illuminate\Http\Request;
use App\Models\Empleado;
use Maatwebsite\Excel\Facades\Excel;

class EmpleadoController extends Controller
{
    public function index()
    {
        $empleados = Empleado::all();
        return view('index', compact('empleados'));
    }

    public function import(Request $request)
    {
        $request->validate([
            'documento_csv' => 'required|mimes:csv|max:2048'
        ]);
        try
        {
            $file = $request->file('documento_csv');
            Excel::import(new EmpleadosImport, $file);
            return redirect()->route('index');
        } catch(\Exception $e) {
            dd("Error");
        }
        
    }
}
