<?php
include("../app/config/config.php");
if(isset($_GET["controller"])&& isset($_GET["action"])){// kiểm tra xem có controller với action ở trên URL không ?
    $controller=$_GET["controller"];// Có rồi thì gán giá trị của controller và action cho $controller và $action
    $action=$_GET["action"];
    $controller=$controller."Controller";// .Controller này là ghép chuỗi , tạo ra cái tên file trong controller
    $path=APP_ROOT."/app/controller/".$controller.".php";//Lấy path của file hiện tại;
    if(file_exists($path)){
        include($path);
        $controller=ucfirst($controller);// Viết hoa chữ đầu lên để biến $controller thành tên của class. Ví dụ là : ClassController trong file classController.php
        $controllerClass=new $controller;// Tạo ra đối tượng class $controller mới , ví dụ là new ClassController();
        if(method_exists($controllerClass, $action)){// kiểm tra xem có tồn tại function $action không ? Ví dụ $action=index,thì kiểm tra xem index có trong ClassController
            $controllerClass->$action();//Có thì gọi ra cái $action đó.
        }
        else{
            $controllerClass->index();//Không có thì mặc định là gọi index()
        }
    }
    else{
        include(APP_ROOT."/app/controller/classController.php");
        $homeController=new ClassController();
        $homeController->index();
    }
}
else{
    include(APP_ROOT."/app/controller/classController.php");
    $homeController=new ClassController();
    $homeController->index();
}
?>