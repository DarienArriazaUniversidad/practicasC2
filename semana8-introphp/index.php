<?php
    


    //evaluar
    if(isset($_POST["enviar"])){
        $seleccion = $_POST["seleccion"];
        include $seleccion . ".php";
    }else {
        include "es.php";
        
    }
//rosa estubo aqui

?>
<html>
<body>

    <form action="" method="POST">
        <select name="seleccion" id="">

            <option value="en">English</option>
            <option value="es">Español</option>
        </select>
        <input type="submit" name="enviar" value="seleccionar"/>

</form>
        <h1>
<?php echo TItle; ?>

</h1>
<h1><?php echo subtitle; ?>
</h1>


</form>


</body>


</html>