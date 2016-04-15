<?php
include_once '../model/Usuario.php';

class UsuariosController {
    public function listar() {
        $usuarios = new Usuario(); 
        return $usuarios->listarTodosUsuarios();
    }
    
    public function logoff(){
       if(isset($_SESSION['email'])) {
           session_destroy();
           header('Location: login.php');
       }
    }
    
    public function verifica(){
       if(!isset($_SESSION['email'])) {
           header('Location: login.php');
       }
    }
    
    public function autenticar($email = null, $senha = null ){
        //echo "Chegou aki";
        //die();
        $usuarios = new Usuario();
        $userAutenticar = $usuarios->autenticar($email);
        
        if ($userAutenticar->senha == $senha){
            if(!isset($_SESSION['email'])){
              session_start();
            }
            $_SESSION['id'] = $userAutenticar->id;
            $_SESSION['email'] = $userAutenticar->email;
            //echo "Chegou aki";
        //die();
            header('Location: index_musicas.php');
            
        }
        else
        {            
            return false;
        }        
    }
}
