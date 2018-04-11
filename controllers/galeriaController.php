<?php

class galeriaController extends Controller{
    private $_galeria;
    public function __construct() {
        parent::__construct();
        $this->_galeria = $this->loadModel("galeria");
    }
    
    public function index() {
        $this->_view->assign("titulo","Galeria");
        $this->_view->assign("galeria", $this->_galeria->getGaleria());
        $this->_view->renderizar("index","galeria");
    }
    public function nuevo(){
        $this->_view->setJs(array("funcionesJs"));
        $this->_view->assign("titulo","Galeria");
        $this->_view->assign("galeria", $this->_galeria->getGaleria());
        if($this->getInt("guardar")){
            $this->_view->assign("post",$_POST);
            if(!$this->getPostParam("titulo")){
                $this->_view->assign("_error","Debe introducior un titulo a la imagen");
                $this->_view->renderizar("nuevo","galeria");
                exit;
            }
            if(!$this->getPostParam("message")){
                $this->_view->assign("_error","Debe introducior una descripcion");
                $this->_view->renderizar("nuevo","galeria");
                exit;
            }
            $imagen = "";

            if ($_FILES['imagen']['name']) {
                $ruta = $this->getRutaCarpetaImagen("galeria");
                $upload = new upload($_FILES['imagen'], 'es_Es');
                $upload->allowed = array('image/*');
                $upload->file_new_name_body = 'upl_' . uniqid();
                $upload->process($ruta);

                if ($upload->processed) {
                    $imagen = $upload->file_dst_name;
                    $thumb = new upload($upload->file_dst_pathname);
                    $thumb->image_resize = true;
                    $thumb->image_x = 800;
                    $thumb->image_y = 600;
                    $thumb->file_name_body_pre = 'thumb_';
                    $thumb->process($ruta . 'thumb' . DS);
                } else {
                    $this->_view->assign('_error', $upload->error);
                    $this->_view->renderizar('index', 'blog');
                    exit;
                }
            }
            $this->_galeria->addGaleria(
                    $this->getPostParam("titulo"),
                    $this->getPostParam("message"),
                    $imagen
                    );
            $this->redireccionar("galeria/nuevo");
            exit;
        }
        $this->_view->renderizar("nuevo","galeria");
    }
    
    public function eliminarGaleria($id){
       echo $id = Cifrado::decryption($id);
        $id = (int) $id;
        if (is_int($id) && $id != 0) {
            $this->_galeria->eliminarGaleria($id);
            $this->redireccionar("galeria/nuevo");
            exit;
        }
        $this->redireccionar("error/access/5050");
        exit;
    }
    
    public function edit($id){
        $id = Cifrado::decryption($id);
        $id = (int) $id;
        if(!is_int($id) || $id == 0){
            $this->redireccionar("error/access/5050");
        }
        $this->_view->setJs(array("funcionesJs"));
        $this->_view->assign("titulo","Galeria");
        $this->_view->assign("galeria", $this->_galeria->getGaleria());
        $this->_view->assign("galeriaId", $this->_galeria->getGaleriaById($id));
        if($this->getInt("guardar")){
            $this->_view->assign("post",$_POST);
            if(!$this->getPostParam("titulo")){
                $this->_view->assign("_error","Debe introducior un titulo a la imagen");
                $this->_view->renderizar("nuevo","galeria");
                exit;
            }
            if(!$this->getPostParam("message")){
                $this->_view->assign("_error","Debe introducior una descripcion");
                $this->_view->renderizar("nuevo","galeria");
                exit;
            }
            $imagen = "";
            if($this->getPostParam("nameImagen")){
                $imagen = $this->getPostParam("nameImagen");
            }
            if ($_FILES['imagen']['name']) {
                $this->eliminarImg("galeria",$imagen);
                $ruta = $this->getRutaCarpetaImagen("galeria");
                $upload = new upload($_FILES['imagen'], 'es_Es');
                $upload->allowed = array('image/*');
                $upload->file_new_name_body = 'upl_' . uniqid();
                $upload->process($ruta);

                if ($upload->processed) {
                    $imagen = $upload->file_dst_name;
                    $thumb = new upload($upload->file_dst_pathname);
                    $thumb->image_resize = true;
                    $thumb->image_x = 800;
                    $thumb->image_y = 600;
                    $thumb->file_name_body_pre = 'thumb_';
                    $thumb->process($ruta . 'thumb' . DS);
                } else {
                    $this->_view->assign('_error', $upload->error);
                    $this->_view->renderizar('index', 'blog');
                    exit;
                }
            }
//            editarGaleria($tema,$desc,$img,$id);
            $this->_galeria->editarGaleria(
                    $this->getPostParam("titulo"),
                    $this->getPostParam("message"),
                    $imagen,
                    $id
                    );
            $this->redireccionar("galeria/nuevo");
            exit;
        }
        $this->_view->renderizar("edit","galeria");
    }
    
} 
