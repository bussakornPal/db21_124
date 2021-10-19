<?php class staff_in_lab{

    public $id_staff_inlab;
    public $first_name_inlab;
    public $last_name_inlab;
    public $phone_staff;
    public $address_staff;
    public $id_lab;
    public $name_lab;

    public function __construct($id_staff_inlab,$first_name_inlab,$last_name_inlab,$phone_staff,$address_staff,$id_lab,$name_lab)
    {
        $this->id_staff_inlab = $id_staff_inlab;
        $this->first_name_inlab = $first_name_inlab;
        $this->last_name_inlab = $last_name_inlab;
        $this->phone_staff = $phone_staff;
        $this->address_staff = $address_staff;
        $this->id_lab = $id_lab;
        $this->name_lab = $name_lab;
    }

}