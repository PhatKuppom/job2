<?php
include "connect.php";

$sql = "UPDATE tbl_product SET 
name ='$_POST[name]',
price = '$_POST[price]',
stock = '$_POST[stock]',
deacription = '$_POST[deacription]',
WHERE id = '$_GET[id]'";

if (mysqli_query($conn, $sql)) {
  echo "Update success";
  header("location: product_show.php");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>