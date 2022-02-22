<?php

namespace App\Models;

use CodeIgniter\Model;

class Empleado extends Model
{
    public function obtenerEmpleado($data)
    {
        $empleado = $this->db->table('empleado')
            ->where($data)
            ->join('det_emp_puesto', 'empleado.id_empleado = det_emp_puesto.id_empleado')
            ->get()
            ->getResultArray();
        $id_empleado = $empleado[0]['id_empleado'];
        $puestos = $this->db->table('det_emp_puesto')
            ->select('puesto.id_puesto, puesto.pst_nombre')
            ->where('det_emp_puesto.id_empleado', $id_empleado)
            ->join('puesto', 'det_emp_puesto.id_puesto = puesto.id_puesto')
            ->get()
            ->getResultArray();
        $empleado[0]['puestos'] = $puestos;
        return $empleado[0];
    }

    public function esAdmin($id_empleado)
    {
        $puestos = $this->db->table('det_emp_puesto')
            ->select('puesto.id_puesto, puesto.pst_nombre')
            ->where('det_emp_puesto.id_empleado', $id_empleado)
            ->join('puesto', 'det_emp_puesto.id_puesto = puesto.id_puesto')
            ->get()
            ->getResultArray();
        foreach ($puestos as $puesto) :
            if (!$puesto['pst_nombre'] == 'Administrador') :
                return True;
            endif;
        endforeach;
        return false;
    }
}
