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
<div class="col-sm-12 col-sm-offset-4 col-xs-12 col-xs-offset-0">
    <!-- <div style="margin-top: 100px;" class="col-sm-4">
        <h3>Cadastre uma música</h3>        
    </div> -->
    <h3>Edita música</h3>        
    <div class="col-sm-4">
        <form method="POST">
            <label>Título da Música</label>
            <input name="titulo" class="form-control" required="true">

            <label>Compositor</label>
            <select name="autor_id" class="form-control">
                <option value="1">Cartola</option>
                <option value="2">Tim Maia</option>
                <option value="3">Djavan</option>
            </select>

            <label>Mídia</label>
            <select name="midia" class="form-control">
                <option value="1">CD</option>
                <option value="2">DVD</option>
                <option value="3">Vinil</option>        
            </select>

            <input type="submit" name="salvar" value="Confirmar"  class="form-control btn-danger"> 
        </form>
    </div>
</div>