<?php

class fundacionController extends Controller{
    public function __construct() {
        parent::__construct();
    }
    public function index() {
        $this->_view->assign("titulo","Nuestra fundacion");
        $this->_view->renderizar("index","fundacion");
    }
    public function mision(){
        $this->_view->assign("titulo","Nuestra fundacion");
        $this->_view->renderizar("mision","fundacion");
    }
    public function vision(){
        $this->_view->assign("titulo","Nuestra fundacion");
        $this->_view->renderizar("vision","fundacion");
    }
    public function codigoEtica(){
        $this->_view->assign("titulo","Nuestra fundacion");
        $this->_view->renderizar("codigo_de_etica","codigo");
    }
}
