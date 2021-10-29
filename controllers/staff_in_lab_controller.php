<?php class Staff_In_Lab_Controller
{
    public function index()
    {
        $staff_in_lab_List=staff_in_lab::getAll();
        require_once('./views/staff_in_lab/index_staff_in_lab.php');
    }
    public function newStaff_in_lab()
    {
        $laboratory_List=laboratory::getAll();
        require_once('./views/staff_in_lab/newStaff_in_lab.php');
    }
    public function addStaff_in_lab()
    {
        $id_staff_inlab=$_GET['id_staff_inlab'];
        $first_name_inlab=$_GET['first_name_inlab'];
        $last_name_inlab=$_GET['last_name_inlab'];
        $phone_staff=$_GET['phone_staff'];
        $address_staff_inlab=$_GET['address_staff_inlab'];
        $id_lab=$_GET['id_lab'];
        staff_in_lab::add($id_staff_inlab,$first_name_inlab,$last_name_inlab,$phone_staff,$address_staff_inlab,$id_lab);
        Staff_In_Lab_Controller::index();
    }
    public function search()
    {
        $key=$_GET['key'];
        $staff_in_lab_List=staff_in_lab::search($key);
        require_once("./views/staff_in_lab/index_staff_in_lab.php");
    }
    public function updateForm()
    {
        $id_staff_inlab=$_GET['id_staff_inlab'];
        $stafflab=staff_in_lab::get($id_staff_inlab);
        $lab=laboratory::getAll();
        require_once('./views/staff_in_lab/updateForm.php');
    }
    public function update()
    {   
        $id_staff_inlab=$_GET['id_staff_inlab'];
        $first_name_inlab=$_GET['first_name_inlab'];
        $last_name_inlab=$_GET['last_name_inlab'];
        $phone_staff=$_GET['phone_staff'];
        $address_staff_inlab=$_GET['address_staff_inlab'];
        $id_lab=$_GET['id_lab'];
        $id=$_GET['id'];
        staff_in_lab::update($id_staff_inlab,$first_name_inlab,$last_name_inlab,$phone_staff,$address_staff_inlab,$id_lab,$id);
        Staff_In_Lab_Controller::index();
    }
    public function deleteConfirm()
    {
        $id=$_GET['id_staff_inlab'];
        $stafflab=staff_in_lab::get($id);
        require_once('./views/staff_in_lab/deleteConfirm.php');
    }
}
?>