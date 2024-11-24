<?php
class Mlibros {
    private $conexion;

    public function __construct(){
        require_once 'configDb.php';

        $this->conexion = new mysqli(SERVIDOR, USUARIO, PASSWORD, BBDD); //Conecta con la base de datos
        $this->conexion->set_charset("utf8"); //Usa juego caracteres UTF8
        $controlador = new mysqli_driver();//Desactivar errores
        $controlador->report_mode = MYSQLI_REPORT_OFF;//Desactivar errores
    }

    public function mAltaLibros($titulo, $isbn, $precio, $editorial){
        $SQL = "INSERT INTO libros (isbn, titulo, precio, idEditorial) 
                VALUES ('$isbn', '$titulo', '$precio', '$editorial')";  
    
        if ($this->conexion->query($SQL)) {
            return true;
        }
        return false;   
    }
    

    public function mEliminarLibros($isbn){
        $SQL = "DELETE FROM libros WHERE isbn = '$isbn'";
    
        if($this->conexion->query($SQL))
            return true;
        return false;
    }

    public function mModificarLibros($isbn, $titulo, $precio, $editorial) {
        // Primero actualizamos la tabla libros
        $SQL = "UPDATE libros SET titulo = '$titulo', precio = '$precio', idEditorial = '$editorial' WHERE isbn = '$isbn'";
    
        if ($this->conexion->query($SQL)) {
            return true;
        }
        return false;
    }

    public function mBuscarEditorial(){
        $SQL="SELECT idEditorial, nombreEditorial FROM editoriales;";
        $resultado=$this->conexion->query($SQL);
        if($resultado->num_rows){
            $editoriales=[];
            while($fila=$resultado->fetch_assoc()){
                $editoriales[]=$fila;
            }
           
            return $editoriales;
        }
            
        return false;
        

    }

}

    

?>

