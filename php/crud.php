<?php

function selectAll($table, $attr, $val) {
    $root = $_SERVER['DOCUMENT_ROOT']."/store";
    require $root."/lib/connect.php";

    try {
        $res = $conn->query("SELECT * FROM `".$table."` WHERE `".$attr."` = '".$val."'");
        return $res;
    } catch(Exception $e) {
        return "Database error: ".$e->getMessage();
    }
    $conn = null;
}

?>