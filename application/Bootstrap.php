<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap {

    private $_acl = null;

        //Zend Forms
    protected function _initView() {
        //Inicializamos la vista
        $view = new Zend_View();
        $view->setEncoding('UTF-8');
        $view->doctype('XHTML1_STRICT');
        $view->headMeta()
                ->appendHttpEquiv('Content-Type', 'text/html;charset=utf-8');

        //renderizamos la vista
        $viewRenderer =
                Zend_Controller_Action_HelperBroker::getStaticHelper('ViewRenderer');
        $viewRenderer->setView($view);

        return $view;
    }
    //Inicializando las opciones
    function _initViewHelpers(){
        
        $this->bootstrap('layout');
        $layout = $this->getResource('layout');
        $view = $layout->getView();
        
        $navContainerConfig = new Zend_Config_Xml(APPLICATION_PATH.'/config/navigation.xml','nav');
        $navContainer = new Zend_Navigation($navContainerConfig);
        
        $view->navigation($navContainer);
    }
}