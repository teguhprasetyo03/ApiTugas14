<?php
include_once './connect.php';

if ($_POST) {
  $id = $_POST['id'];

  $sql = "DELETE from tb_course where id='$id'";
  $query = mysqli_query($db_connect, $sql);
  if ($query) {
    $response["error"] = false;
    $response["error_msg"] = "Delete success";
    $response["regID"] = $id;
    echo json_encode($response);
  } else {
    $response["error"] = false;
    $response["error_msg"] = "Delete failed";
    echo json_encode($response);
  }
} else {
  $response["error"] = true;
  $response["error_msg"] = "404";
  echo json_encode($response);
}
