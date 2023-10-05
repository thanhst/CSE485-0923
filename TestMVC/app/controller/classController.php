<?php
include(APP_ROOT."/app/service/classService.php");
class ClassController{
    public function index(){
        $classService=new ClassService();
        $allClass=$classService->getAllClass();
        require(APP_ROOT."/app/view/class/index.php");
    }
    public function addForm(){
        require(APP_ROOT."/app/view/class/add.php");
    }
    public function add(){
        if(isset($_POST["nameClass"])){
        {
            $nameClass=rtrim($_POST["nameClass"]);
            $classService=new ClassService();
            $classAdd=$classService->addClass($nameClass);
            if($classAdd)
            {
                header("Location:".DOMAIN."/public/index.php?controller=class&action=index");
            }
            else{
                $classService=new ClassService();
                $allClass=$classService->getAllClass();
                require(APP_ROOT."/app/view/class/index.php");
                echo "Thêm thất bại";
            }
        
        }
        }
    }
    public function delete(){
        if(isset($_GET["id"])){
            $id=($_GET["id"]);
            $classService=new ClassService();
            $delete=$classService->delete($id);
            if($delete)
            {
                header("Location:".DOMAIN."/public/index.php?controller=class&action=index");
            }
            else{
                require(APP_ROOT."/app/view/class/index");
                echo "Xóa thất bại";
            }
        }
        else{
            header("Location:".DOMAIN."/public/index.php?controller=class&action=index");
        }
    }
}
