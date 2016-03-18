<?php
include '../model/Musica.php';

class MusicasController {
    public function listar() {
        $musicas = new Musica();
        return $musicas->listarTodasAsMusicas();        
    }
    
}
