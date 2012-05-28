<?php

Class LoginController extends ApplicationGeneral {

    function index() {
        $objUser = new Usuario();
        $data['msg']='';
        if(@$_REQUEST['flag']=='sended'){
        $ret = $objUser->compare($_REQUEST);
        if ($ret) {
            session_start();
            $_SESSION['username'] = htmlspecialchars($username); // htmlspecialchars() XSS
            header('Location: http://www.example.com/loggedin.php');
        }else  
           $data['msg'] = '<p style="color: red;"><img  src="../../../imagenes/error.gif">
                            Usuario y/o contrase&ntilde;a incorrecto.</p>';
        
        }
        $this->view->show("{$_REQUEST['all_parameters'][0]}/{$_REQUEST['all_parameters'][1]}.phtml", $data);
    }

    function validar() {
        
    }

}

?>