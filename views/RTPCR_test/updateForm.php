
<form method="get" action="">

<label>
    รหัสผลตรวจRTPCR <input type="text" name="id_RTPCR"
    value="<?php echo $RT->id_RTPCR;?>"/>
</label><br>
<label>
    วันที่ <input type="date" name="date"
    value="<?php echo $RT->date;?>"/>
</label><br>
<label>
    เวลา <input type="time" name="time"
    value="<?php echo $RT->time;?>"/>
</label><br>
<label>
    ผลตรวจ <input type="text" name="test_result"
    value="<?php echo $RT->test_result;?>"/>
</label><br>

<label>รหัสผลตรวจATK <select name="id_atk">
    <?php foreach($atk as $atk2) 
        {echo "<option value = $atk2->id_atk";
        if($atk2->id_atk==$RT->id_atk){echo " selected='selected'";}
        echo "> $atk2->id_atk $atk2->NamePeople $atk2->LastnameP </option>";}
        ?>
    </select></label><br>

<input type="hidden" name="controller" value="RTPCR_test"/>

<input type="hidden" name="id" value="<?php echo $RT->id_RTPCR; ?>"/>

<button type="submit" name="action" value="index">back</button>
<button type="submit"name="action"value="update">update</button>

</form>