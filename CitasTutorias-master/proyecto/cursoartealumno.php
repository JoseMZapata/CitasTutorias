<?php
    require_once 'php/guardian.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/712575d4a5.js" crossorigin="anonymous"></script>
    <title>Aprender sobre el arte</title>
    <link rel="stylesheet" href="css/vistaalumno.css">
    <link rel="stylesheet" href="css/normalice.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

</head>
<body>
    <?php include 'vistas/header.php'?>
    <div class="TituloCursoAlumno">
        <div>
            <h2>Aprender sobre el arte</h2>
        </div>
    </div>
    <main class="ContenidoPrincipalCursoAlumno">
        <div class="ContenidoPrincipalCursoAlumno--Tareas barraslaterales" >
            <div>
                <img src="/img/Curso1Arte.jpg" alt="">
            </div>
            <div>
                <div>

                </div>
                <div class="Mensajes_Del_Curso">
                    <ul>
                        <li><a href="#">Actividades</a></li>
                        <li><a href="#">Mensajes</a></li>
                        <li><a href="participantes.php">Participantes</a></li>
                    </ul>
                </div>
            </div>
            
        </div>
        <div class="ContenidoPrincipalCursoAlumno--Actividades">
            <div>
                <h3>Actividades por realizar</h3>
            </div>
            <div>
                <ul>
                    <li><a href="#">Urbanismo</a></li>
                    <li><a href="#">Habilidades Creativas</a></li>
                </ul>
            </div>
        </div>
        <div class="ContenidoPrincipalCursoAlumno--ActividadesVencer barraslaterales">
            <div>
                <h3>Actividades cerca de vencimiento</h3>
            </div>
            <div>
                <ul>
                    <li><a href="#">Investigacion sobre tecnicas de dibujo</a></li>
                    <li><a href="#">Actividad dibujo creativo</a></li>
                </ul>
                <p>Vencimiento: <span>25 de octubre</span></p>
            </div>
        </div>
    </main>
   
    <?php include 'vistas/footer.php'?>
</body>
</html>
