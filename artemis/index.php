    <?php

    require_once('configuracion.php');

    $data = new Config(null, "", "", "");


    //Ahora all tiene todo el array asociativo para poderlo iterar ahorita en la tabla fila por fila.
    $all = $data -> obtainData();

    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="../css/fuegos.css">
        <link rel="stylesheet" href="../css/lola.css">
        <title>Document</title>
    </head>
    <body>

        <div class="container" id="fireworks-container">
            <form action="registrar.php" method="POST">
                <h2>Registro</h2> <br>
                <div class="mb-3">
                    <label for="user" class="form-label">User</label>
                    <input type="text" class="form-control" id="user" name="user" aria-describedby="emailHelp" required>
                </div><br>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" required>
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div><br>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div><br>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div><br>
                <button type="submit" class="btn btn-primary" name="guardar">Guardar</button>
            </form>
        
            


            <div class="table-responsive">
                <table class="table table-dark table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">User</th>
                            <th scope="col">Email</th>
                            <th scope="col">Creation time</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php   foreach($all as $key => $value) {    ?>




                                <!-- Imprimimos -->
                            <tr> <!-- Los elementos puestos aqui corresponden a las columnas de la tabla de nuestra base de datos -->
                                <td> <?php echo $value['idUser']; ?></td>
                                <td> <?php echo $value['userName']; ?></td>
                                <td> <?php echo $value['emailUser']; ?></td>
                                <td> <?php echo $value['created_at']; ?></td>
                            </tr>




                        <?php    }   ?>
                    </tbody>
                </table>
            </div>
        </div>

            <!-- <div>
                <button type="submit" class="btn btn-primary" name="mostar">Mostrar</button>
                <button type="submit" class="btn btn-primary" name="eliminar">Eliminar</button>
                <button type="submit" class="btn btn-primary" name="editar">Editar</button>
            </div> -->


                
    </body>
    </html>


