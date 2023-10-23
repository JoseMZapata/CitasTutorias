<?php
    require_once 'php/guardian.php';
?>
<!doctype html>
<html lang="es">
<!--Encabezado-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/vistaalumno.css">
    <link rel="stylesheet" href="css/normalice.css">
    <title>Calendario Vista_Profesor</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

</head>

<!--Calendario-->
<body>
    <section class="layout">
        <div class="cabeza">
            <h1>Citas Agendadas</h1>
        </div>
        <nav calss></nav>
        <div class="calendar">
            <dl class="calendar__info">
                <dt class="calendar__prev" id="prev-month">&#9664;</dt>
                <dt class="calendar__month" id="month"></dt>
                <dt class="calendar__year" id="year"></dt>
                <dt class="calendar__next" id="next-month">&#9654;</dt>
            </dl>
            <dl class="calendar__week">
                <dt class="calendar__day calendar__item">Lun</dt>
                <dt class="calendar__day calendar__item">Mar</dt>
                <dt class="calendar__day calendar__item">Mier</dt>
                <dt class="calendar__day calendar__item">Juev</dt>
                <dt class="calendar__day calendar__item">Vier</dt>
                <dt class="calendar__day calendar__item">Sab</dt>
                <dt class="calendar__day calendar__item">Dom</dt>
            </dl>
            <ul class="calendar__dates" id="dates"></ul>
        </div>

<!--Tabla de Datos-->
        <div class="Tabla">
            <table>
                <tr>
                    <th>Nombre de la Clase</th>
                    <th>Días Agendados</th>
                </tr>
                <tr>
                    <td>Programación Web</td>
                    <td>13 y 21</td>
                </tr>
                <tr>
                    <td>Diseño Web</td>
                    <td>9</td>
                </tr>
                <tr>
                    <td>Base de Datos</td>
                    <td>5 y 16</td>
                </tr>
                <tr>
                    <td>Calculo</td>
                    <td>28</td>
                </tr>
            </table>
        </div>

<!--Pie de pagina-->
        
    </section>
    <?php include 'vistas/footer.php' ?>
<script src="js/scripts.js"></script>
</body>
</html>
