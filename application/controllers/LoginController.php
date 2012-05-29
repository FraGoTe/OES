<?php

class LoginController extends Zend_Controller_Action {


    public function indexAction() {

        
        if (Zend_Auth::getInstance()->hasIdentity())
            $this->_redirect('/datos-alumno/index');
        
        $form = new Application_Form_Login(array(
                    'action' => '/login/index',
                    'method' => 'post',
                ));
        
         $request = $this->getRequest();
        if ($request->isPost())
            if ($form->isValid($this->_request->getPost())) {

                $authAdapter = $this->getAuthAdapter();

                $username = $form->getValue('username');
                $password = $form->getValue('password');

                $authAdapter->setIdentity($username)
                        ->setCredential($password);

                $auth = Zend_Auth::getInstance();
                $result = $auth->authenticate($authAdapter);

                if ($result->isValid()) {
                    $identity = $authAdapter->getResultRowObject();
                    $authStorage = $auth->getStorage();
                    $authStorage->write($identity);
                    $this->_redirect('/datos-alumno/index');
                } else {
                    $this->getResponse()->appendBody('Ingreso Inválido');
                }
            }
        
        $this->view->form = $form;
    }

    public function logoutAction() {
        Zend_Auth::getInstance()->clearIdentity();
        $this->_helper->redirector('/login/'); // back to login page
    }

    private function getAuthAdapter() {
        $authAdapter = new Zend_Auth_Adapter_DbTable(Zend_Db_Table::getDefaultAdapter());
        $authAdapter->setTableName('usuario')
                ->setIdentityColumn('usu_id')
                ->setCredentialColumn('usu_passw');
        return $authAdapter;
    }

}

