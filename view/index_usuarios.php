<?php include '/../style/template.php';?>
<?php include '../controller/UsuariosController.php';
    $usuarios = new UsuariosController();
?>

<div class="col-sm-10 col-sm-offset-1">
    <h3>Usuários</h3>
    <table class="table table-striped">
        <tr>
            <td>Id</td>
            <td>Email</td>
            <td>Senha</td>
        </tr>
    <?php foreach ($usuarios->listar() as $value){?>
        <tr>
            <td><?php echo $value->id?></td>
            <td><?php echo $value->email?></td>
            <td><?php echo $value->senha?></td>
        </tr>        
    <?php } ?>        
    </table>
</div>