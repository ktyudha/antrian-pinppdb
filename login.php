<?php
session_start();
include("db-conn.php");
$noAntri = 0;

if (isset($_POST['submit'])) {
  $npsn = $_POST['npsn'];
  $nisn = $_POST['nisn'];
  $ttl = $_POST['ttl'];

  
  $check_user = mysqli_query($conn,"SELECT * FROM table_pinppdb WHERE nisn = '$nisn'");
  $check_login = mysqli_num_rows($check_user);

  $sql = "SELECT id FROM table_pinppdb WHERE nisn = '$nisn'";
  $result = mysqli_query($conn, $sql);

  if ($check_login > 0) {
  } else {
    if(mysqli_query($conn, "INSERT INTO table_pinppdb VALUES('0', '$npsn', '$nisn', '$ttl')")){
      echo "<script>
      alert('Data berhasil dikirim');
      </script>";
      $last_id = mysqli_insert_id($conn);
      $noAntri = $last_id;
      error_reporting(0);
    } else {
      echo "Error: " . "<br>" . mysqli_error($conn);
    }
  }
  if (mysqli_num_rows($result) > 0) {
     $row = mysqli_fetch_assoc($result);
     $noAntri = $row["id"];
  } 

  $_SESSION["npsn"] = $npsn;
  $_SESSION["nisn"] = $nisn;
  $_SESSION["noAntri"] = $noAntri;
  header("location: output.php");
}


?>