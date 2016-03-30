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
            
    
}
