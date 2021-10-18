<?php echo "<br>Are you sure to delete this laboratory ? <br>";
    echo "รหัสห้องปฏิบัติการ : $lab->id_lab <br>";
    echo "ชื่อห้องปฏิบัติการ : $lab->name_lab<br>";
    echo "ที่อยู่ : $lab->address_lab<br>";
    

?>
<form method="get" action="">
    <input type="hidden" name="controller" value="laboratory"/>
    <input type="hidden" name="id" value="<?php echo $lab->id_lab;?>"/>
    <button type="submit" name="action" value="index">back</button>
    <button type="submit" name="action" value="delete">delete</button>
</form>