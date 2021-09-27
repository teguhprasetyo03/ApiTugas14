<?php
include_once './connect.php';
// include '../config.php';

if ($_POST) {
  $id = $_POST['id'];
  $name_course = $_POST['name_course'];
  $chapter = $_POST['chapter'];
  $instructor = $_POST['instructor'];
  $media = $_POST['media'];

  $sql = "INSERT INTO tb_course (name_course, chapter,instructor, media) 
          VALUES('$name_course', '$chapter','$instructor', '$media')";

  $query = mysqli_query($db_connect, $sql);
  if ($query) {
    $response["error"] = false;
    $response["error_msg"] = "Insert success";
    echo json_encode($response);
  } else {
    $response["error"] = false;
    $response["error_msg"] = "Insert failed";
    echo json_encode($response);
  }
} else {
  $response["error"] = true;
  $response["error_msg"] = "404";
  echo json_encode($response);
}
