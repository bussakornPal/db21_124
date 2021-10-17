<?php
class laboratory{
    public $id_lab;
    public $name_lab;
    public $address_lab;

    public function __construct($id_lab,$name_lab,$address_lab)
    {
        $this->id_lab=$id_lab;
        $this->name_lab=$name_lab;
        $this->address_lab=$address_lab;
    }

    public static function get($id_lab)
    {
        require("connection_database.php");
        $sql="SELECT * FROM laboratory WHERE id_lab='$id_lab'";
        $result=$conn->query($sql);
        $my_row=$result->fetch_assoc();
        $id_lab=$my_row[id_lab];
        $name_lab=$my_row[name_lab];
        $address_lab=$my_row[address_lab];
        require("connection_close.php");

        return new laboratory($id_lab,$name_lab,$address_lab);
    }

    public  static function getAll()
    {
        $labList=[];
        require("connection_database.php");
        $sql="SELECT * FROM laboratory";
        $result=$conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
            $id_lab=$my_row[id_lab];
            $name_lab=$my_row[name_lab];
            $address_lab=$my_row[address_lab];
            $labList[]=new laboratory($id_lab,$name_lab,$address_lab);
        }
        require("connection_close.php");
        return $labList;
    }

}