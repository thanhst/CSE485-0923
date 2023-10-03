<?php
require_once(APP_ROOT."/app/services/studentService.php");
class StudentController{
    public function index(){
        $postService=new PostService();
        $post=$postService->getAllPost();
        if($post == []){
            require_once(APP_ROOT."/app/views/Error/index.php");
        }
        else{
            require_once(APP_ROOT."/app/views/post/index.php"); 
        }
    }
    public function add(){
        if(isset($_POST["tenbaihat"])&&isset($_POST["casi"])&&isset($_POST["idtheloai"])){
            $tenbaihat=trim($_POST["tenbaihat"]);
            $casi=trim($_POST["casi"]);
            $idtheloai=trim($_POST["idtheloai"]);
            $postService=new PostService();
            $post=$postService->addPost($tenbaihat, $casi, $idtheloai);
            if($post == []){
                require_once(APP_ROOT."/app/views/Error/index.php");
            }
            else{
                require_once(APP_ROOT."/app/views/post/index.php");
            }
        }
        else{
            require_once(APP_ROOT."/app/views/post/add.php");
        }
    }
    public function formAdd(){
        require_once(APP_ROOT."/app/views/post/add.php");
    }
}
class ErrorController{
    public function index(){
        require_once(APP_ROOT."/app/views/error/index.php");
    }
}