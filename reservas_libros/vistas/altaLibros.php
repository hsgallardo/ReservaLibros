<?php
require_once '../controladores/Clibros.php';
$objClibros=new Clibros();
$editoriales=$objClibros->cBuscarEditorial();

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Libros</title>
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <header>
        <p><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-phone"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" /></svg>+34 924 35 17 61</p>
        <p><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-mail"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z" /><path d="M3 7l9 6l9 -6" /></svg>guadalupe@fundacionloyola.es</p>
    </header>
    <nav>
        <a href="panelAdmin.php">Panel de administración</a>
    </nav>
    <main>
        <div class="tabla">
            <div class="container">
                <h1>Alta de Libros</h1>
                <form action="mostrarAltalibros.php" method="POST">
                    <input type="text" name="titulo" placeholder="Nombre del libro" >
                    <input type="text" name="isbn" placeholder="ISBN" >
                    <input type="text" name="precio" placeholder="Precio" >
                    
                    <label for="editorial">Editorial</label>
                    <select name="idEditorial" id="editorial">
                        <option selected disabled>Selecciona una editorial</option>
                        <?php
                            
                            foreach ($editoriales as $editorial) {
                                echo '<option value="'. $editorial['idEditorial'] .'">'.$editorial['nombreEditorial'].'</option>';
                            }
                        ?>
                    </select>

                    <input class="boton mt-2" type="submit" value="Añadir">
                    <a href="panelAdmin.php" class="boton mtb-2">Volver</a>
                    
                    <?php
                        if (isset($_GET['msj'])){
                            echo $_GET['msj'];
                        }
                    ?>
                </form>             
            </div>
        </div>
        

    </main>
    <footer>
        <a href="panelAdmin.php">Panel de administración</a>
    </footer>
</body>
</html>



