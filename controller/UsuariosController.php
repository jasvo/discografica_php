<?php
include '../model/Usuario.php';

class UsuariosController {
    public function listar() {
        $usuarios = new Usuario(); 
        return $usuarios->listarTodosUsuarios();
    }
    
    public function autenticar($email = null, $senha = null ){
        //echo "Chegou aki";
        //die();
        $usuarios = new Usuario();
        $userAutenticar = $usuarios->autenticar($email);
        
        if ($userAutenticar->senha == $senha){
            session_start();
            $_SESSION['id'] = $userAutenticar->id;
            $_SESSION['email'] = $userAutenticar->email;
            return true;
        }
        else
        {            
            return false;
        }        
    }
}
