<table border = 1> 

<br>new RT-PCR Test <a href=?controller=RTPCR_test&action=newRTPCR_test> click</a><br>

<tr> 
    <td>รหัสผลตรวจRTPCR</td> <td>วันที่</td> <td>เวลา</td> 
    <td>รหัสประชาชน</td> <td>ชื่อผู้ป่วย</td> <td>นามสกุลผู้ป่วย</td>
    <td>ผลตรวจ</td> <td>รหัสผลตรวจATK</td> 
    <td>ชื่อผู้เก็บสารคัดหลั่ง</td> <td>นามสกุลผู้เก็บสารคัดหลั่ง</td>
    <td>ชื่อเจ้าหน้าที่วิเคราะห์</td> <td>นามสกุลเจ้าหน้าที่วิเคราะห์</td>
    <td>รหัสห้องปฏิบัติการ</td> <td>ชื่อห้องปฏิบัติการ</td>

    <td>update</td> <td>delete</td> 
</tr> 


<form method="get" action="">
        <input type="text" name="key">
        <input type="hidden" name="controller" value="RTPCR_test">
        <button type="submit" name="action" value="search">
search</button>
</form>


<?php foreach($RTPCR_test_List as $RT)
{
    echo "<tr> <td>$RT->id_RTPCR</td> 
               <td>$RT->date</td> 
               <td>$RT->time</td> 
               
               <td>$RT->id_card</td> 
               <td>$RT->NamePeople</td> 
               <td>$RT->LastnameP</td>
                <td>$RT->test_result</td> 
                <td>$RT->id_atk</td>
               <td>$RT->first_name</td> 
               <td>$RT->last_name</td> 
               <td>$RT->first_name_inlab</td> 
               <td>$RT->last_name_inlab</td>
               <td>$RT->id_lab</td>
               <td>$RT->name_lab</td>

               <td>
               update
               </td> 
               <td>
               delete
               </td> 
            </tr>";
}
echo "</table>";
?>