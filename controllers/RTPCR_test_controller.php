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
    public function newRTPCR_test()
    {
        $atk_List=ATKtest::getAll();
        $staff_in_lab_List=staff_in_lab::getAll();
        require_once('./views/RTPCR_test/newRTPCR_test.php');
    }

}?>