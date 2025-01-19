<?php
require_once 'includes/auth.class.php';

$auth = new Auth($db);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = htmlspecialchars($_POST['mobile']);
    $password = htmlspecialchars($_POST['password']);

    if ($auth->login($username, $password)) {
        header("Location: dashboard.php");
        exit;
    } else {
        $error = "Invalid username or password!";
    }
}
?>


<!DOCTYPE html>
<html class="theme-dark" lang="zxx">

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <title><?php echo getConfig('APP_NAME'); ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <meta name="wap-font-scale" content="no">
    <link rel="stylesheet" href="theme/static/home/css/app.css">
    <link rel="stylesheet" href="theme/static/home/css/iconfont.css">
    <link rel="stylesheet" href="theme/static/home/css/login.css">
    <script type="text/javascript" src="theme/static/home/layui/layui.js"></script>
</head>

<body class="login-content">
    <div class="login-top">
        <div class="login_bj">
            <img src="theme/Images/logo-white.png" style="width: 175px;">
        </div>
    </div>
    <div class="login_con">
        <form method="post" action="#" id="ctl00">
            <?php echo isset($error) ? $error : '';?>
            <div class="login_title" style="width: 100%; height: 20px;"></div>
            <div class="login_input">
                <div class="login_input_text">
                    <img src="theme/static/home/img/from_3.png">
                </div>
                <div class="login_input_t">
                    <div class="login-input-wrapper">
                        <input name="mobile" type="text" id="txtUserName" class="login-input-input"
                            placeholder="please enter mobile..." />
                    </div>
                </div>
            </div>
            <div class="login_input">
                <div class="login_input_text">
                    <img src="theme/static/home/img/from_2.png">
                </div>
                <div class="login_input_t">
                    <div class="uni-input-wrapper">
                        <input name="password" type="password" id="txtPassword" class="login-input-input"
                            placeholder="please enter password..." />
                    </div>
                </div>
            </div>
            <input type="submit" name="btnLogin" value="Log In" id="btnLogin" class="login_btn" />

            <div class="reg">
                <a class="reg-l" href="forgot.php">Forgot Password?</a>
                <a class="reg-r" href="register.php">Register Account</a>
            </div>
        </form>
    </div>
</body>

</html>