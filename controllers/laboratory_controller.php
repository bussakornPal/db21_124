<?php class Laboratory_Controller
{
    public function index()
    {
        $laboratory_List=laboratory::getAll();
        require_once('./views/laboratory/index_laboratory.php');
    }
    public function newLaboratory()
    {
        //echo "hi";
        require_once('./views/laboratory/newLaboratory.php');
    }

    public function addLaboratory()
    {
        $id_lab=$_GET['id_lab'];
        $name_lab=$_GET['name_lab'];
        $address_lab=$_GET['address_lab'];
        laboratory::add($id_lab,$name_lab,$address_lab);
        Laboratory_Controller::index();
    }
    public function search()
    {
        //echo "eieie";
        $key=$_GET['key'];
        $laboratory_List=laboratory::search($key);
        require_once("./views/laboratory/index_laboratory.php");
    }
    public function updateForm()
    {
        $id_lab=$_GET['id_lab'];
        $lab=laboratory::get($id_lab);
        require_once('./views/laboratory/updateForm.php');
    }
    public function update()
    {   //echo "eieie";
        $id_lab=$_GET['id_lab'];
        $name_lab=$_GET['name_lab'];
        $address_lab=$_GET['address_lab'];
        $id=$_GET['id'];
        laboratory::update($id_lab,$name_lab,$address_lab,$id);
        Laboratory_Controller::index();
    }

}?>