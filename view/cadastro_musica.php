<?php 
   include '../style/template.php';
   include '../controller/MusicasController.php';
   $musicaControl = new MusicasController();

if(isset($_POST['salvar'])){
    $musicaControl->inserir();
}
else
{
    
}
?>
<form method="POST">
    <label>Título da Música</label>
    <input name="titulo">
    
    <label>Compositor</label>
    <select name="autor_id">
        <option value="1">Cartola</option>
        <option value="2">Tim Maia</option>
        <option value="3">Djavan</option>
    </select>
    
    <label>Mídia</label>
    <select name="midia">
        <option value="1">CD</option>
        <option value="2">DVD</option>
        <option value="3">Vinil</option>        
    </select>
    
    <input type="submit" name="salvar" value="Confirmar"> 
</form>