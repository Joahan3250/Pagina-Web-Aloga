

<!-- Estructura del menu  -->
<div class="topnav" id="myTopnav">
    <a href="home" class="active"><img src="img/LOG_PEST_BLANC.png"></a>
    <a href="?menu=layout.php">Inicio</a>
    <a href="?menu=section.php#list">Acerca de nosotros</a> 
    <a href="?menu=bolsa/bolsa.php">Bolsa de trabajo</a>
   
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
    </a>
</div>

<script>
    // Función para el menú hamburguesa
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }
</script>

