<?php

class Musica {
    public $id;
    public $nome;
    public $autor_id;
    
    public function listarTodasAsMusicas() {
        
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
    }
    
}