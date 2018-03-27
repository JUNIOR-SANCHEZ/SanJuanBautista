<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class blogController extends Controller {

    private $_blog;
    private $_template = "default";

    public function __construct() {
        parent::__construct();
        $this->_blog = $this->loadModel("blog");
        $this->_view->setTemplate($this->_template);
    }

    public function index($pagina = false) {
        $paginador = new Paginador();
        $title = "";
        $this->_view->setJs(array("prueba"));
        $this->_view->assign("titulo", "Blog");
        $this->_view->assign("noticia", $paginador->paginar($this->_blog->getBlog($title), $pagina, 5));
        $this->_view->assign("paginacion", $paginador->getView("paginacion_ajax"));

        if ($this->getInt("guardar") == 1) {
            $this->_view->assign("blog", $_POST);
            if (!$this->getPostParam("name")) {
                $this->_view->assign("_error", "SE DEBE INGRESAR EL TEMA DE LA NOTICIA");
                $this->_view->renderizar("index", "blog");
                exit;
            }
            if (!$this->getPostParam("cuerpo")) {
                $this->_view->assign("_error", "SE DEBE INGRESAR EL CONTENIDO DE LA NOTICIA");
                $this->_view->renderizar("index", "blog");
                exit;
            }

            $imagen = "";

            if ($_FILES['imagen']['name']) {
                $ruta = $this->getRutaCarpetaImagen("noticia");
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
            $this->_blog->addBlog(
                    $this->getPostParam("name"), $this->getPostParam("cuerpo"), $imagen
            );
            $this->_view->assign("blog", array());
            $this->redireccionar("blog");
//        $this->_view->renderizar("index", "blog");    
        }
        $this->_view->renderizar("index", "blog");
    }

    public function paginacionGetNoticiaAjax() {
        $pagina = $this->getInt('pagina');
        $paginador = new Paginador();
        $title = "";
        if(isset($_POST["noticia"]) && !empty($_POST["noticia"])){
            $title = $_POST["noticia"];
        }
        
        $this->_view->setJs(array("prueba"));
        $this->_view->assign("titulo", "Blog");
        $this->_view->assign("noticia", $paginador->paginar($this->_blog->getBlog($title), $pagina, 5));
        $this->_view->assign("paginacion", $paginador->getView("paginacion_ajax"));
        $this->_view->renderizar("vistaAjax/vista", false, true);
    }

    public function noticia($id) {

        $this->_view->setJs(array("prueba"));
        $id = (int) Cifrado::decryption($id);
        if (!is_int($id)) {
            $this->redireccionar();
        }
        $this->_view->setJs(array("facebook"));
        $this->_view->assign("noticiarecientes", $this->_blog->getBlog(""));
        $this->_view->assign("noticia", $this->_blog->getNoticiasBlogById($id));
        $this->_view->assign("comentarios", $this->_blog->getComentarios($id));

        $this->_view->renderizar("noticia", "blog");
    }

    public function eliminarNoticia($id) {
        $id = Cifrado::decryption($id);
        $id = (int) $id;
        if (!is_int($id)) {
            $this->redireccionar();
        }
        $this->_blog->eliminarNoticia($id);
        $this->redireccionar("blog");
    }
    
    public function editar($id){
        $this->_view->setJs(array("funcionesJs"));
        $this->_view->assign("titulo","Noticia");
        $id = (int) Cifrado::decryption($id);
        
        if (!is_int($id) || $id == 0) {
            $this->redireccionar("error/access/5050");
        }
        $this->_view->assign("noticia", $this->_blog->getNoticiasBlogById($id));
        
        if ($this->getInt("guardar") == 1) {
            $this->_view->assign("blog", $_POST);
            if (!$this->getPostParam("name")) {
                $this->_view->assign("_error", "SE DEBE INGRESAR EL TEMA DE LA NOTICIA");
                $this->_view->renderizar("edit", "blog");
                exit;
            }
            if (!$this->getPostParam("cuerpo")) {
                $this->_view->assign("_error", "SE DEBE INGRESAR EL CONTENIDO DE LA NOTICIA");
                $this->_view->renderizar("edit", "blog");
                exit;
            }

            $imagen = "";
            
            if($this->getPostParam("nameImagen")){
                $imagen = $this->getPostParam("nameImagen");
            }

            if ($_FILES['imagen']['name']) {
                $ruta = $this->getRutaCarpetaImagen("noticia");
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
                    $this->_view->renderizar('edit', 'blog');
                    exit;
                }
            }
//             editarBlog($titulo,$desc,$img,$id)
            $this->_blog->editarBlog(
                    $this->getPostParam("name"), $this->getPostParam("cuerpo"), $imagen,$id
            );
            
            $this->_view->assign("blog", array());
            
            $this->redireccionar("blog/noticia/".Cifrado::encryption($id));
//        $this->_view->renderizar("index", "blog");    
        }
        
        $this->_view->renderizar("edit","blog");
    }

    public function addComentario() {
        $this->_view->setJs(array("prueba"));
        $id = Cifrado::decryption($this->getAlphaNum("noticiaId"));
        $id = (int) $id;
        $this->_view->assign("comentarios", $this->_blog->getComentarios($id));
        if ($this->getInt("guardar") == 1) {
            if (!$this->getPostParam("message")) {
                $this->_view->assign("_error", "Ingrese el comentario porfavor");
                $this->_view->renderizar("vistaAjax/comentarioAjax",false,true);
                exit;
            }
            $this->_blog->addComentario(
                    $this->getPostParam("message"), $id
            );
            $this->_view->assign("comentarios", $this->_blog->getComentarios($id));
            $this->_view->renderizar("vistaAjax/comentarioAjax", false, true);
            exit;
        }
    }

    public function eliminarComentario() {
        $this->_view->setJs(array("prueba"));
        $noticiaId = Cifrado::decryption($this->getAlphaNum("noticiaId"));
        $comentarioId = Cifrado::decryption($this->getAlphaNum("comentarioId"));
        $noticiaId = (int) $noticiaId;
        $comentarioId = (int) $comentarioId;
        $this->_blog->eliminarComentario($comentarioId);
        $this->_view->assign("comentarios", $this->_blog->getComentarios($noticiaId));
        $this->_view->assign("noticia", $this->_blog->getNoticiasBlogById($noticiaId));
        $this->_view->renderizar("vistaAjax/comentarioAjax", false, true);
        exit;
    }
    
    public function editComentario(){
        $this->_view->setJs(array("prueba"));
        $noticiaId = Cifrado::decryption($this->getAlphaNum("noticiaId"));
        $comentarioId = Cifrado::decryption($this->getAlphaNum("comentarioId"));
        $noticiaId = (int) $noticiaId;
        $comentarioId = (int) $comentarioId;
//        echo $noticiaId . ' ' . $comentarioId;exit;
        $this->_view->assign("comentarios", $this->_blog->getComentarios($noticiaId));
        if ($this->getInt("guardar") == 1) {
            if (!$this->getPostParam("message")) {
                $this->_view->assign("_error", "Ingrese el comentario porfavor");
                $this->_view->renderizar("vistaAjax/comentarioAjax",false,true);
                exit;
            }
            $this->_blog->editarComentario($this->getPostParam("message"),$comentarioId);
            $this->_view->assign("comentarios", $this->_blog->getComentarios($noticiaId));
            $this->_view->renderizar("vistaAjax/comentarioAjax", false, true);
            exit;
        }
        
        
    }

}
