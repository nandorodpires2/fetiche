<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cadastro
 *
 * @author Fernando
 */
class Form_Perfil_Cadastro extends Zend_Form {
    
    public function init() {
        
        $url = $this->getView()->url(array('controller' => 'perfil', 'action' => 'novo'), null, true);                        
        $this->setAction($url);        
        $this->setMethod('post');        
        
        /**
         * atributos
         */
        $this->setAttrib('id', 'form-perfil-cadastro');
        
        /**
         * perfil_nome
         */
        $perfil_nome = new Zend_Form_Element_Text("perfil_nome");
        $perfil_nome->setLabel("Nome: ");
        $perfil_nome->setRequired();
        $perfil_nome->setAttribs(array(
            'class' => 'form-control',
            'placeholder' => 'Informe seu nome'
        ));
        $this->addElement($perfil_nome);
        
        /**
         * perfil_email
         */
        $perfil_email = new Zend_Form_Element_Text("perfil_email");
        $perfil_email->setLabel("E-mail: ");
        $perfil_email->setRequired();
        $perfil_email->setAttribs(array(
            'class' => 'form-control',
            'placeholder' => 'Informe seu email'
        ));
        $this->addElement($perfil_email);
        
        /**
         * perfil_senha
         */
        $perfil_senha = new Zend_Form_Element_Password("perfil_senha");
        $perfil_senha->setLabel("Senha: ");
        $perfil_senha->setRequired();
        $perfil_senha->setAttribs(array(
            'class' => 'form-control',
            'placeholder' => 'Informe a senha'
        ));
        $this->addElement($perfil_senha);
        
        /**
         * perfil_sexo
         */
        $perfil_sexo = new Zend_Form_Element_Radio("perfil_sexo");
        $perfil_sexo->setLabel("Sexo: ");
        $perfil_sexo->setRequired();
        $perfil_sexo->setMultiOptions(array(
            'M' => ' Masculino',
            'F' => ' Feminino'
        ));
        $this->addElement($perfil_sexo);
        
        /**
         * perfil_datanascimento
         */
        $perfil_datanascimento = new Zend_Form_Element_Text("perfil_datanascimento");
        $perfil_datanascimento->setLabel("Data de Nascimento: ");
        $perfil_datanascimento->setRequired();
        $perfil_datanascimento->setAttribs(array(
            'class' => 'form-control',
            'placeholder' => 'Informe sua data de nascimento'
        ));
        $this->addElement($perfil_datanascimento);
        
        /**
         * submit
         */
        $submit = new Zend_Form_Element_Submit("submit");
        $submit->setLabel("Criar perfil");
        $submit->setAttrib("class", "btn btn-primary btn-block");
        $this->addElement($submit);
        
    }
    
}
