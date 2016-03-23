<?php
include '../model/Usuario.php';
class UsuariosController {
    public function listar() {
        $usuarios = new Usuario(); 
        return $usuarios->listarTodosUsuarios();
    }
}
