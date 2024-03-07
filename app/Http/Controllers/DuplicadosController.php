<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DuplicadosController extends Controller
{
    public function showForm()
    {
        return view('duplicados');
    }

    public function generateArray(Request $request)
    {
        $N = $request->input('N');
        $a = [];
        for ($i = 0; $i < $N; $i++) {
            $a[] = rand(0, $N-1);
        }
        $resultado = array_keys(array_filter(array_count_values($a), function($value) { return $value > 1; }));
        
        return view('resultadoArray', ['a' => $a, 'resultado' => $resultado]);
    }
}
