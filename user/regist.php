<?php

require_once 'helper.php';

$nama = $_POST['nama'];
$email = $_POST['email'];
$username = $_POST['username'];
$pass = $_POST['password'];

$query = "INSERT INTO user (nama, email, username, password) VALUES('$nama', '$email', '$username', '$pass')";
$sql = (mysqli_query($db_connect, $query));

if ($sql) {
  echo json_encode(array('message' => 'created'));
} else {
  echo json_encode(array('message' => 'error'));
}
