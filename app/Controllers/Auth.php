<?php

namespace App\Controllers;

use App\Models\Empleado;

class Auth extends BaseController
{
    public function login()
    {
        $usuario = $this->request->getPost('usuario');
        $contrasena = $this->request->getPost('contrasena');

        $empleado = new Empleado();

        $data = $empleado->obtenerEmpleado(['usuario' => $usuario]);
        if (count($data) > 0 && password_verify($contrasena, $data['contrasena'])) :
            $session = session();
            $session->set($data);
            return redirect()->to(base_url('/admin'))->with('message', '1');
        else :
            return redirect()->to(base_url('/'))->with('message', '0');
        endif;
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to(base_url('/'));
    }
}
