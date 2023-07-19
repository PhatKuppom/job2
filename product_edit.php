<?php
include "connect.php";
$sql = "SELECT * FROM tbl_product WHERE id='$_GET[id]' ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>
<link rel="stylesheet" href="styles.css" />
<div class="ct">
<form action="member_product.php?id=<?php echo $row[id] ?>" method="post" enctype="multipart/form-data">
ชื่อสินค้า <input type="text" name="name" value="<?php echo $row[name]; ?>"class="input"/> 
    ราคา <input type="text" name="price" value="<?php echo $row[price]; ?>"class="input"/> 
    จำนวนของ <input type="text" name="stock" value="<?php echo $row[stock]; ?>"class="input"/> 
    คำอธิบาย <textarea name="deacription"class="input"> <?php echo $row[deacription]; ?> </textarea> 
     <input type="submit" value="Update" class="bt"/>
</form>
</div>