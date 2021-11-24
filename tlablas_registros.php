<!DOCTYPE html>
<html>
    <head>
        <title>Tabla de Registros de Alumnos</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <header>
            <h1 align="center">Registro de Alumnos</h1>
            <h2 align="center">Desarrollado por Martinez Reyes Jacqueline Dolores</h2>
        </header>
        <center>
            <table border="1" bgcolor="#F7FF00">
                <thead>
                    <tr>
                        <th><a href="registro.html">Nuevo usuario(nueva captura)</a></th>
                        <th>Lista de alumnos</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Numero de Control</td>
                        <td>Nombre del Alumno</td>
                        <td>Apellido Paterno</td>
                        <td>Apellido Materno</td>
                        <td>Email</td>
                        <td>Estado</td>
                        <td>Modificar Registro</td>
                        <td>Eliminar Registro</td>
                    </tr>
                    
                    <?php
                    include ("conexion.php");
                    $query="SELECT * FROM Alumno1";
                    $resultado=$conexion->query($query);
                    while($row=$resultado->fetch_assoc())
                    {
                        ?>
                        <tr>
                            <td><?php echo $row['no_control']; ?></td>
                            <td><?php echo $row['Nombre']; ?></td>
                            <td><?php echo $row['Apaterno']; ?></td>
                            <td><?php echo $row['Amaterno']; ?></td>
                            <td><?php echo $row['Email']; ?></td>
                            <td><?php echo $row['Estado']; ?></td>
                            <td><a href="Modificar.php">Modificar</a></td>
                            <td><a href="Eliminar.php">Eliminar</a></td>
                
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
            
            
            
        </center>
 
        
        
        
        
        
        
        
        
</body>
</html>
