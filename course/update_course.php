<?php
// include '../config.php';
include_once './connect.php';

if ($_POST) {
  $id = $_POST['id'];

  $sql = "UPDATE tb_course SET status=0 where id='$id'";
  $query = mysqli_query($db_connect, $sql);
  if ($query) {
    $response["error"] = false;
    $response["error_msg"] = "Update success";
    $response["regID"] = $id;
    echo json_encode($response);
  } else {
    $response["error"] = false;
    $response["error_msg"] = "Update failed";
    echo json_encode($response);
  }
} else {
  $response["error"] = true;
  $response["error_msg"] = "404";

  echo json_encode($response);
}
