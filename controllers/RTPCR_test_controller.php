<?php class RTPCR_Test_Controller
{
    public function index()
    {
        $RTPCR_test_List=RTPCR_test::getAll();
        require_once('./views/RTPCR_test/index_RTPCR_test.php');
    }
}?>