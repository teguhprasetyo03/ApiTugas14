<?php
require_once 'helper.php';

class usr
{
}

$username = $_POST["username"];
$password = $_POST["password"];

if ((empty($username)) || (empty($email))) {
  $response = new usr();
  $response->success = 0;
  $response->message = "Kolom tidak boleh kosong";

  die(json_encode($response));
}

$query = mysqli_query($db_connect, "SELECT * FROM user WHERE username='$username' AND password='$password'");
$row = mysqli_fetch_array($query);

if (!empty($row)) {
  $response = new usr();
  $response->success = 1;
  $response->message = "Selamat datang " . $row['username'];
  //    $response->id = $row['id'];
  $response->username = $row['username'];

  die(json_encode($response));
} else {
  $response = new usr();
  $response->success = 0;
  $response->message = "Username atau password salah";

  die(json_encode($response));
}

mysqli_close($db);
