<!DOCTYPE html>
<html lang="es">
   <head>
       <meta charset="AddDefaultCharset UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link href="style.css" rel="stylesheet" type="text/css" />
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
       <link rel="icon" href="img/LOG_PEST_Blanco.png" type="image/png">
       <link rel="preconnect" href="https://fonts.googleapis.com">
       <link href="./fontawesome/fontawesome-free-6.6.0-web/css/all.css" rel="stylesheet">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Source+Sans+3:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">
      
       <title>Aloga Software</title>
   </head>
<body>

<header>
    <?php include('head.php'); ?>
</header>

<section>
    <?php 
    
    $validar_rutas = ['bolsa/bolsa.php', 'section.php'];  
    if (isset($_GET['menu']) && in_array($_GET['menu'], $validar_rutas)) {
        require_once($_GET['menu']);
    } else {
        require_once('section.php');  
    }
    ?>
</section>

<footer>
    <?php include('footer.php'); ?>
</footer>

</body>
</html>
