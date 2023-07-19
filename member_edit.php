<?php
include "connect.php";
$sql = "SELECT * FROM tbl_member WHERE id='$_GET[id]'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>
<link rel="stylesheet" href="styles.css" />
<div class="ct">
<form action="member_update.php?id=<?php echo $row[id] ?>" method="post" enctype="multipart/form-data">
ชื่อ <input type="text" name="firstname" value="<?php echo $row[firstname];?>"class="input"/>
นามสกุล <input type="text" name="lastname" value="<?php echo $row[lastname];?>"class="input"/> 
อีเมล <input type="email" name="email" value="<?php echo $row[email];?>"class="input"/> 
เบอร์โทร <input type="text" name="phone" value="<?php echo $row[phone];?>"class="input"/> 
ที่อยู่ <textarea name="address"class="input"> <?php echo $row[address]; ?> </textarea> 
แนบรูป <input type="file" name="photo"/> 
<input type="submit" value="บันทึกข้อมูล" class="bt"/>
</form>
</div>
