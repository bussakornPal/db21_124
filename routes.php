<?php
$controllers=array('pages'=>['home','error'],'laboratory'=>['index','newLaboratory','addLaboratory','search','updateForm','update']);

function call($controller,$action){
    require_once("./controllers/".$controller."_controller.php");
    switch($controller)
    {
        case "pages":    $controller = new PagesController();
                         break;
        case "laboratory":  require_once('./models/laboratoryModel.php');
                            $controller=new Laboratory_Controller();
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