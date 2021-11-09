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

    public $id_lab;
    public $name_lab;

    public function __construct($id_RTPCR,$date,$time,$test_result,$id_atk,$id_card,$NamePeople,$LastnameP,$first_name,$last_name,$id_staff_inlab,$first_name_inlab,$last_name_inlab,$id_lab,$name_lab)
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

        $this->id_lab=$id_lab;
        $this->name_lab=$name_lab;

    }

    public  static function getAll()
    {
        $RTPCRList=[];
        require("connection_database.php");
        $sql="SELECT id_RTPCR,date,time,test_result,id_atk,id_card,NamePeople,LastnameP,first_name,last_name,id_staff_inlab,first_name_inlab,last_name_inlab,id_lab,name_lab
        FROM RTPCR_test NATURAL JOIN ATKtest NATURAL JOIN Booking NATURAL JOIN People NATURAL JOIN detail_of_staff_in_checkpoint NATURAL JOIN staff_in_lab NATURAL JOIN laboratory INNER JOIN staff ON staff.id_staff=detail_of_staff_in_checkpoint.id_staff";
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

            $id_lab=$my_row[id_lab];
            $name_lab=$my_row[name_lab];

            $RTPCRList[]=new RTPCR_test($id_RTPCR,$date,$time,$test_result,$id_atk,$id_card,$NamePeople,$LastnameP,$first_name,$last_name,$id_staff_inlab,$first_name_inlab,$last_name_inlab,$id_lab,$name_lab);
        }
        require("connection_close.php");
        return $RTPCRList;
    }
    public  static function get($id_RTPCR)
    {
        require("connection_database.php");
        $sql="SELECT id_RTPCR,date,time,test_result,id_atk,id_card,NamePeople,LastnameP,first_name,last_name,id_staff_inlab,first_name_inlab,last_name_inlab,id_lab,name_lab
        FROM RTPCR_test NATURAL JOIN ATKtest NATURAL JOIN Booking NATURAL JOIN People NATURAL JOIN detail_of_staff_in_checkpoint NATURAL JOIN staff_in_lab NATURAL JOIN laboratory INNER JOIN staff ON staff.id_staff=detail_of_staff_in_checkpoint.id_staff WHERE id_RTPCR='$id_RTPCR'";
        $result=$conn->query($sql);
        $my_row=$result->fetch_assoc();
            
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

        $id_lab=$my_row[id_lab];
        $name_lab=$my_row[name_lab];

        require("connection_close.php");
        return new RTPCR_test($id_RTPCR,$date,$time,$test_result,$id_atk,$id_card,$NamePeople,$LastnameP,$first_name,$last_name,$id_staff_inlab,$first_name_inlab,$last_name_inlab,$id_lab,$name_lab);;
    }
    public static function search($key)
    {
        $RTPCRList=[];
        require("connection_database.php");
        $sql="SELECT id_RTPCR,date,time,test_result,id_atk,id_card,NamePeople,LastnameP,first_name,last_name,id_staff_inlab,first_name_inlab,last_name_inlab,id_lab,name_lab
        FROM RTPCR_test NATURAL JOIN ATKtest NATURAL JOIN Booking NATURAL JOIN People NATURAL JOIN detail_of_staff_in_checkpoint NATURAL JOIN staff_in_lab NATURAL JOIN laboratory INNER JOIN staff ON staff.id_staff=detail_of_staff_in_checkpoint.id_staff 
            WHERE (id_RTPCR like'%$key%' or date like'%$key%' or time like'%$key%' or test_result like'%$key%' or id_atk like'%$key%' or id_card like'%$key%' or NamePeople like'%$key%' or LastnameP like'%$key%' or first_name like'%$key%' or last_name like'%$key%'
            or id_staff_inlab like'%$key%' or first_name_inlab like'%$key%' or last_name_inlab like'%$key%' or id_lab like'%$key%' or name_lab like'%$key%') ";
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

            $id_lab=$my_row[id_lab];
            $name_lab=$my_row[name_lab];

            $RTPCRList[]=new RTPCR_test($id_RTPCR,$date,$time,$test_result,$id_atk,$id_card,$NamePeople,$LastnameP,$first_name,$last_name,$id_staff_inlab,$first_name_inlab,$last_name_inlab,$id_lab,$name_lab);
        }
        require("connection_close.php");
        return $RTPCRList;
    
    }
    public static function add($id_RTPCR,$date,$time,$test_result,$id_atk,$id_staff_inlab)
    {   
        require("connection_database.php");
        $sql = "INSERT INTO `RTPCR_test`(`id_RTPCR`, `date`, `time`, `test_result`, `id_atk`, `id_staff_inlab`) VALUES ('$id_RTPCR','$date','$time','$test_result','$id_atk','$id_staff_inlab')";
        $result = $conn->query($sql);
        require("connection_close.php");
        return ;
    }
    public static function update($id_RTPCR,$date,$time,$test_result,$id_atk,$id_staff_inlab,$id)
    {
        //echo $id_RTPCR,$date,$time,$test_result,$id_atk,$id_staff_inlab,$id;
        require("connection_database.php");
        $sql="UPDATE `RTPCR_test` SET `id_RTPCR`='$id_RTPCR',`date`='$date',`time`='$time',`test_result`='$test_result',`id_atk`='$id_atk',`id_staff_inlab`='$id_staff_inlab' WHERE id_RTPCR = '$id'";
        $result=$conn->query($sql);
        require("connection_close.php");
        return ;

    }


    

}