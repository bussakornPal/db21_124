<p> Welcome to our homepage <br></p>

<p> จำนวนผู้มีผลตรวจ RTPCR เป็นบวก = <?php echo "$homeList2->totalRTPCR"?></p>
<p> จำนวนห้องปฏิบัติการ = <?php echo "$homeList3->totallab"?></p>

<p> จำนวนพนักงานในแต่ละห้องปฏิบัติการ </p>
<table border ="1">
    <tr> <td> รหัสห้องปฏิบัติการ </td> <td> ชื่อห้องปฏิบัติการ </td> <td> จำนวนพนักงาน </td> 
    <?php foreach($homeList as $h)
    {
        echo "<tr> <td> $h->id_lab  </td> <td> $h->name_lab  </td> <td> $h->countstaff  </td> </tr>";
    }

    echo "</table>";
    ?>