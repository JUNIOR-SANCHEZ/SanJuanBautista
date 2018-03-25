<?php

class galeriaController extends Controller{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
        $this->_view->assign("titulo","Galeria");
        $this->_view->renderizar("index","galeria");
    }
    public function nuevo(){
        $this->_view->assign("titulo","Galeria");
        $this->_view->renderizar("nuevo","galeria");
    }
    
} 
