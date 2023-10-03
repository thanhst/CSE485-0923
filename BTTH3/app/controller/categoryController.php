<?php
require_once(APP_ROOT."/app/services/categoryService.php");
class CategoryController{
    public function index(){
        $cateService=new CategoryService();
        $cate=$cateService->getAllCategory();
        if($cate == []){
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