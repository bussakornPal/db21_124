<table border = 1> 

<tr> 
    <td>รหัสผลตรวจRTPCR</td> <td>วันที่</td> <td>เวลา</td> <td>ผลตรวจ</td> 
    <td>รหัสผลตรวจATK</td> <td>รหัสประชาชน</td> <td>ชื่อผู้ป่วย</td> <td>นามสกุลผู้ป่วย</td>
    <td>ชื่อผู้เก็บสารคัดหลั่ง</td> <td>นามสกุลผู้เก็บสารคัดหลั่ง</td>
    <td>ชื่อเจ้าหน้าที่วิเคราะห์</td> <td>นามสกุลเจ้าหน้าที่วิเคราะห์</td>

    <td>update</td> <td>delete</td> 
</tr> 

<?php foreach($RTPCR_test_List as $RT)
{
    echo "<tr> <td>$RT->id_RTPCR</td> 
               <td>$RT->date</td> 
               <td>$RT->time</td> 
               <td>$RT->test_result</td> 
               <td>$RT->id_atk</td> 
               <td>$RT->id_card</td> 
               <td>$RT->NamePeople</td> 
               <td>$RT->LastnameP</td> 
               <td>$RT->first_name</td> 
               <td>$RT->last_name</td> 
               <td>$RT->first_name_inlab</td> 
               <td>$RT->last_name_inlab</td>

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