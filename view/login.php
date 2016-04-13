<?php include '/../style/template.php';
      include '../controller/UsuariosController.php';
      $usuarios = new UsuariosController();
      
if(isset($_POST['login'])){
    
    $email = $_POST['inputEmail'];
    $senha = $_POST['inputPassword'];
        
    if ($usuarios->autenticar($email, $senha)){
        header('Location: index_musicas.php');
    }
}

?>

<body>

    <div class="container col-sm-3 col-sm-offset-4">

        <form method="POST" class="form-signin">
        <h2 class="form-signin-heading">Login do Usuário</h2>
        <label for="inputEmail" class="sr-only">Email</label>
        <input type="email" name="inputEmail" class="form-control" placeholder="Email" required autofocus>
        <label for="inputPassword" class="sr-only">Senha</label>
        <input type="password" name="inputPassword" class="form-control" placeholder="Senha" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Lembrar-me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" name="login" type="submit">Login</button>
      </form>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>

