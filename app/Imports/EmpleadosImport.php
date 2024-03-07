<?php

namespace App\Imports;

use App\Models\empleado;
use Maatwebsite\Excel\Concerns\ToModel;

class EmpleadosImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Empleado([
            'nombre' => $row['nombre'],
            'apellido' => $row['apellido'],
            'fecha_nacimiento' => $row['fecha_nacimiento'],
            'hora_entrada' => $row['hora_entrada'],
            'hora_salida' => $row['hora_salida']
        ]);
    }
}
