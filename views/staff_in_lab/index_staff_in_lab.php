<table border = 1> 

<br>new Staff in lab <a href=?controller=staff_in_lab&action=newStaff_in_lab> click</a><br>

<tr> 
    <td>เลขประจำตัวพนักงาน</td> <td>ชื่อ</td> <td>นามสกุล</td> <td>เบอร์โทรศัพท์</td> 
    <td>ที่อยู่</td> <td>ชื่อห้องปฏิบัติการ</td> <td>รหัสห้องปฏิบัติการ</td>
    <td>update</td> <td>delete</td> 
</tr> 



<?php foreach($staff_in_lab_List as $stafflab)
{
    echo "<tr> <td>$stafflab->id_staff_inlab</td> 
               <td>$stafflab->first_name_inlab</td> 
               <td>$stafflab->last_name_inlab</td> 
               <td>$stafflab->phone_staff</td> 
               <td>$stafflab->address_staff_inlab</td> 
               <td>$stafflab->name_lab</td> 
               <td>$stafflab->id_lab</td> 

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