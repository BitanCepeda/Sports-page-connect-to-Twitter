
<?php

include_once 'source/session.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>DirectSport</title>
  <link rel="shortcut icon" type="image/jpg" href="img/favicon.png"/>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/modern-business.css" rel="stylesheet">

</head>

<body>

    <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      
	  
	 <div style="font-size: 25px; color: white;">
	<?php if(!isset($_SESSION['username'])): header("location: logout.php");?>
    <?php else: ?>
    <?php endif ?>
    <?php echo "Bienvenido ".$_SESSION['username']." a tu espacio personal" ?>
	</div>
    
	  
	  
	  
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
		  <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="acerca.html">Acerca de </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Deportes
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
              <a class="dropdown-item" href="basquet.html">Básquet</a>
              <a class="dropdown-item" href="futbol.html">Fútbol</a>
              <a class="dropdown-item" href="ultimate.html">Ultimate</a>
            </div>
          </li>
       
       
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">DirectSport
      <small>Acerca de</small>
    </h1>

   
    <p><b>DirectSport</b> es un sitio web que reúne las noticias más importntes de los sitios más conocidos deportivos a nivel mundial, llevándote
	 cómodamente todas ellas hasta la comodidad de tu teléfono, pc ó TV.
	 Puedes también suscribirte para personalizar tus noticias, ¡TOTALMENTE GRATIS!
	 <br><br>
	 Además puedes redirigirte a los sitios principles de noticias si quieres mucha más información.
	 <br><br>
	 <b>Somos DirectSport: NOTICIAS DEPORTIVAS DIRECTAS</b>
     .</p>

  </div>
  <!-- /.container -->

  <!-- Footer -->
    <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Leidy Escobar Serna - UIS</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
