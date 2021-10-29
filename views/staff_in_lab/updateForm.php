<form method="get" action="">

<label>
    เลขประจำตัวพนักงาน <input type="text" name="id_staff_inlab"
    value="<?php echo $stafflab->id_staff_inlab;?>"/>
</label><br>
<label>
    ชื่อ <input type="text" name="first_name_inlab"
    value="<?php echo $stafflab->first_name_inlab;?>"/>
</label><br>
<label>
    นามสกุล <input type="text" name="last_name_inlab"
    value="<?php echo $stafflab->last_name_inlab;?>"/>
</label><br>
<label>
    เบอร์โทรศัพท์ <input type="text" name="phone_staff"
    value="<?php echo $stafflab->phone_staff;?>"/>
</label><br>
<label>
    ที่อยู่ <input type="text" name="address_staff_inlab"
    value="<?php echo $stafflab->address_staff_inlab;?>"/>
</label><br>

<label>ชื่อห้องปฏิบัติการ <select name="id_lab">
    <?php foreach($lab as $lab2) 
        {echo "<option value = $lab2->id_lab";
        if($lab2->id_lab==$stafflab->id_lab){echo " selected='selected'";}
        echo "> $lab2->name_lab</option>";}
        ?>
    </select></label><br>

<input type="hidden" name="controller" value="staff_in_lab"/>

<input type="hidden" name="id" value="<?php echo $stafflab->id_staff_inlab; ?>"/>

<button type="submit" name="action" value="index">back</button>
<button type="submit"name="action"value="update">update</button>

</form>