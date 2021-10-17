<?php class Laboratory_Controller
{
    public function index()
    {
        $laboratory_List=laboratory::getAll();
        require_once('./views/laboratory/index_laboratory.php');
    }
    
}?>