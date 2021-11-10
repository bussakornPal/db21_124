<?php
class Home{

    public $totallab;
    public $totalRTPCR;
    public $id_lab;
    public $name_lab;
    public $countstaff;

    public function __construct($totallab,$totalRTPCR,$id_lab,$name_lab,$countstaff)
    {
        $this->totallab=$totallab;
        $this->totalRTPCR=$totalRTPCR;
        $this->id_lab=$id_lab;
        $this->name_lab=$name_lab;
        $this->countstaff=$countstaff;
    }
    public static function getAll()
    {
        $homeList=[];
        require("connection_database.php");
        $sql3="SELECT id_lab,name_lab,COUNT(id_staff_inlab) AS countstaff FROM staff_in_lab NATURAL JOIN laboratory GROUP BY id_lab,name_lab";
        $result3=$conn->query($sql3);
        while($my_row=$result3->fetch_assoc())
        {
            $id_lab=$my_row[id_lab];
            $name_lab=$my_row[name_lab];
            $countstaff=$my_row[countstaff];
            $homeList[]=new Home($totallab,$totalRTPCR,$id_lab,$name_lab,$countstaff);
        }
        
        require("connection_close.php");
        return $homeList;
    }
    public static function getTotalRTPCR()
    {
        
        require("connection_database.php");
        $sql="SELECT COUNT(id_RTPCR) AS totalRTPCR FROM RTPCR_test WHERE test_result='positive'";
        $result=$conn->query($sql);
        $my_row=$result->fetch_assoc();
        $totalRTPCR=$my_row[totalRTPCR];
        new Home($totallab,$totalRTPCR,$id_lab,$name_lab,$countstaff);
        require("connection_close.php");

        return new Home($totallab,$totalRTPCR,$id_lab,$name_lab,$countstaff);;
    }
    public static function getTotallab()
    {
        
        require("connection_database.php");
        $sql="SELECT COUNT(id_lab) AS totallab FROM laboratory";
        $result=$conn->query($sql);
        $my_row=$result->fetch_assoc();
        $totallab=$my_row[totallab];
        //echo $totallab;
        new Home($totallab,$totalRTPCR,$id_lab,$name_lab,$countstaff);
        require("connection_close.php");

        return new Home($totallab,$totalRTPCR,$id_lab,$name_lab,$countstaff);;
    }

}
?>