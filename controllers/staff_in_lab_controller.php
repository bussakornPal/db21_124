<?php class Staff_In_Lab_Controller
{
    public function index()
    {
        $staff_in_lab_List=staff_in_lab::getAll();
        require_once('./views/staff_in_lab/index_staff_in_lab.php');
    }
}
?>