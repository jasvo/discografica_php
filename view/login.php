<?php
      include_once '../controller/UsuariosController.php';
      $usuariosCtrl = new UsuariosController();
      
      if(isset($_POST['login'])){
        $email = $_POST['inputEmail'];
        $senha = $_POST['inputPassword'];
        $usuariosCtrl->autenticar($email, $senha);
        //echo $_SESSION['email']." Logado..";
        //die();
      }
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>Bootstrap 101 Template</title>

   
    <link href="style/css/bootstrap.css" rel="stylesheet">

  
  </head>
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
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="style/js/bootstrap.min.js"></script>
  </body>
</html>

