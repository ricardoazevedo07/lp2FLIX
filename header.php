


  <!--DOCTYPE html-->
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!Let browser know website is optimized for mobile-->

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>

      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>


      <div class="card-panel red darken-4">
        <a class="waves-effect waves-light btn" href="index.php">Inicio</a>
         <a class="waves-effect waves-light btn" href="cadastro.php">Cadastrar Usuario</a>
         <a class="waves-effect waves-light btn" href="add_midia.php">Cadastrar Midia</a>
          <?php session_start();
           if (isset($_SESSION['LOGADO'])): ?>
            <?php echo $_SESSION['LOGADO'] ?>
          <?php endif; ?>


      </div>
