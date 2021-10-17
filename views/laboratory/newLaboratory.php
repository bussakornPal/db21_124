<form method="get" action="">
<label> รหัสห้องปฏิบัติการ <input type="text" name="id_lab"/> </label><br>
<label> ชื่อห้องปฏิบัติการ <input type="text" name="name_lab"/> </label><br>
<label> ที่อยู่ <input type="text" name="address_lab"/> </label><br>

<input type="hidden" name="controller" value = "laboratory"/>
<button type="submit"name="action" value = "index"> back </button>
<button type="submit"name="action" value= "addLaboratory"> save </button>

</form>