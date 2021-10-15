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
        <!--<br>[<a href="?controller=laboratory&action=index">Laboratory</a>]
        <br>[<a href="?controller=staff_in_lab&action=index">Staff in lab</a>]
        -->
        <?php require_once("./routes.php");?>
    </body>
</html>