<?php

class PolicyController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        $policy = new Application_Model_DbTable_Policy();        
        $this->view->policy = $policy->fetchAll();
    }


}

