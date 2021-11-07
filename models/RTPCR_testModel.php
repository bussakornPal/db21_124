<?php
class RTPCR_test{
    public $id_RTPCR;
    public $date;
    public $time;
    public $test_result;
    public $id_atk;
    public $id_staff_inlab;

    public $id_card;
    public $NamePeople;
    public $LastnameP;
    public $first_name;
    public $last_name;
    public $first_name_inlab;
    public $last_name_inlab;

    public function __construct($id_RTPCR,$date,$time,$test_result,$id_atk,$id_card,$NamePeople,$LastnameP,$first_name,$last_name,$id_staff_inlab,$first_name_inlab,$last_name_inlab)
    {
        $this->id_RTPCR=$id_RTPCR;
        $this->date=$date;
        $this->time=$time;
        $this->test_result=$test_result;
        $this->id_atk=$id_atk;
        $this->id_card=$id_card;
        $this->NamePeople=$NamePeople;
        $this->LastnameP=$LastnameP;
        $this->first_name=$first_name;
        $this->last_name=$last_name;

        $this->id_staff_inlab=$id_staff_inlab;
        $this->first_name_inlab=$first_name_inlab;
        $this->last_name_inlab=$last_name_inlab;

    }

    public  static function getAll()
    {
        $RTPCRList=[];
        require("connection_database.php");
        $sql="SELECT id_RTPCR,date,time,test_result,id_atk,id_card,NamePeople,LastnameP,first_name,last_name,id_staff_inlab,first_name_inlab,last_name_inlab
        FROM RTPCR_test NATURAL JOIN ATKtest NATURAL JOIN Booking NATURAL JOIN People NATURAL JOIN detail_of_staff_in_checkpoint NATURAL JOIN staff_in_lab INNER JOIN staff ON staff.id_staff=detail_of_staff_in_checkpoint.id_staff";
        $result=$conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
            $id_RTPCR=$my_row[id_RTPCR];
            $date=$my_row[date];
            $time=$my_row[time];
            $test_result=$my_row[test_result];
            $id_atk=$my_row[id_atk];
            $id_card=$my_row[id_card];
            $NamePeople=$my_row[NamePeople];
            $LastnameP=$my_row[LastnameP];
            $first_name=$my_row[first_name];
            $last_name=$my_row[last_name];

            $id_staff_inlab=$my_row[id_staff_inlab];
            $first_name_inlab=$my_row[first_name_inlab];
            $last_name_inlab=$my_row[last_name_inlab];

            $RTPCRList[]=new RTPCR_test($id_RTPCR,$date,$time,$test_result,$id_atk,$id_card,$NamePeople,$LastnameP,$first_name,$last_name,$id_staff_inlab,$first_name_inlab,$last_name_inlab);
        }
        require("connection_close.php");
        return $RTPCRList;
    }

    

}