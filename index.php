<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT, GET, POST");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

if ($_POST['name']) {
  $res = "Hi " . $_POST['name'];
  echo json_encode($res);
}

?>
