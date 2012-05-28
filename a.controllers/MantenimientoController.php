<?php

Class MantenimientoController extends ApplicationGeneral {

    function index() {
        $this->view->show("{$_REQUEST['all_parameters'][0]}/{$_REQUEST['all_parameters'][1]}.phtml", $data);
    }

    function listusers() {
        $page = $_GET['page']; // get the requested page
        $limit = $_GET['rows']; // get how many rows we want to have into the grid
        $sidx = $_GET['sidx']; // get index row - i.e. user click to sort
        $sord = $_GET['sord']; // get the direction
        $ObjMantenimiento = new Usuario();
        $usuarios = $ObjMantenimiento->getusers();
        $elementos = count($usuarios);
        if (!$sidx)
            $sidx = 1;
        if ($elementos > 0) {
            $total_pages = ceil($elementos / $limit);
        } else {
            $total_pages = 0;
        }
        if ($page > $total_pages)
            $page = $total_pages;
        $start = $limit * $page - $limit; // do not put $limit*($page - 1)
        $responce->page = $page;
        $responce->total = $total_pages;
        $responce->records = $elementos;
        $i=0;
        foreach($usuarios as $user){
            $responce->rows[$i]['username'] = $user['username'];
            $responce->rows[$i]['cell'] = array($user['username'],$user['password'],'nombrecompletoo');
            $i++;
        }
        /*
         * {name:'usuario',index:'id', width:100},
   		{name:'password',index:'invdate', width:100},
   		{name:'nomcomp',index:'name', width:300}
         */
        echo json_encode($responce);
    }

}

?>