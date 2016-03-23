<?php include '/../style/template.php';?>
<?php include '../controller/MusicasController.php'; 
   $musicas = new MusicasController();
?>

<div class="col-sm-10 col-sm-offset-1">
    <h3>Musicas</h3>
    <table class="table table-striped">
        <tr>
            <td>id</td>
            <td>Título</td>
            <td>autor_id</td>
        </tr>
    <?php foreach ($musicas->listar() as $value){?>
        <tr>
            <td><?php echo $value->id?></td>
            <td><?php echo $value->titulo?></td>
            <td><?php echo $value->autor_id?></td>
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