<?php
class Clibros {
    private $objMlibros;  

    public function __construct(){
        require_once '../modelo/Mlibros.php';
        $this->objMlibros = new Mlibros();  
    }

    public function cAltaLibros($titulo, $isbn, $precio, $editorial) {
        if($this->objMlibros->mAltaLibros($titulo, $isbn, $precio, $editorial))  
            return true;
        return false;  
    }

    public function cEliminarLibros($isbn) {
        if ($this->objMlibros->mEliminarLibros($isbn))
            return true;
        return false;
    }

    public function cModificarLibros($isbn, $titulo, $precio, $editorial) {
        if ($this->objMlibros->mModificarLibros($isbn, $titulo, $precio, $editorial)) {
            return true;
        }
        return false;
    }

    public function cBuscarEditorial(){

        if($editoriales=$this->objMlibros->mBuscarEditorial()){
            return $editoriales;
        
        }else{
            return false;
        }      

    }    
}
?>




