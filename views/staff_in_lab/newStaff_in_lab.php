<form method="get" action="">
<label> เลขประจำตัวพนักงาน <input type="text" name="id_staff_inlab"/> </label><br>
<label> ชื่อ <input type="text" name="first_name_inlab"/> </label><br>
<label> นามสกุล <input type="text" name="last_name_inlab"/> </label><br>
<label> เบอร์โทรศัพท์ <input type="text" name="phone_staff"/> </label><br>
<label> ที่อยู่ <input type="text" name="address_staff_inlab"/> </label><br>

<label> ชื่อห้องปฏิบัติการ <select name="id_lab">
    <?php foreach($laboratory_List as $labb){echo "<option value=$labb->id_lab> $labb->name_lab</option>";}?>
</select></label><br>

<input type="hidden" name="controller" value = "staff_in_lab"/>
<button type="submit"name="action" value = "index"> back </button>
<button type="submit"name="action" value= "addStaff_in_lab"> save </button>

</form>