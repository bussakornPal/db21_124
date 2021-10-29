<?php echo "<br>Are you sure to delete this staff ?<br>";
    echo "เลขประจำตัวพนักงาน : $stafflab->id_staff_inlab <br>";
    echo "ชื่อ : $stafflab->first_name_inlab<br>";
    echo "นามสกุล : $stafflab->last_name_inlab<br>";
    echo "เบอร์โทรศัพท์ : $stafflab->phone_staff<br>";
    echo "ที่อยู่ : $stafflab->address_staff_inlab<br>";
    echo "ชื่อห้องปฏิบัติการ : $stafflab->name_lab<br>";
    echo "รหัสห้องปฏิบัติการ : $stafflab->id_lab<br>";

?>
<form method="get" action="">
    <input type="hidden" name="controller" value="staff_in_lab"/>
    <input type="hidden" name="id" value="<?php echo $stafflab->id_staff_inlab;?>"/>
    <button type="submit" name="action" value="index">back</button>
    <button type="submit" name="action" value="delete">delete</button>
</form>