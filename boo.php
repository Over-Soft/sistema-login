<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reloj</title>
    <link rel="stylesheet" type="text/css" href="css/reloj.css">
    <link href="css/metro.min.css" rel="stylesheet">
    <link href="css/estilos.css" rel="stylesheet">
  <script src="js/jquery.js"></script> 
    <script src="js/metro.min.js"></script>
    <script src="https://use.fontawesome.com/5fe7ff4e50.js"></script>
</head>
<body>

            <div class="form-actions">
                <a href="principal.php"  class=" id button large-button info">Vover al Home...</a>         
         
            </div>
        <div class="wrap">
        <div class="widget">
            <div class="fecha">
                <p id="diaSemana" class="diaSemana">Martes</p>
                <p id="dia" class="dia">27</p>
                <p>de </p>
                <p id="mes" class="mes">Octubre</p>
                <p>del </p>
                <p id="year" class="year">2015</p>
            </div>
    
            <div class="reloj">
                <p id="horas" class="horas">11</p>
                <p>:</p>
                <p id="minutos" class="minutos">48</p>
                <p>:</p>
                <div class="caja-segundos">
                    <p id="ampm" class="ampm">AM</p>
                    <p id="segundos" class="segundos">12</p>
                </div>
            </div>
        </div>
    </div>
    <script src="js/reloj.js"></script>
</body>
</html>