
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>One World Domestic</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://w3layouts.com/wp-content/themes/w3layouts/css/style-web.css?18Nov2016">
<link href="//fonts.googleapis.com/css?family=Open+Sans:400,700,800" rel="stylesheet" type="text/css">
<link href="//fonts.googleapis.com/css?family=Oxygen:400,700,300" rel="stylesheet" type="text/css">
<link href="https://w3layouts.com/wp-content/themes/w3layouts/fonts/icons.css" rel="stylesheet" type="text/css">

<script type="text/javascript" src="https://w3layouts.com/wp-content/themes/w3layouts/js/web/flexy-menu.js"></script>
<script type="text/javascript" src="https://w3layouts.com/wp-content/themes/w3layouts/js/web/move-top.js"></script>
<script type="text/javascript" src="https://w3layouts.com/wp-content/themes/w3layouts/js/web/easing.js"></script>
<script type="text/javascript" src="https://w3layouts.com/wp-content/themes/w3layouts/js/jquery.magnific-popup.js"></script>
<meta name="google-site-verification" content="pmhrR3CsQPEpuw32hx8i9G3Tm45rV0rb8psQ2Y-kG6Y">


    <link rel="stylesheet" type="text/css" href="css.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">      
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    



      </head>
  <?php include 'cabecalho.php'; ?>
                   
<div class="corpo">
<div align="center">
<?php

session_start();

if (!isset($_SESSION['user'])) {
   
    header('location: ei.php');
}

echo "Seja Bem Vindo" ;

?>
</div>
</div>


	
	<?php include 'rodape.php'; ?>
    

</body>
</html>



