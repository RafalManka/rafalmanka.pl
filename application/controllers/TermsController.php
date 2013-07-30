<?php

class TermsController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        $terms = new Application_Model_DbTable_Terms();        
        $this->view->terms = $terms->fetchAll();          
        
    }
}

