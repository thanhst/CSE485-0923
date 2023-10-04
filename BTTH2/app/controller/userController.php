<?php
require_once(APP_ROOT . "/app/services/userService.php");
class UserController
{
    public function index()
    {
        $userService = new UserService();
        $user = $userService->getAllUser();
        if ($user == []) {
            require_once(APP_ROOT . "/app/views/Error/index.php");
        } else {
            require_once(APP_ROOT . "/app/views/home/index.php");
        }
    }
    public function login()
    {
        require_once(APP_ROOT . "/app/views/login/index.php");
    }
    public function postLogin()
    {
        if (isset($_POST["Username"]) && isset($_POST["Password"])) {
            $username = rtrim($_POST["Username"]);
            $password = rtrim($_POST["Password"]);
            $userService = new UserService();
            $check = $userService->checkPassword($username, $password);
            $user = $userService->getUser($username);
            if ($check) {
                session_start();
                $_SESSION['isLogin'] = $user->getUsername();
                $state= $userService->getUser($username);
                if($state->getState()=="inactive")
                {
                    $type="check";
                    $code=$this->generateCode();
                    $body="Mã xác thực của bạn là : $code";
                    $_SESSION['verification_code']= $code;
                    $this->sendMail($state->getEmail(),$body,$type);
                }
                else 
                    header("Location:" . DOMAIN . "/public/index.php?controller=synthetic&action=index");
                // require_once(APP_ROOT . "/public/index.php?controller=trangchu");
            } else {
                $urls = APP_ROOT . '/app/views/login/index.php';
                require_once("$urls");
                $errorMsg = "Tên người dùng hoặc mật khẩu không chính xác.";
                echo  $errorMsg;
            }
        }
    }
    public function signUp()
    {
        if (isset($_POST["username"]) && isset($_POST["password"]) && isset($_POST["email"]) && isset($_POST["role"])) {
            $username = rtrim($_POST["username"]);
            $password = rtrim($_POST["password"]);
            $email = rtrim($_POST["email"]);
            $role = rtrim($_POST["role"]);
            $userService = new UserService();
            $user = $userService->signUp($username, $password, $email, $role);
            if ($user) {
                header("Location:" . DOMAIN . "/public/index.php?controller=user&action=login");
            } else {
                $urls = APP_ROOT . '/app/views/login/index.php';
                require_once("$urls");
                $errorMsg = "Đăng ký thất bại";
                echo  $errorMsg;
            }
        } else {
            $userService = new UserService();
            $roles = $userService->getAllRole();
            require_once(APP_ROOT . "/app/views/login/signUp.php");
        }
    }

    public function signUpForm()
    {
        $userService = new UserService();
        $roles = $userService->getAllRole();
        require_once(APP_ROOT . "/app/views/login/signUp.php");
    }
    public function generateCode()
    {
        $code = "";
        $characters = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
        for ($i = 0; $i < 7; $i++) {
            $randCode = random_int(0, strlen($characters) - 1);
            $code .= $characters[$randCode];
        }
        return $code;
    }
    public function forgetForm()
    {
        require_once(APP_ROOT . "/app/views/login/forgetPassword.php");
    }
    public function sendMail($email,$body,$type)
    {
        $mailGet = $email;
        $bodyContent = $body;
        $typeCheck = $type;
        include(APP_ROOT . "/app/views/support/sendMail.php");
    }
    public function forget()
    {
        if (isset($_POST["usernameOrEmail"])) {
            $checkEmail = rtrim($_POST["usernameOrEmail"]);
            $userService = new UserService();
            $user = $userService->getEmailUser($checkEmail);
            $email = $user->getEmail();
            if ($user) {
                $code = $this->generateCode();
                $userNew = $userService->setPassword($user->getUsername(), $user->getEmail(), $code);
                if ($userNew) {
                    $body = "Mật khẩu mới của bạn là : $code";
                    $type="forget";
                    $this->sendMail($email, $body,$type);
                } else {
                    header("Location:" . DOMAIN . "/public/index.php?controller=user&action=login");
                }
            }
        }
    }
    public function nofication()
    {
        if (isset($_GET["type"]) && $_GET["type"] == "forget")
        {
            $contentText = "<p>Chúng tôi đã gửi lại mật khẩu vào cho bạn!</p>
            <b>Hãy kiểm tra lại email của mình!</b>
            <p>Tuyệt đối không được chia sẻ mật khẩu này cho bất cứ ai ! Xin cảm ơn bạn</p>";
            require_once(APP_ROOT . "/app/views/login/nofication.php");
        }
        else{
            $contentText = "Thư đã được gửi cho bạn nhé !! Check mail giúp mình nha :3";
            require_once(APP_ROOT . "/app/views/login/nofication.php");
        }
    }
    public function security()
    {
        require_once(APP_ROOT . "/app/views/login/security.php");
    }
    public function checkSercurity()
    {
        session_start();
        if(isset($_POST["checkCode"]))
        {
            if(isset($_SESSION["verification_code"]))
            {
                if($_POST["checkCode"]==$_SESSION["verification_code"])
                {
                    $userService= new UserService();
                    $user = $userService->setSecurity($_SESSION["isLogin"]);
                    if($user)
                    {
                        header("Location:" . DOMAIN . "/public/index.php?controller=synthetic&action=index");
                    }
                    else{
                        header("Location:".DOMAIN."/public/index.php?controller=user&action=login");
                    }
                }
                else{
                    require(APP_ROOT."/app/views/login/security.php");
                    echo "Lỗi do bạn đang nhập sai , làm ơn check mail kìa";
                }
            }
            else{
                header("Location:".DOMAIN."/public/index.php?controller=user&action=login");
            }
        }
    }
}
class ErrorController
{
    public function index()
    {
        require_once(APP_ROOT . "/app/views/error/index.php");
    }
}
