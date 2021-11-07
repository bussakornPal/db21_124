<?php
if(isset($_GET['controller'])&&isset($_GET['action']))
{
    $controller=$_GET['controller'];
    $action = $_GET['action'];
}
else
{
    $controller='pages';
    $action='home';
}
?>

<html>
    <head></head>
    <body>
        <?php echo "controller= ".$controller.",action= ".$action;?>
        <br>[<a href="?controller=pages&action=home">Home</a>]
            [<a href="?controller=laboratory&action=index">Laboratory</a>]
            [<a href="?controller=staff_in_lab&action=index">Staff in lab</a>]
            [<a href="?controller=RTPCR_test&action=index">RT-PCR test</a>]
        
        <?php require_once("./routes.php");?>
    </body>
</html>