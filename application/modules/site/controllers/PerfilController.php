<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PerfilController
 *
 * @author Fernando
 */
class Site_PerfilController extends Zend_Controller_Action {
    
    public function init() {
        
    }
    
    public function indexAction() {
        
    }
    
    public function novoAction() {
        $form = new Form_Perfil_Cadastro();        
        $this->view->form = $form;
        
        if ($this->getRequest()->isPost()) {
            $data = $this->getRequest()->getPost();
            if ($form->isValid($data)) {
                $data = $form->getValues();
                
                try {
                    Zend_Db_Table_Abstract::getDefaultAdapter()->beginTransaction();
                
                    $modelPerfil = new Model_DbTable_Perfil();
                    $modelPerfil->insert($data);
                    
                    $this->_helper->flashMessenger->addMessage(array(
                        'success' => 'Perfil cadastrado com sucesso!'
                    ));
                    
                    /**
                     * Plugin Mail
                     */
                    $pluginMail = new Plugin_Mail();
                    $pluginMail->send("padrao.phtml", "Teste", "nandorodpires@gmail.com");
                    
                    Zend_Db_Table_Abstract::getDefaultAdapter()->commit();
                    
                    $this->_redirect("perfil/retorno");
                } catch (Exception $ex) {                    
                    Zend_Db_Table_Abstract::getDefaultAdapter()->rollBack();
                    die($ex->getMessage());
                }
                
            } 
        }
        
    }
    
    /**
     * retorno de sucesso do cadastro
     */
    public function retornoAction() {
        
    }
    
}
