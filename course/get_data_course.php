<?php
// include '../config.php';

include_once './connect.php';

//require_once('../config.php');

if ($_GET) {

  $id  = $_GET['id'];

  $query = mysqli_query($db_connect, "Select * from tb_course ");

  while ($data = mysqli_fetch_assoc($query)) {
    $arrayJson[] = $data;
  }
  $result = $arrayJson;
  echo json_encode($result);
} else {
  $result["error"] = true;
  $result["error_msg"] = "404";

  echo json_encode($result);
}
