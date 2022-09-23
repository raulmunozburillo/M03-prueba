<?php

require_once "leer.php";

echo "<table border='1'>
<tr>
    <th>id</th>
    <th>Nombre</th>
    <th>Edad</th>
    <th>Actualizar</th>
    <th>Eliminar</th>
</tr>";

foreach ($listaAlumnos as $alumno){
    echo "<tr>";
    echo "<td>{$alumno['id']}</td>";
    echo "<td>{$alumno['nombre']}</td>";
    echo "<td>{$alumno['edad']}</td>";
    echo "<td><a href='actualizar.php?id={$alumno['id']}'>Actualizar</a></td>";
    echo "<td><a href='eliminar.php?id={$alumno['id']}'>Eliminar</a></td>";
    echo "</tr>";
}

?>