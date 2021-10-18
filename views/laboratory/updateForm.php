<form method="get" action="">

<label>
    รหัสห้องปฏิบัติการ <input type="text" name="id_lab"
    value="<?php echo $lab->id_lab;?>"/>
</label><br>
<label>
    ชื่อห้องปฏิบัติการ <input type="text" name="name_lab"
    value="<?php echo $lab->name_lab;?>"/>
</label><br>
<label>
    ที่อยู่ <input type="text" name="address_lab"
    value="<?php echo $lab->address_lab;?>"/>
</label><br>

<input type="hidden" name="controller" value="laboratory"/>

<input type="hidden" name="id" value="<?php echo $lab->id_lab; ?>"/>

<button type="submit" name="action" value="index">back</button>
<button type="submit"name="action"value="update">update</button>

</form>