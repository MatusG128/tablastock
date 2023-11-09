<?php
require_once 'Model/articulo.php';

class articuloController{
   
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new articulo();
    }
    
    public function Index(){
        require_once 'View/header.php';
        require_once 'View/articulo.php';
        require_once 'View/footer.php';
    }
    
    public function Crud(){
        $alm = new articulo();
        
        if(isset($_REQUEST['idarticulo'])){
            $alm = $this->model->getting($_REQUEST['idarticulo']);
        }
        
        require_once 'View/header.php';
        require_once 'View/articulo-editar.php';
        require_once 'View/footer.php';
    }
    
    public function Guardar(){
        $alm = new articulo();
        
        $alm->idarticulo = $_REQUEST['idarticulo'];
        $alm->id_provedor = $_REQUEST['id_provedor'];
        $alm->nombre_articulo = $_REQUEST['nombre_articulo'];
        $alm->descripcion = $_REQUEST['descripcion'];
        $alm->unidad_medida = $_REQUEST['unidad_medida'];
        $alm->cantidad = $_REQUEST['cantidad'];
        $alm->minimo = $_REQUEST['minimo'];
        $alm->maximo = $_REQUEST['maximo'];

        // SI ID articulo ES MAYOR QUE CERO (0) INDICA QUE ES UNA ACTUALIZACIÓN DE ESA TUPLA EN LA TABLA articulo, SINO SIGNIFICA QUE ES UN NUEVO REGISTRO

        $alm->idarticulo > 0 
           ? $this->model->Actualizar($alm)
           : $this->model->Registrar($alm);

       //EL CÓDIGO ANTERIOR ES EQUIVALENTE A UTILIZAR CONDICIONALES IF, TAL COMO SE MUESTRA EN EL COMENTARIO A CONTINUACIÓN:

        /*if ($alm->idarticulo > 0 ) {
            $this->model->Actualizar($alm);
        }
        else{
           $this->model->Registrar($alm); 
        }*/
        
        header('Location: index.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['idarticulo']);
        header('Location: index.php');
    }
}
