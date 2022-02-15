<?php
$servername = "172.19.0.2";
$username = "root";
$password = "password";
$dbname = "trucorp_db";
$karyawan = 0;
//CREDIT : W3 School.



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, nama, alamat, jabatan FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Jumlah karyawan: "
    $karyawan ++;
    echo $karyawan;
  }
} else {
  echo "0 results";
}
$conn->close();
?>


