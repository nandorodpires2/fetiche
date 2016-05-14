<?php

class Site_IndexController extends Zend_Controller_Action {

    public function init() {
        
        
    }

    public function indexAction() {
        
        $form = new Form_Perfil_Cadastro();        
        $this->view->form = $form;
        
    }

}

