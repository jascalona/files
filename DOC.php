<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DEV</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


</head>
<body>
    
    <h3 style="margin-top: 50px;" class="text-center">CargaDataIMP</h3>

    <?php
    include "modelo/connect.php";
    include "controlador/cargaData.php";
    ?>
        <div class="container">
            <form class="col-3" method="POST">

                <div class="mb-3">
                    <label for="NameDoc" class="form-label">Name Doc</label>
                    <input type="text" class="form-control" id="nameDoc" name="nameDoc" placeholder="Nuevo Archivo" >
                </div>

                <div class="mb-3">
                    <label for="CargaFile" class="form-label">File</label>
                    <input type="file" class="form-label" id="file" name="file" placeholder="newFile">
                </div>

                <button type="submit" class="btn btn-primary" name="btnCarga" value="ok">Carga</button>
            </form>
        
        
            <div class="col-8 p-4">
            <table class="table">

                <thead class="bg-info">
                    <tr>
                        <th class="col">NameDoc</th>
                        <th class="col">File</th>
                        <th class="col">Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'modelo/connect.php';
                    $sql=$conexion->query(" select * from archivo ");
                    while($datos = $sql->fetch_object()){ ?>
                   
                    <tr>
                        <td><?= $datos->nameDoc?></td>
                        <td><?= $datos->file?></td>
                        <td><?= $datos->date?></td>
                        <td>
                            <a href="#"><i class='bx bx-envelope-open'></i></a>
                        </td>
                        <td>
                            <a href="#"><i class='bx bx-x-circle'></i></a>
                        </td>
                    </tr>
                <?php
                }
                ?>


                </tbody>


            </table>
            </div>
        
        </div>




        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>