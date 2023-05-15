<?php

function selectAll($table, $attr, $val) {
    $root = $_SERVER['DOCUMENT_ROOT']."/store";
    require $root."/lib/connect.php";
    require "tables/".$table.".php";

    try {
        $res = $conn->query("SELECT * FROM `".$table."` WHERE `".$attr."` = '".$val."'");
        return $res;
    } catch(Exception $e) {
        echo $e->getMessage();
    }
    $conn = null;
}

?>