<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url(); ?>assets/img/basic/favicon.ico" type="image/x-icon">
    <title>WE JA NG</title>
    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/app.css">
    <style>
        .loader {
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: #F5F8FA;
            z-index: 9998;
            text-align: center;
        }

        .plane-container {
            position: absolute;
            top: 50%;
            left: 50%;
        }
    </style>
</head>
<body>
<!-- Pre loader -->
<div id="loader" class="loader">
    <div class="plane-container">
        <div class="l-s-2 blink">LOADING</div>
    </div>
</div>

<div id="app" class="paper-loading">
<main class="page">
    <!-- Header -->
<nav class="mainnav navbar navbar-default justify-content-between">
    <div class="container relative">
        <a class="offcanvas dl-trigger paper-nav-toggle" data-toggle="offcanvas"
           aria-expanded="false" aria-label="Toggle navigation">
            <i></i>
        </a>
        <a class="navbar-brand" href="<?php echo base_url(); ?>index.php/Home">
            <img class="d-inline-block align-top" alt="" src="<?php echo base_url(); ?>assets/img/basic/logo.png" height="70px" widht="170">
        </a>
        <div class="paper_menu">
            <div id="dl-menu" class="xv-menuwrapper responsive-menu">
    <ul class="dl-menu align-items-center">
    <li><a href="<?php echo base_Url(); ?>index.php/Home">Home</a></li>
        <li class="parent"><a href="#">Pages</a>
            <ul class="lg-submenu">
            <li><a href="<?php echo base_url(); ?>index.php/Blog/">Post Topics</a>
                <li><a href="<?php echo base_url(); ?>index.php/topics">Topics</a>
                <li><a href="<?php echo base_url(); ?>index.php/profile">Profile</a>
                <li><a href="<?php echo base_url(); ?>index.php/changepassword">Change Password</a>
            </li>
            </ul>
        </li>
    
        <li><a href="<?php echo base_url();?>index.php/login/logout" class="btn btn-default nav-btn">Log
            Out</a>
        </li>
    </ul>
</div>
<!-- Login modal -->
        </div>
    </div>
</nav>
    <div class="search-section">
        <div class="container">
            <h1>Documentations
                <small>version: 1.0</small>
            </h1>
        </div>
    </div>
    <div class="container">

        <?php $this->load->view($content); ?>

    </div>
</main>

<?php $this->view('template/view_footer'); ?>

<!-- Login modal -->
<div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="modalLogin">
    <div class="modal-dialog width-400" role="document">
        <div class="modal-content no-r "><a href="#" data-dismiss="modal" aria-label="Close"
                                            class="paper-nav-toggle active"><i></i></a>
            <div
                    class="modal-body no-p">
                <div class="text-center p-40 p-b-0">
                    <img src="assets/img/dummy/u4.png" alt="">
                    <h3>Welcome Back</h3>
                    <p class="p-t-b-20">Hey Soldier welcome back signin now there is lot of new stuff waiting
                        for you</p>
                </div>
                <div class="light p-40 b-t-b">
                    <form action="dashboard2.html">
                        <div class="form-group has-icon"><i class="icon-envelope-o"></i>
                            <input type="text" class="form-control form-control-lg"
                                   placeholder="Email Address">
                        </div>
                        <div class="form-group has-icon"><i class="icon-user-secret"></i>
                            <input type="text" class="form-control form-control-lg"
                                   placeholder="Password">
                        </div>
                        <input type="submit" class="btn btn-primary btn-lg btn-block" value="Log In">
                        <small class="forget-pass">Have you forgot your username or password ?</small>
                    </form>
                </div>
                <div class="p-40"><a href="#" class="btn btn-lg btn-block btn-social facebook">
                    <i class="icon-facebook"></i> Login with Facebook
                </a>
                    <a href="#" class="btn btn-lg btn-block btn-social twitter">

                        <i class="icon-twitter"></i> Login with Twitter

                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- SignUp modal -->
<div class="modal fade" id="modalSignUp" tabindex="-1" role="dialog" aria-labelledby="modalSignUp">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content no-r "><a href="#" data-dismiss="modal" aria-label="Close"
                                            class="paper-nav-toggle active"><i></i></a>
            <div
                    class="modal-body no-p">
                <div class="row">
                    <div class="col-lg-5 grid">
                        <div class="p-40">
                            <h5 class="p-t-40">Sign Up Using Social Account</h5>
                            <p class="p-t-b-20">Hey Soldier welcome back signin now there is lot of new stuff waiting
                                for you</p> <a href="#" class="btn btn-lg btn-block btn-social facebook">
                            <i class="icon-facebook"></i> Login with Facebook
                        </a>
                            <a href="#" class="btn btn-lg btn-block btn-social twitter">

                                <i class="icon-twitter"></i> Login with Twitter

                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="light p-t-b-40">
                            <div class="p-40">
                                <h5 class="p-b-20">Create New User Account</h5>
                                <form action="dashboard2.html ">
                                    <div class="form-group has-icon"><i class="icon-user-circle"></i>
                                        <input type="text" class="form-control form-control-lg"
                                               placeholder="Your Name">
                                    </div>
                                    <div class="form-group has-icon"><i class="icon-envelope-o"></i>
                                        <input type="text" class="form-control form-control-lg"
                                               placeholder="Email Address">
                                    </div>
                                    <div class="form-group has-icon"><i class="icon-user-secret"></i>
                                        <input type="text" class="form-control form-control-lg"
                                               placeholder="Password">
                                    </div>
                                    <div class="form-group has-icon"><i class="icon-repeat"></i>
                                        <input type="text" class="form-control form-control-lg"
                                               placeholder="Confirm Password">
                                    </div>
                                    <input type="submit" class="btn btn-primary btn-lg btn-block" value="Sign Up Now">
                                    <p class="forget-pass">A verification email wil be sent to you</p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!--End Page page_wrrapper -->
<script src="<?php echo base_url()?>assets/js/app.js"></script>

</body>
</html>