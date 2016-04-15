<?php
include_once '../conexao/Conexao.php';
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
    
    function find($id = null){
       $sql = "SELECT t1.* FROM usuarios t1 "
               ."where t1.id " .$id;
       $query = Conexao::prepare($sql);
       $query->execute();
       
       return $query->fetchAll();
    }
    
    function autenticar($email = null , $senha = null){
       $sql = "SELECT t1.* FROM usuarios t1 "
               ."where t1.email = :email";
       $query = Conexao::prepare($sql);
       $query->bindValue(":email",$email);
       $query->execute();       
       return $query->fetch();       
    }
            
}
