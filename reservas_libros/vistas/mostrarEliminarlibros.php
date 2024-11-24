<?php
require_once '../modelo/Mlibros.php';
require_once '../controladores/Clibros.php';

if (!empty($_POST['isbn'])) {
    $isbn = $_POST['isbn'];

    $objClibro = new Clibros();

    if ($objClibro->cEliminarLibros($isbn)) {
        header('Location: eliminarLibros.php?msj=Libro eliminado correctamente');
    } else {
        header('Location: eliminarLibros.php?msj=Error al eliminar. Verife el ISBN introducido.');
    }
} else {
    header('Location: eliminarLibros.php?msj=Debe ingresar el libro del ISBN del libro a eliminar');
}
?>
