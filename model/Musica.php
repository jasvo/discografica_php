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
    /*public function listarTodasAsMusicas() {
        
        //$lista = array($musical);
        
        $lista = array();
        
        for ($index = 0; $index <= 10; $index++) {
            $musical = new Musica();
            $musical->id=$index;
            $musical->nome= "Flor de Lins  " . $index;
            $musical->autor_id= 10+ $index;
        
            array_push($lista, $musical );            
        }
        
        return $lista;
                 
    }*/
    public function listarTodasAsMusicas() {
       $sql = "SELECT * FROM musicas";
              
       $query = Conexao::prepare($sql);
       $query->execute();
       
       return $query->fetchAll();
    }
    
}