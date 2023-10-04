<?php
require_once(APP_ROOT."/app/services/userService.php");
class CategoryController{
    public function index(){
        $userService=new UserService();
        $user=$userService->getAllUser();
        if($user == []){
            require_once(APP_ROOT."/app/views/Error/index.php");
        }
        else{
            require_once(APP_ROOT."/app/views/home/index.php");
        }
    }
}
class ErrorController{
    public function index(){
        require_once(APP_ROOT."/app/views/error/index.php");
    }
}