<?php
Class Usuario extends Applicationbase{
	private $tabla="usuario";
	
        public function compare($data){
           $val = $this->comparePass($this->tabla, $datos);
           return $val;
        }
}
?>