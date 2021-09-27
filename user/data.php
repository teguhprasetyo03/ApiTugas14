<?php

require_once 'helper.php';

$query = "SELECT * FROM user";
$sql = mysqli_query($db_connect, $query);

if ($sql) {
  $result = array();
  while ($row = mysqli_fetch_array($sql)) {
    array_push($result, array(
      'id' => $row['id'],
      'nama' => $row['nama'],
      'email' => $row['email'],
      'username' => $row['username'],
      'pass' => $row['password'],
    ));
  }
  echo json_encode($result);
}
