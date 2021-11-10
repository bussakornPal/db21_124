<?php
    class PagesController
    {
        public function home()
        {   
            $homeList=Home::getAll();
            $homeList2=Home::getTotalRTPCR();
            $homeList3=Home::getTotallab();
            require_once('views/pages/home.php'); }
        public function error()
        {   require_once('views/pages/error.php'); }
    }
?>