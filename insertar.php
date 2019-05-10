<?php
    include("conexion.php");
?>    

    <form action ="" method ="post"> //editado por rous 

    codido del arbol: <input name="co"><br />

    altura del arbol : <input name="al"><br />
    tipo del arbol: <input name="ti"><br />
    longitud del arbol : <input name="lo"><br />
    latitud del arbol : <input name="la"><br />
    <br />
    <input type="submit" />

    </form>

<?php

// 

if($_POST){
    $c = $_POST['co'];
    $a = $_POST['al'];
    $t = $_POST['ti'];
    $l = $_POST['lo'];
    $lat = $_POST['la'];
    mysql_query("insert into arbol(codigo,altura,tipo,longitud,latitud) values ('$c','$a','$t','$l','$lat')") or die(mysql_error());
    echo "<h2> DATO GUARDADO </h2>";
}

?>
