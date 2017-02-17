<?php
  session_name("GrupoACT");
  session_start();
  //--Session Data
  $_SESSION["usuario"]    = "";
  $_SESSION["mensaje"]    = "";
  $_SESSION["paciente"]   = "";
  $_SESSION["enfermedad"] = "";
  $_SESSION["login"]      = "";
?>
<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="assets/fonts/material.css" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="assets/css/materialize.min.css"  media="screen,projection"/>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!--Browser Tab-->
    <link rel="icon" href="http://localhost/favicon.ico">
  <title>Base de Datos</title>
  </head>
<body>
  <div class="row">  
  <br>
  <br>
  <br>
  <br>
  </div>
  <div class="row">
  <div class="col l4 m4 s1">
  </div>
  <div class="col l4 m4 s10" style="border: gray 1px solid">
  <!--Form-->
    <div class="row">
    <blockquote class="center-align"><h5>SISTEMA DE CONTROL</h5></blockquote>
    <br>
      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
          <div class="input-field">
            <i class="material-icons prefix">account_circle</i>
            <input id="icon_prefix" type="text" class="validate" name="user" autofocus>
            <label for="icon_prefix">Usuario</label>
          </div>
          <div class="input-field">
            <i class="material-icons prefix">lock</i>
            <input id="icon_telephone" type="password" class="validate" name="pass">
            <label for="icon_telephone">Password</label>
          </div>
          <div class="row" style="text-align: center;">
              <button class="waves-effect waves-light btn" type="submit" name="submit"><i class="material-icons left">vpn_key</i>Ingresar</button>       
          </div>
      </form>
    </div>
  <!--/Form-->
  </div>
  <div class="col l4 m4 s1">
  </div>
  </div>

  <div class="row">
  <div class="col l4 m4 s1">
  </div>
  <div class="col l4 m4 s10">
    <?php require_once('login.php') ?>
  </div>
  <div class="col l4 m4 s1">
  </div>
  </div>
  
  <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="assets/js/jquery-3.1.1.min.js"></script>
  <script type="text/javascript" src="assets/js/materialize.min.js"></script>
  </body>
</html>