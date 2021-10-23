<?php class staff_in_lab{

    public $id_staff_inlab;
    public $first_name_inlab;
    public $last_name_inlab;
    public $phone_staff;
    public $address_staff_inlab;
    public $name_lab;
    public $id_lab;

    public function __construct($id_staff_inlab,$first_name_inlab,$last_name_inlab,$phone_staff,$address_staff_inlab,$name_lab,$id_lab)
    {
        $this->id_staff_inlab = $id_staff_inlab;
        $this->first_name_inlab = $first_name_inlab;
        $this->last_name_inlab = $last_name_inlab;
        $this->phone_staff = $phone_staff;
        $this->address_staff_inlab = $address_staff_inlab;
        $this->name_lab = $name_lab;
        $this->id_lab = $id_lab;
        
    }
    public static function get($id_staff_inlab)
    {
        require("connection_database.php");
        $sql="SELECT id_staff_inlab,first_name_inlab,last_name_inlab,phone_staff,address_staff_inlab,laboratory.name_lab,id_lab FROM staff_in_lab NATURAL JOIN laboratory WHERE id_staff_inlab='$id_staff_inlab'";
        $result=$conn->query($sql);
        $my_row=$result->fetch_assoc();
        $id_staff_inlab=$my_row[id_staff_inlab];
        $first_name_inlab=$my_row[first_name_inlab];
        $last_name_inlab=$my_row[last_name_inlab];
        $phone_staff=$my_row[phone_staff];
        $address_staff_inlab=$my_row[address_staff_inlab];
        $name_lab=$my_row[name_lab];
        $id_lab=$my_row[id_lab];
        

        require("connection_close.php");
        return new staff_in_lab($id_staff_inlab,$first_name_inlab,$last_name_inlab,$phone_staff,$address_staff_inlab,$name_lab,$id_lab);
    }
    public static function getAll()
    {
        $staffList=[];
        require("connection_database.php");
        $sql="SELECT id_staff_inlab,first_name_inlab,last_name_inlab,phone_staff,address_staff_inlab,laboratory.name_lab,id_lab FROM staff_in_lab NATURAL JOIN laboratory ";
        $result=$conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
            $id_staff_inlab=$my_row[id_staff_inlab];
            $first_name_inlab=$my_row[first_name_inlab];
            $last_name_inlab=$my_row[last_name_inlab];
            $phone_staff=$my_row[phone_staff];
            $address_staff_inlab=$my_row[address_staff_inlab];
            $name_lab=$my_row[name_lab];
            $id_lab=$my_row[id_lab];
            $staffList[]=new staff_in_lab($id_staff_inlab,$first_name_inlab,$last_name_inlab,$phone_staff,$address_staff_inlab,$name_lab,$id_lab);
        }
        require("connection_close.php");
        return $staffList;

    }
    public static function add($id_staff_inlab,$first_name_inlab,$last_name_inlab,$phone_staff,$address_staff_inlab,$id_lab)
    {   
        require("connection_database.php");
        $sql = "INSERT INTO `staff_in_lab`(`id_staff_inlab`,`first_name_inlab`,`last_name_inlab`,`phone_staff`,`address_staff_inlab`,`id_lab`)
        values('$id_staff_inlab','$first_name_inlab','$last_name_inlab','$phone_staff','$address_staff_inlab','$id_lab');";
        $result = $conn->query($sql);
        require("connection_close.php");
        return ;
    }

}