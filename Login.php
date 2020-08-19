<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/form_style.css" href="css/_footer.scss">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <meta property="og:title" content="">
  <meta property="og:image" content="">
  <meta property="og:url" content="">
  <meta property="og:site_name" content="">
  <meta property="og:description" content="">


  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="">
  <meta name="twitter:title" content="">
  <meta name="twitter:description" content="">
  <meta name="twitter:image" content="">


  <link href="favicon.ico" rel="shortcut icon">
  <link rel="stylesheet" href="footer.scss" href="style.css">
  <title>login</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800"
    rel="stylesheet">


  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">


  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate-css/animate.min.css" rel="stylesheet">




  <link rel="icon" href="img/top-logo.svg" />
  <link rel="stylesheet" href="style.css"/>
  <link rel="stylesheet" href="css/sing_style.css"/>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet' type='text/css'>

</head>
  



<body>




  <div class='login'>
  <h2>Iniciar Sesión</h2>
  <form action="log.php" method="POST">
    <input name='username' placeholder='Nombre De Usuario' type='text' required>
    <input id='pw' name='password' placeholder='Contraseña' type='password' required>
    <input class='animated' type='submit' value='Iniciar Sesión'>
    <a class='forgot' href='registro.php'>¿No tienes cuenta? ¡Registrate!</a>
  </div>
  </form>

  

<div >
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>

  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="copyright">
            &copy; Copyright <strong>C.A.T Project</strong>. All Rights Reserved
          </div>
        </div>
      </div>
    </div>
  </footer>

  
  

 <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/morphext/morphext.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/stickyjs/sticky.js"></script>
  <script src="lib/easing/easing.js"></script>


  <script src="js/custom.js"></script>

  <script src="contactform/contactform.js"></script>

  <script>
    $(document).ready(function(){
  var placeholder = null;
  $('input[type=text]').focus(function(){
    placeholder = $(this).attr("placeholder");
    $(this).attr("placeholder","");
  });
  $('input[type=text]').blur(function(){
    $(this).attr("placeholder", placeholder);
  });
});
  </script>



</body>
</html>