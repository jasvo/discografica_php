<?php include '/../style/template.php';?>
<?php include '../controller/MusicasController.php'; 
    
    session_start();
 
    if (isset($_SESSION['id'])){
        echo 'entrou';
        die();
        header('Location: login.php');
    }

   $musicas = new MusicasController();
?>

<div class="col-sm-10 col-sm-offset-1">
    <h3>Listar Músicas</h3>
    <a class="btn btn-success pull-right btn-xs" href="cadastro_musica.php">Adicionar</a>
    <table class="table table-striped">
        <tr>
            <td>Id</td>
            <td>Título</td>
            <td>Autor</td>
            <td>Ações</td>
        </tr>
    <?php foreach ($musicas->listar() as $value){?>
        <tr>
            <td><?php echo $value->id?></td>
            <td><?php echo $value->titulo?></td>
            <td><?php echo $value->nome?></td>
            <td><?php echo "<a class='btn btn-primary btn-xs' href='editar_musica.php?acao=atualizar&id=".$value->id."'>Editar</a>" ?> | 
                <?php echo "<a class='btn btn-danger btn-xs' href='editar_musica.php?acao=excluir&id=".$value->id."'>Excluir</a>" ?></td>
            <!--<a class="btn btn-primary btn-xs" href="editar_musica.php?id=">Editar</a> -->
        </tr>        
    <?php } ?>
        
    <?php
        /*$musicas = new MusicasController();
        $lista = $musicas->listar();
    
        foreach ($lista as $key => $value){
            echo "<tr><td>$value->id</td> <td>$value->nome</td><td>$value->autor_id</td></tr>";                     
        } 
         */     
    ?>
    
    </table>
</div>