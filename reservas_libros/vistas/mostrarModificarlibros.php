<?php
require_once '../modelo/Mlibros.php';
require_once '../controladores/Clibros.php';

if (!empty($_POST['titulo']) && !empty($_POST['isbn']) && !empty($_POST['precio']) && !empty($_POST['idEditorial'])) {
    $titulo = $_POST['titulo']; 
    $isbn = $_POST['isbn'];
    $precio = $_POST['precio'];
    $idEditorial = $_POST['idEditorial']; 

    $objClibro = new Clibros();

    if ($objClibro->cModificarLibros($isbn, $titulo, $precio, $idEditorial)) {
        header('Location: modificarLibros.php?msj=Libro modificado correctamente');
    } else {
        header('Location: modificarLibros.php?msj=Error en la moddificación');
    }
} else {
    header('Location: modificarLibros.php?msj=Campos obligatorios de rellenar');
}
?>
