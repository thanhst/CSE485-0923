<?php
require_once(APP_ROOT . "/app/services/userService.php");
require_once(APP_ROOT . "/app/services/postService.php");
require_once(APP_ROOT . "/app/services/categoryService.php");
require_once(APP_ROOT . "/app/services/authorService.php");

class SyntheticController{
    public function index(){
        session_start();
        if(isset($_SESSION["isLogin"])){
            $UserService=new UserService();
            $user=$UserService->getCountUser();
            $PostService=new PostService();
            $post=$PostService->getCountPost();
            $CategoryService=new CategoryService();
            $category=$CategoryService->getCountCategory();
            $AuthorService=new authorService();
            $author=$AuthorService->getCountAuthor();
            require_once(APP_ROOT . "/app/views/homePage/index.php");
        }
        else{
            header("Location:".DOMAIN."/public/index.php");
        }
    }
}