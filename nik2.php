<?php
$res = array("status" => "success", "data" => array("name" => $_POST["name"], "age" => $_POST["age"],  "loc" => $_POST["loc"]));
echo json_encode($res);
?>
