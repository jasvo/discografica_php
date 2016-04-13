<?php
include '../model/Musica.php';

class MusicasController {
    public function listar() {
        $musicas = new Musica();
        return $musicas->listarTodasAsMusicas();        
    }
    
    public function inserir(){
        $musica = new Musica();
        
        $titulo = $_POST['titulo'];
        $autor_id = $_POST['autor_id'];
        $midia = $_POST['midia'];
        
        $musica->setTitulo($titulo);
        $musica->setAutor_id($autor_id);
        $musica->setMidia($midia);
        
        $musica->salvar();        
    }
      
    public function find($id = null){
        $musicas = new Musica();
        return $musicas->find($id);
    }
     
    public function update(){
        $musicas = new Musica();
        
        $id = $_POST['id'];
        $titulo = $_POST['titulo'];
        $autor_id = $_POST['autor_id'];        
        $midia = $_POST['midia'];
                
        $musicas->setId($id);
        $musicas->setTitulo($titulo);
        $musicas->setAutor_id($autor_id);
        $musicas->setMidia($midia);
        
        $musicas->update($id);        
    }
    
    public function deletar($id = null){
        $musicas = new Musica();
        return $musicas->delete($id);
    }
}
