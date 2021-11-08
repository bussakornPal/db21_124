<?php
class ATKtest{
    public $id_atk;
    public $date_atk;
    public $time_atk;
    public $resultss;
    public $id_b;
    public $id_card;
    public $NamePeople;
    public $LastnameP;
    public $id_staff_checkpoint;
    public $id_staff;
    public $first_name;
    public $last_name;

    public function __construct($id_atk,$date_atk,$time_atk,$resultss,$id_b,$id_card,$NamePeople,$LastnameP,$id_staff_checkpoint,$id_staff,$first_name,$last_name)
    {
        $this->id_atk=$id_atk;
        $this->date_atk=$date_atk;
        $this->time_atk=$time_atk;
        $this->resultss=$resultss;
        $this->id_b=$id_b;
        $this->id_card=$id_card;
        $this->NamePeople=$NamePeople;
        $this->LastnameP=$LastnameP;
        $this->id_staff_checkpoint=$id_staff_checkpoint;
        $this->id_staff=$id_staff;
        $this->first_name=$first_name;
        $this->last_name=$last_name;
    }
    public static function getAll()
    {
        $atkList =[];
        require("connection_database.php");
        $sql = "SELECT id_atk,date_atk,time_atk,results,id_b,id_card,NamePeople,LastnameP,id_staff_checkpoint,detail_of_staff_in_checkpoint.id_staff,first_name,last_name
        FROM ATKtest NATURAL JOIN Booking NATURAL JOIN People NATURAL JOIN detail_of_staff_in_checkpoint INNER JOIN staff ON detail_of_staff_in_checkpoint.id_staff=staff.id_staff
        WHERE results='positive' ";
        $result = $conn->query($sql);
        while($my_row = $result->fetch_assoc())
        {
            $id_atk = $my_row[id_atk];
            $date_atk = $my_row[date_atk];
            $time_atk = $my_row[time_atk];
            $resultss = $my_row[results];
            $id_b = $my_row[id_b];
            $id_card = $my_row[id_card];
            $NamePeople = $my_row[NamePeople];
            $LastnameP = $my_row[LastnameP];

            $id_staff_checkpoint = $my_row[id_staff_checkpoint];
            $id_staff = $my_row[detail_of_staff_in_checkpoint.id_staff];
            $first_name = $my_row[first_name];
            $last_name = $my_row[last_name];
            $atkList[] = new ATKtest($id_atk,$date_atk,$time_atk,$resultss,$id_b,$id_card,$NamePeople,$LastnameP,$id_staff_checkpoint,$id_staff,$first_name,$last_name);
        }
        require("connection_close.php");
        return $atkList;
    }
    
}