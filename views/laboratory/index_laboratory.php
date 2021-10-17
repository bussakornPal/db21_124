<table border = 1> 
<br>new Laboratory <a href=?controller=laboratory&action=newLaboratory> click</a><br>
<tr> 
    <td>id_lab</td> <td>name_lab</td> <td>address_lab</td>
    <td>update</td> <td>delete</td> 
</tr> 

<?php foreach($laboratory_List as $lab)
{
    echo "<tr> <td>$lab->id_lab</td> 
               <td>$lab->name_lab</td> 
               <td>$lab->address_lab</td> 
               <td>update</td> 
               <td>delete</td> </tr>";
}
echo "</table>";
?>