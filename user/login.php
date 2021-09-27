<?php

require_once 'helper.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  //Getting values
  $username = $_POST['username'];
  $pass = $_POST['password'];

  //Creating sql query
  $sql = "SELECT * FROM user WHERE username='$username' AND password ='$pass'";

  //executing query
  $result = mysqli_query($db_connect, $sql);

  //fetching result
  $check = mysqli_fetch_array($result);

  //if we got some result
  if (isset($check)) {
    echo json_encode(array('message' => 'success login'));
  } else {
    echo json_encode(array('message' => 'failure login'));
  }
  mysqli_close($db_connect);
}
