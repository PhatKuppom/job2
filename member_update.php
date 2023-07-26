<?php
include "connect.php";

$filename = $_FILES["photo"]["name"];

$sql = "UPDATE tbl_member SET 
firstname ='$_POST[firstname]',
lastname = '$_POST[lastname]',
email = '$_POST[email]',
phone = '$_POST[phone]',
photo = '$filename',
address = '$_POST[address]'
WHERE id = '$_GET[id]'";

if (mysqli_query($conn, $sql)) {
    echo "Update success";
    header("location: member_show.php");
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
  mysqli_close($conn);
  ?>

