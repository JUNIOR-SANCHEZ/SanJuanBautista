<?php

class registroController extends Controller {

    private $_sqlUser;

    public function __construct() {
        parent::__construct();
        $this->_sqlUser = $this->loadModel("registro");
    }

    public function index() {
        if (Session::get('autenticado')) {
            $this->redireccionar();
        }
        $this->_view->setJsPlugin(array("validate"));
        $this->_view->setJs(array("validacionRegistro"));
        $this->_view->assign("titulo", "Registro");
        if ($this->getInt("enviar") == 1) {
            $this->_view->assign("datos", $_POST);
            if (!$this->getSql("name")) {
                $this->_view->assign("_error", "Debe introducir  su nombre");
                $this->_view->renderizar("index", "registro");
                exit;
            }
            if (!$this->getPostParam("user")) {
                $this->_view->assign("_error", "Debe introducir  el usuario");
                $this->_view->renderizar("index", "registro");
                exit;
            }
            if ($this->_sqlUser->checkUser($this->getPostParam("user"))) {
                $this->_view->assign("_error", "El usuario " . $this->getPostParam("txt_usuario") . " ya exite.");
                $this->_view->renderizar("index", "registro");
                exit;
            }

            if (!$this->checkEmail($this->getPostParam("email"))) {
                $this->_view->assign("_error", "El correo es invalido");
                $this->_view->renderizar("index", "registro");
                exit;
            }

            if ($this->_sqlUser->checkEmail($this->getPostParam("emaio"))) {
                $this->_view->assign("_error", "El correo " . $this->getPostParam("email") . " ya exite");
                $this->_view->renderizar("index", "registro");
                exit;
            }
            if (!$this->getSql("password")) {
                $this->_view->assign("_error", "Debe introducir  una contraseña");
                $this->_view->renderizar("index", "registro");
                exit;
            }
            if ($this->getPostParam("password") != $this->getPostParam("password2")) {
                $this->_view->assign("_error", "Las contraseñas no coinciden");
                $this->_view->renderizar("index", "registro");
                exit;
            }
            $imagen = "upl_5acda05f64a84.png";

            if ($_FILES['image']['name']) {
                $ruta = $this->getRutaCarpetaImagen("user");
                $upload = new upload($_FILES['image'], 'es_Es');
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

            $this->_sqlUser->addUser(
                    $this->getSql("name"), $this->getAlphaNum("user"), $this->getPostParam("password"), $this->getPostParam("email"), $imagen
            );

            if (!$this->_sqlUser->checkUser($this->getPostParam("user"))) {
                $this->_view->assign("_error", "Error al registrar el usuario.");
                $this->_view->renderizar("index", "registro");
                exit;
            }
            $this->_view->assign("datos", array());
            $this->_view->assign("mensaje", "El usuario se registro con exito.");
            $this->redireccionar("usuarios/login");
            exit;
        }

        $this->_view->renderizar('index', 'registro');
    }

    public function perfil() {
        if (!Session::get("autenticado")) {
            $this->redireccionar();
        }
        
        $this->_view->setJsPlugin(array("validate"));
        $this->_view->setJs(array("funcionesJs","validacionPerfil"));
        $this->_view->assign("titulo", "Perfil");
        $this->_view->assign("usuario", $this->_sqlUser->getUserById(Session::get("id")));
        
        
        if ($this->getInt("guardar") == 1) {
            if (!$this->getSql("name")) {
                $this->_view->assign("_error", "Debe introducir  su nombre");
                $this->_view->renderizar("perfil", "registro");
                exit;
            }
            if (!$this->getPostParam("user")) {
                $this->_view->assign("_error", "Debe introducir  el usuario");
                $this->_view->renderizar("perfil", "registro");
                exit;
            }
            if (!$this->checkEmail($this->getPostParam("email"))) {
                $this->_view->assign("_error", "El correo es invalido");
                $this->_view->renderizar("perfil", "registro");
                exit;
            }
            $imagen = '';
            $phone = '**********';
            $ocupacion='**********';
            if($this->getPostParam("phone")){
                $phone = $this->getPostParam("phone");
            }
            if ($this->getPostParam("rutaImagen")) {
                $imagen = $this->getPostParam("rutaImagen");
            }
            if($this->getPostParam("ocupacion")){
                $ocupacion = $this->getPostParam("ocupacion");
            }
            if($this->getPostParam("sexo") === "void"){
                $this->_view->assign("_error","Debe selecionar el sexo");
                $this->_view->renderizar("perfil", "registro");
                exit;
            }
            
            if($this->getPostParam("estado") === "void"){
                $this->_view->assign("_error","Debe selecionar su estado.");
                $this->_view->renderizar("perfil", "registro");
                exit;
            }
            // echo $this->getPostParam("estado"); exit;

            if ($_FILES['imagen']['name']) {
                
                $this->eliminarImg("user",$imagen);
                
                $ruta = $this->getRutaCarpetaImagen("user");
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
                    $this->_view->renderizar('perfil', 'blog');
                    exit;
                }


            }
            $this->_sqlUser->editUser($imagen,$this->getSql("name"), $this->getPostParam("user"), $this->getPostParam("email"),$phone, $this->getPostParam("sexo"), $this->getPostParam("estado"),$ocupacion);
            
            $this->redireccionar("usuarios/registro/perfil");
            exit;
        }
        $this->_view->renderizar("perfil", "registro");
    }

}
