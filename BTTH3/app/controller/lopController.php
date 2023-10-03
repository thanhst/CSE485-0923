<?php
require_once(APP_ROOT."/app/services/classService.php");
class ClassController{
    public function index(){
        $classService=new ClassService();
        $class=$classService->getAllCategory();
        if($class == []){
            require_once(APP_ROOT."/app/views/Error/index.php");
        }
        else{
            require_once(APP_ROOT."/app/views/category/index.php");
        }
    }
}
class ErrorController{
    public function index(){
        require_once(APP_ROOT."/app/views/error/index.php");
    }
}