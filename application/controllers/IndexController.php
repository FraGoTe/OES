<?php

class IndexController extends Zend_Controller_Action
{
    public function preDispatch() {
        $auth = Zend_Auth::getInstance();
        if (!$auth->hasIdentity()) {
            $this->_redirect('login');
        }
    }

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
    
    }


}