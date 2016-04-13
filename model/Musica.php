<?php

include '../conexao/Conexao.php';
class Musica {
    private $id;
    private $titulo;
    private $autor_id;
    private $midia;
    
    function getId() {
        return $this->id;
    }

    function getTitulo() {
        return $this->titulo;
    }

    function getAutor_id() {
        return $this->autor_id;
    }

    function getMidia() {
        return $this->midia;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setAutor_id($autor_id) {
        $this->autor_id = $autor_id;
    }

    function setMidia($midia) {
        $this->midia = $midia;
    }

    public function salvar(){

        $sql = "insert into musicas "
                ."(titulo,autor_id,midia)"
                ." values "
                ."(:titulo,:autor_id,:midia)";
        $query = Conexao::prepare($sql);
        $query->bindValue(":titulo",$this->getTitulo());
        $query->bindValue(":autor_id",$this->getAutor_id());
        $query->bindValue(":midia",$this->getMidia());
        $query->execute();
        
    }
    
    public function listarTodasAsMusicas() {
       $sql = "SELECT t1.*,t2.nome "
             ."FROM musicas t1 "
             ."inner join autores t2 "
             ."On (t2.id = t1.autor_id) "
             ."order by t1.id Desc ";              
       $query = Conexao::prepare($sql);
       $query->execute();       
       return $query->fetchAll();
    }
    
    public function find($id = null){
       $sql = "SELECT t1.*,t2.nome "
             ."FROM musicas t1 "
             ."inner join autores t2 "
             ."On (t2.id = t1.autor_id) "
             ."where t1.id = :id";              
       $query = Conexao::prepare($sql);
       $query->bindValue(":id",$id);
       $query->execute();       
       return $query->fetch();
    }
    
    public function update($id = null){
       $sql = "Update musicas "
             ."set titulo = :titulo, "
             ."    autor_id = :autor_id,"
             ."    midia = :midia "
             ."where id = :id";
       $query = Conexao::prepare($sql);
       $query->bindValue(":id",$id);
       $query->bindValue(":titulo",   $this->getTitulo());
       $query->bindValue(":autor_id", $this->getAutor_id());
       $query->bindValue(":midia",    $this->getMidia());
       $query->execute();       
    }
    
    public function delete($id = null){
       $sql = "Delete from musicas where id = :id";
       $query = Conexao::prepare($sql);
       $query->bindValue(":id",$id);       
       $query->execute();
    }
}