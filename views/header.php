  <!DOCTYPE html>
  <html>
    <head>
    <!--Import Google Icon Font-->
    <link href="assets/fonts/material.css" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="assets/css/materialize.min.css"  media="screen,projection"/>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <script type="text/javascript" src="assets/js/jquery-3.1.1.min.js"></script>
    <!--Ajax File Upload-->
    <script type="text/javascript" src="assets/js/ajaxupload.3.5.js" ></script>
    <!--Browser Tab-->
    <link rel="icon" href="favicon.ico">
    <title>Base de Datos</title>
    <!--CSS-->
    <link type="text/css" rel="stylesheet" href="assets/css/formato.css" />
    </head>
    <body>
    <!--Navbar-->
    <ul id="slide-out" class="side-nav fixed">
    <li>
        <div class="userView">
          <div class="background">
            <img src="assets/images/office.jpg">
          </div>
          <a href="home.php"><img class="circle" src="assets/images/yuna.jpg"></a>
          <a href="#!name"><span class="white-text name"><?= $_SESSION["usuario"]; ?></span></a>
          <a href="#!email">
          <span class="white-text email"><?= $_SESSION["mensaje"]; ?></span></a>
        </div>
      </li>
      <li><a href="home.php"><i class="material-icons">pie_chart_outlined</i>Inicio</a></li>
      <li><a href="records.php"><i class="material-icons">perm_identity</i>Pacientes</a></li>
      <li><a href="search.php"><i class="material-icons">search</i>Buscar</a></li>
      <li><a href="exit.php"><i class="material-icons">exit_to_app</i>Salir</a></li>
    </ul>
    <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>  
    <!--/Navbar-->    