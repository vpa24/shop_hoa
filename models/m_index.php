<?php
require_once("database.php");
class M_index extends database
{
    function doc_tat_ca_hoa(){
        $sql = "select * from hoa limit 0,8";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
}
?>