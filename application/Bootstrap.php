<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
    //Zend Forms
    protected function _initView() {
        
        //Inicializamos la vista
        $view = new Zend_View();
        $view->setEncoding('UTF-8');
        $view->doctype('XHTML1_STRICT');
        $view->headMeta()
             ->appendHttpEquiv('Content-Type','text/html;charset=utf-8');

        //renderizamos la vista
        $viewRenderer = 
        Zend_Controller_Action_HelperBroker::getStaticHelper('ViewRenderer');
        $viewRenderer->setView($view);
        
        return $view;
    }
}