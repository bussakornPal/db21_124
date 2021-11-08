<?php class RTPCR_Test_Controller
{
    public function index()
    {
        $RTPCR_test_List=RTPCR_test::getAll();
        require_once('./views/RTPCR_test/index_RTPCR_test.php');
    }
    public function search()
    {
        $key=$_GET['key'];
        $RTPCR_test_List=RTPCR_test::search($key);
        require_once("./views/RTPCR_test/index_RTPCR_test.php");
    }

}?>