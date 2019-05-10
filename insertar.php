<?php
    include("conexion.php");
?>    

  

    codido: <input name="co"><br />

    altura: <input name="al"><br />
    tipo: <input name="ti"><br />
    longitud: <input name="lo"><br />
    latitud: <input name="la"><br />
    <br />
    <input type="submit" />

    </form>

<?php

if($_POST){
    $c = $_POST['co'];
    $a = $_POST['al'];
    $t = $_POST['ti'];
    $l = $_POST['lo'];
    $lat = $_POST['la'];
    mysql_query("insert into arbol(codigo,altura,tipo,longitud,latitud) values ('$c','$a','$t','$l','$lat')") or die(mysql_error());
    echo "<h2> DATO GUARDADO correctamente</h2>";
}

?>
