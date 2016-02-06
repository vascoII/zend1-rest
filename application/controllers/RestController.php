<?php

class RestController extends Zend_Rest_Controller
{
    public function init(){
        $bootstrap = $this->getInvokeArg('bootstrap');
        $options = $bootstrap->getOption('resources');

        $contextSwitch = $this->_helper->getHelper('contextSwitch');
        $contextSwitch  ->addActionContext('index', array('json'))
                        ->addActionContext('get', array("json"))
                        ->addActionContext('post', array("json"))
                        ->addActionContext('put', array("json"))
                        ->addActionContext('delete', array("json"))
                        ->initContext('json'); 
    }

    public function deleteAction() {
        $this->view->retour = "deleteAction";
    }

    public function getAction() {
        $this->view->retour = "getAction";
    }

    public function indexAction() {
        $this->view->retour = "indexAction";
    }

    public function postAction() {
        $this->view->retour = "postAction";
    }

    public function putAction() {
        $this->view->retour = "putAction";
    }

    public function headAction() {
        
    }

}