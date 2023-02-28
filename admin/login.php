<?php
    session_start();
    if(isset($_SESSION['login']) && $_SESSION['login'] == true){
        header("Location: index.php");
    }
    include "./../config/config.php";
    include "./../lib/Database.php";
    $db = new Database();
    $error = "";
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        $result  = $db->link->query("select * from user where email = '$email' and password = '$password'");
        if($result->num_rows > 0){
            $result = $result->fetch_assoc();
            $_SESSION['login'] = true;
            $_SESSION['username'] = $result['username'];
            $_SESSION['email'] = $result['email'];
            header("Location: index.php");
        }else{
            $error = "login failed";
        }
    }


?>


<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.neptuneapp.xyz/demo-2/ltr/auth_login_1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 Jan 2023 12:06:51 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Neptune Auth Login 1 | Neptune - Multipurpose Bootstrap Admin Dashboard Template</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico"/>
    <!-- Common Styles Starts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&amp;display=swap" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/main.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/structure.css" rel="stylesheet" type="text/css" />
    <link href="plugins/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" type="text/css" />
    <link href="plugins/highlight/styles/monokai-sublime.css" rel="stylesheet" type="text/css" />
    <!-- Common Styles Ends -->
    <!-- Common Icon Starts -->
    <link rel="stylesheet" href="../../../maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <!-- Common Icon Ends -->
    <!-- Page Level Plugin/Style Starts -->
    <link href="assets/css/loader.css" rel="stylesheet" type="text/css" />
    <link href="plugins/owl-carousel/owl.carousel.min.css" rel="stylesheet" type="text/css">
    <link href="plugins/owl-carousel/owl.theme.default.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/authentication/auth_1.css" rel="stylesheet" type="text/css">
    <!-- Page Level Plugin/Style Ends -->
</head>
<body class="login-one">
    <!-- Loader Starts -->
    <div id="load_screen">
        <div class="boxes">
            <div class="box">
                <div></div><div></div><div></div><div></div>
            </div>
            <div class="box">
                <div></div><div></div><div></div><div></div>
            </div>
            <div class="box">
                <div></div><div></div><div></div><div></div>
            </div>
            <div class="box">
                <div></div><div></div><div></div><div></div>
            </div>
        </div>
        <p class="neptune-loader-heading">Neptune</p>
    </div>
    <!--  Loader Ends -->
    <!-- Main Body Starts -->
    <div class="container-fluid login-one-container">
        <div class="p-30 h-100" >
            <div class="row main-login-one h-100">
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 p-0">
                    <form action="" method="POST">
                        <div class="login-one-start">
                            <h6 class="mt-2 text-primary text-center font-20">Log In</h6>
                            <p class="text-center text-muted mt-3 mb-3 font-14">Please Log into your account</p>
                            <p class="text-center text-danger mt-3 mb-3 font-14 "><?php echo $error; ?></p>
                            <div class="login-one-inputs mt-5">
                                <input type="email" placeholder="email" name="email"/>
                                <i class="las la-user-alt"></i>
                            </div>
                            <div class="login-one-inputs mt-3">
                                <input type="password" placeholder="Password" name="password"/>
                                <i class="las la-lock"></i>
                            </div>
                            <div class="login-one-inputs mt-4">
                                <button class="ripple-button ripple-button-primary btn-lg btn-login" type="submit">
                                    <div class="ripple-ripple js-ripple">
                                    <span class="ripple-ripple__circle"></span>
                                    </div>
                                    LOG IN
                                </button>
                            </div>
                            <div class="login-one-inputs mt-4 text-center font-12 strong">
                                <a href="auth_forget_password_1.html" class="text-primary">Forgot your Password ?</a>
                            </div>
                            <div class="login-one-inputs social-logins mt-4">
                                <div class="social-btn"><a href="#" class="fb-btn"><i class="lab la-facebook-f"></i></a></div>
                                <div class="social-btn"><a href="#" class="twitter-btn"><i class="lab la-twitter"></i>
                                </a></div>
                                <div class="social-btn"><a href="#" class="google-btn"><i class="lab la-google-plus"></i>
                                </a></div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-xl-8 col-lg-6 col-md-6 d-none d-md-block p-0">
                    <div class="slider-half">
                        <div class="slide-content">
                            <div class="top-sign-up ">
                                <div class="about-comp text-white mt-2">NeptuneWeb</div>
                                <div class="for-sign-up">
                                    <p class="text-white font-12 mt-2 font-weight-300">Don't have an account ?</p>
                                    <a href="auth_signup_1.html">Sign Up</a>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="owl-carousel owl-theme">
                                <div class="item">
                                    <i class="lar la-grin-alt font-45 text-white"></i>
                                    <h2 class="font-30 text-white mt-2">Start your journey</h2>
                                    <p class="summary-count text-white font-12 mt-2 slide-text" >Everyone has been made for some particular work, and the desire for that work has been put in every heart</p>
                                </div>
                                <div class="item">
                                    <i class="lar la-clock font-45 text-white"></i>
                                    <h2 class="font-30 text-white mt-2">Save your time</h2>
                                    <p class="summary-count text-white font-12 mt-2 slide-text" >Everyone has been made for some particular work, and the desire for that work has been put in every heart</p>
                                </div>
                                <div class="item">
                                    <i class="las la-hand-holding-usd font-45 text-white"></i>
                                    <h2 class="font-30 text-white mt-2">Save your money</h2>
                                    <p class="summary-count text-white font-12 mt-2 slide-text" >Everyone has been made for some particular work, and the desire for that work has been put in every heart</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Body Ends -->
    <!-- Page Level Plugin/Script Starts -->
    <script src="assets/js/loader.js"></script>
    <script src="assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="plugins/owl-carousel/owl.carousel.min.js"></script>
    <script src="plugins/owl-carousel/owl.carousel.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/authentication/auth_1.js"></script>
    <!-- Page Level Plugin/Script Ends -->
</body>

<!-- Mirrored from demo.neptuneapp.xyz/demo-2/ltr/auth_login_1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 Jan 2023 12:07:00 GMT -->
</html>
