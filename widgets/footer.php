<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class footerWidget extends Widget{
    public function __construct() {
    }
    public function getFooter($menu,$view,$invers = null){
        $data["menu"]=$menu;
        $data["invers"]=$invers;
        return $this->render($view,$data);
    }
    public function getConfigs($menu){
        $footer["footer"] = array(
            "position"=>"footer",
            "show"=>"all",
            "hide"=>array("blog","galeria","error","codigo")
        );
        return $footer[$menu];
    }
}
