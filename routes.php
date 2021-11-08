<?php
$controllers=array('pages'=>['home','error'],'laboratory'=>['index','newLaboratory','addLaboratory','search','updateForm','update','deleteConfirm','delete'],'staff_in_lab'=>['index','newStaff_in_lab','addStaff_in_lab','search','updateForm','update','deleteConfirm','delete'],'RTPCR_test'=>['index','search']);

function call($controller,$action){
    require_once("./controllers/".$controller."_controller.php");
    switch($controller)
    {
        case "pages":    $controller = new PagesController();
                         break;
        case "laboratory":  require_once('./models/laboratoryModel.php');
                            $controller=new Laboratory_Controller();
                            break;
        case "staff_in_lab": require_once('./models/staff_in_labModel.php');
                            require_once('./models/laboratoryModel.php');
                            $controller=new Staff_In_Lab_Controller();
                            break;
        case "RTPCR_test": require_once('./models/RTPCR_testModel.php');
                            require_once('./models/ATKtestModel.php');
                            require_once('./models/staff_in_labModel.php');
                            $controller=new RTPCR_Test_Controller();
                            break;

    }
    $controller->{$action}();
}

if(array_key_exists($controller,$controllers)){

    if(in_array($action,$controllers[$controller]))

        call($controller,$action);

    else

        call('pages','error');

}

else{

    call('pages','error');

}