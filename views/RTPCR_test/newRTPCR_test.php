<form method="get" action="">
<label> รหัสผลตรวจRTPCR <input type="text" name="id_RTPCR"/> </label><br>
<label> วันที่ <input type="date" name="date"/> </label><br>
<label> เวลา <input type="time" name="time"/> </label><br>
<label> ผลตรวจ <input type="text" name="test_result"/> </label><br>

<label> รหัสผลตรวจATK <select name="id_atk">
    <?php foreach($atk_List as $atk){echo "<option value=$atk->id_atk> $atk->id_atk $atk->NamePeople $atk->LastnameP</option>";}?>
</select></label><br>

<label> ชื่อเจ้าหน้าที่วิเคราะห์ <select name="id_staff_inlab">
    <?php foreach($staff_in_lab_List as $stafflab){echo "<option value=$stafflab->id_staff_inlab> $stafflab->first_name_inlab $stafflab->last_name_inlab </option>";}?>
</select></label><br>

<input type="hidden" name="controller" value = "RTPCR_test"/>
<button type="submit"name="action" value = "index"> back </button>
<button type="submit"name="action" value= "addRTPCR_test"> save </button>

</form>