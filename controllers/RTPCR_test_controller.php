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
    public function addRTPCR_test()
    {
        $id_RTPCR=$_GET['id_RTPCR'];
        $date=$_GET['date'];
        $time=$_GET['time'];
        $test_result=$_GET['test_result'];
        $id_atk=$_GET['id_atk'];
        $id_staff_inlab=$_GET['id_staff_inlab'];
        RTPCR_test::add($id_RTPCR,$date,$time,$test_result,$id_atk,$id_staff_inlab);
        RTPCR_Test_Controller::index();
    }
    public function updateForm()
    {   
        //echo "Hi";
        $id_RTPCR=$_GET['id_RTPCR'];
        $RT=RTPCR_test::get($id_RTPCR);
        $atk=ATKtest::getAll();
        $stafflab=staff_in_lab::getAll();
        require_once('./views/RTPCR_test/updateForm.php');
    }
    public function update()
    {   
        //echo "eye";
        $id_RTPCR=$_GET['id_RTPCR'];
        $date=$_GET['date'];
        $time=$_GET['time'];
        $test_result=$_GET['test_result'];
        $id_atk=$_GET['id_atk'];
        $id_staff_inlab=$_GET['id_staff_inlab'];
        $id=$_GET['id'];
        RTPCR_test::update($id_RTPCR,$date,$time,$test_result,$id_atk,$id_staff_inlab,$id);
        RTPCR_Test_Controller::index();
    }

}?>