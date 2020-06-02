<!DOCTYPE HTML>
<html>
    <head>
        <title>centro odontologico</title>
        <meta charset="utf-8">
           <link href="css/style-menu.css" rel="stylesheet">
    </head>
    <?php
       // include('index.html');
    ?>
    <body>
        <div id="header">
            <ul class="nav">
                <li><a href="">OdontoCenter</a></li>
                <li><a href="">Nosotros</a></li>
                <li><a href="">Empleados</a>
                    <ul>
                        <li><a href="../userCreation.php">Crear Empleado</a></li>
                        <li><a href="../mDataR.php">Reporte Empleado</a> </li>
                        <li><a href="">Buscar Empleado por cedula</a>
                            <ul>
                                <li><a href="../formDataB.php">Digitar Numero<br> de Cedula</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                
                <li><a href="">Historias Clinicas</a>
                    <ul>
                        <li><a href="">Crear Historia Clinica</a></li>
                        <li><a href="">Reporte Historia Clnica</a></li>
                        <li><a href="">Busqueda Historia<br>Clinica por Cedula</a>
                            <ul>
                                <li><a href="">Digitar Numero<br> de Cedula</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                
                <li><a href="">Pacientes</a>
                    <ul>
                        <li><a href="">Crear Paciente</a></li>
                        <li><a href="">Reporte de paciente</a></li>
                        <li><a href="">Buscar Paciente<br>por Cedula</a>
                    <ul>
                        <li><a href="">Digitar Numero<br> de Cedula</a></li>
                    </ul>
                </li>
            </ul>
        </div>

    </body>
    <?php
        include('footer.php');
    ?>
</html>