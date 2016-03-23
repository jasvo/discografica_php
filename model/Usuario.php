<?php
include '../conexao/Conexao.php';
class Usuario {
    public $id;	 	 
    public $email;
    public $senha;
      
    public function listarTodosUsuarios() {
       $sql = "SELECT * FROM usuarios";
              
       $query = Conexao::prepare($sql);
       $query->execute();
       
       return $query->fetchAll();
    }
}
