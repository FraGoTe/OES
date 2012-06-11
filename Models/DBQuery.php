<?php
class DbQuery extends DbConnect {

    var $result = '';
    var $sql;

    function DbQuery($sql1) {
        $this->sql = $sql1;
    }

    function query() {

        return $this->result = mysql_query($this->sql);
//return($this->result != false); 
    }

    function affectedrows() {
        return(@mysql_affected_rows($this->conn));
    }

    function numrows() {
        return(@mysql_num_rows($this->result));
    }

    function fetchobject() {
        return(@mysql_fetch_object($this->result, MYSQL_ASSOC));
    }

    function fetcharray() {
        return(@mysql_fetch_array($this->result));
    }

    function fetchassoc() {
        return(@mysql_fetch_assoc($this->result));
    }

    function freeresult() {
        return(@mysql_free_result($this->result));
    }

}
?>
