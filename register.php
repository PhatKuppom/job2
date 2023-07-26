<link rel="stylesheet" href="styles.css" />
<div class="ct">
    <h1 class="text-center"> สมัครสมาชิก </h1>
<form action="member_insert.php" method="post" enctype="multipart/form-data">
ชื่อ <input type="text" name="firstname" class="input"/>
นามสกุล <input type="text" name="lastname"class="input"/> 
อีเมล <input type="email" name="email" class="input"/> 
รหัสผ่าน <input type="password" name="password" class="input"/> 
เบอร์โทร <input type="text" name="phone" class="input"/> 
ที่อยู่ <textarea name="address"class="input"> </textarea> 
แนบรูป <input type="file" name="photo"/> 
<input type="submit" value="บันทึกข้อมูล" class="bt"/>
</form>
</div>

