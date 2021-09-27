<?php

require_once 'helper.php';
parse_str(file_get_contents('php://input'), $value);

$id = $value['id'];
$nama = $value['nama'];
$email = $value['email'];
$username = $value['username'];
$pass = $value['password'];

$query = "UPDATE user SET nama='$nama', email='$email', username='$username', password='$pass' WHERE id='$id'";
$sql = (mysqli_query($db_connect, $query));

if ($sql) {
  echo json_encode(array('message' => 'updated!'));
} else {
  echo json_encode(array('message' => 'error'));
}
