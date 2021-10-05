<?php

class usr
{
}
require_once 'helper.php';

$nama = $_POST['nama'];
$email = $_POST['email'];
$username = $_POST['username'];
$pass = $_POST['password'];

if ((empty($nama))) {
  $response = new usr();
  $response->success = 0;
  $response->message = "Kolom nama tidak boleh kosong";

  die(json_encode($response));
} else if ((empty($username))) {
  $response = new usr();
  $response->success = 0;
  $response->message = "Kolom username tidak boleh kosong";

  die(json_encode($response));
} else if ((empty($email))) {
  $response = new usr();
  $response->success = 0;
  $response->message = "Kolom email tidak boleh kosong";

  die(json_encode($response));
} else if ((empty($pass))) {
  $response = new usr();
  $response->success = 0;
  $response->message = "Kolom password tidak boleh kosong";

  die(json_encode($response));
} else {
  $num_rows = mysqli_num_rows(mysqli_query($db_connect, "SELECT * FROM user WHERE username='" . $username . "'"));

  if ($num_rows == 0) {
    $query = mysqli_query($db_connect, "INSERT INTO user (nama, email, username, password) VALUES('$nama', '$email', '$username', '$pass')");

    if ($query) {
      $response = new usr();
      $response->success = 1;
      $response->message = "Register berhasil, silahkan login.";

      die(json_encode($response));
    } else {
      $response = new usr();
      $response->success = 0;
      $response->message = "Username sudah ada";

      die(json_encode($response));
    }
  } else {
    $response = new usr();
    $response->success = 0;
    $response->message = "Username sudah ada";

    die(json_encode($response));
  }
}

mysqli_close($db);
