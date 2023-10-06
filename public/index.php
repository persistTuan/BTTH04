<?php

$controller = isset($_GET['controller'])?ucfirst((string)$_GET['controller']) : 'HomeController';
$action = isset($_GET['action'])?$_GET['action'] : 'index';
// echo "$controller - $action";
if($controller == 'HomeController'){
    include_once "{$_SERVER['DOCUMENT_ROOT']}/BTTH04/app/controllers/HomeController.php";
    
    $homeController = new $controller();
    $homeController->$action();
}
else if ($controller == "AdminController"){
    include_once "{$_SERVER['DOCUMENT_ROOT']}/BTTH04/app/controllers/AdminController.php";
    $adminController = new $controller();
    $adminController->$action();
}
else{
    echo "Error không tồn tại url";
}

?>