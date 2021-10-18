<table border = 1> 
<br>new Laboratory <a href=?controller=laboratory&action=newLaboratory> click</a><br>
<tr> 
    <td>รหัสห้องปฏิบัติการ</td> <td>ชื่อห้องปฏิบัติการ</td> <td>ที่อยู่</td>
    <td>update</td> <td>delete</td> 
</tr> 

<form method="get" action="">
        <input type="text" name="key">
        <input type="hidden" name="controller" value="laboratory">
        <button type="submit" name="action" value="search">
search</button>
</form>

<?php foreach($laboratory_List as $lab)
{
    echo "<tr> <td>$lab->id_lab</td> 
               <td>$lab->name_lab</td> 
               <td>$lab->address_lab</td> 
               <td>
               <a href=?controller=laboratory&action=updateForm&id_lab=$lab->id_lab>update</a>
               </td> 
               <td>
               <a href=?controller=laboratory&action=deleteConfirm&id_lab=$lab->id_lab>delete
               </td> 
            </tr>";
}
echo "</table>";
?>