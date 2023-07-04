<?php 

require_once "../Model/image.php";
require_once "../Model/DataAccess.php";

if(isset($_POST['black']))
{
    $images =  getFilteredImage('black');
}
elseif(isset($_POST['colTrad']))
{
    $images = getFilteredImage('colTrad');
}
elseif(isset($_POST['fineline']))
{
    $images = getFilteredImage('fineline');
}
elseif(isset($_POST['illustrate']))
{
    $images = getFilteredImage('illustrate');
}
elseif(isset($_POST['showall']))
{
    $images = getAllImages();
}
else{
    $images = getAllImages();
}

require_once "../View/portfolio.php";

?>