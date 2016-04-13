<?php 
   include '../style/template.php';
   include '../controller/MusicasController.php';
   $musicaControl = new MusicasController();

    $id = $_GET['id'];
    $acao = $_GET['acao'];
    
    $titulo = "";
    if($acao == 'atualizar'){
       $titulo = "Editar";
    }else
    if($acao == 'excluir'){
       $titulo = "Excluir";
    }
    else
    {
       $titulo = "Novo";
    }
    
    $musicas = $musicaControl->find($id);
     
    
if(isset($_POST['salvar'])){
    if($acao == 'atualizar'){
       $musicaControl->update();
    }else
    if($acao == 'excluir'){
       $musicaControl->deletar($id);
    }
    else
    {
        $musicaControl->inserir();
    }
    header('Location: index_musicas.php');
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
            <label><?php echo " - ".$titulo ?></label>
            <input name="id" value="<?php echo $musicas->id ?>" type="hidden">
            <input name="acao" value="<?php echo $acao ?>" type="hidden">
            <input name="titulo" class="form-control" required="true" value="<?php echo $musicas->titulo ?>">

            <label>Compositor</label>
            <select name="autor_id" class="form-control">
                <option value="<?php echo $musicas->autor_id ?>" selected><?php echo $musicas->nome ?></option>
                <option value="1">Cartola</option>
                <option value="2">Tim Maia</option>
                <option value="3">Djavan</option>
            </select>

            <label>Mídia</label>
            <select name="midia" class="form-control" selectedValue="<?php echo $musicas->midia ?>">
                <option value="<?php echo $musicas->midia ?>" selected><?php echo $musicas->midia ?></option>
                <option value="1">CD</option>
                <option value="2">DVD</option>
                <option value="3">Vinil</option>        
            </select>

            <input type="submit" name="salvar" value="Confirmar"  class="form-control btn-danger"> 
        </form>
    </div>
</div>