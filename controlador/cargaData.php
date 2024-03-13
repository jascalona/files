<?php

if (!empty($_POST['btnCarga'])) {
    if (!empty($_POST['nameDoc']) and !empty($_POST['file'])) {

        $name = $_POST['nameDoc'];
        $file = $_POST['file'];


        $sql = $conexion->query(" insert into archivo(nameDoc, file)values('$name', '$file')");
        if ($sql==1) {
            echo '<div class="alert alert-succes">Carga correcta</div>';
        } else {
            echo '<div class="alert alert-danger">Carga correcta</div>';
        }
        


    } else{
        echo '<div class="alert alert-warning">Rellene los campos vacios!</div>';
  
  
    }
}




?>