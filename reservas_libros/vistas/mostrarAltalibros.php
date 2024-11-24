<?php
require_once '../modelo/Mlibros.php';  
require_once '../controladores/Clibros.php';

if (!empty($_POST['titulo']) && !empty($_POST['isbn']) && !empty($_POST['precio']) && !empty($_POST['idEditorial'])) {
    $titulo = $_POST['titulo']; 
    $isbn = $_POST['isbn'];
    $precio = $_POST['precio'];
    $idEditorial = $_POST['idEditorial']; 

    $objClibro = new Clibros();

    
    if ($objClibro->cAltaLibros($titulo, $isbn, $precio, $idEditorial)) {
        header('Location: altaLibros.php?msj=Insercción Correcta');
    } else {
        header('Location: altaLibros.php?msj=Error en la Insercción');
    }
} else {
    header('Location: altaLibros.php?msj=Campos obligatorios de poner');
}
?>
                