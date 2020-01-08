<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url() ?>/assets/img/basic/favicon.ico" type="image/x-icon">
    <title>WE JA NG</title>
    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/app.css">
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
<!-- Header -->
<nav class="mainnav navbar navbar-default justify-content-between">
    <div class="container relative">
        <a class="offcanvas dl-trigger paper-nav-toggle" data-toggle="offcanvas"
           aria-expanded="false" aria-label="Toggle navigation">
            <i></i>
        </a>
        <a class="navbar-brand" href="<?php echo base_url(); ?>index.php/login">
            <img class="d-inline-block align-top" alt="" src="<?php echo base_url(); ?>/assets/img/basic/logo.png" height="70px" widht="170">
        </a>
        <div class="paper_menu">
            <div id="dl-menu" class="xv-menuwrapper responsive-menu">
    <ul class="dl-menu align-items-center">
        <li class="parent"><a href="#">Help</a>
            <ul class="lg-submenu" style="width: 300px">
                <li class="p-0">
                    <div class="p-4">
                        <div class="my-3">
                            <a href="#">
                                <div class="media">
                                    <i class="icon-circle-o w-20 s-36 text-primary"></i>
                                    <div class="media-body">
                                        <span class="mt-0 mb-0 font-weight-normal s-12">Helpdesk<br></span>
                                        <span class="s-12">Slack</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="my-3">
                            <a href="#">
                                <div class="media">
                                    <i class="icon-circle-o w-20 s-36 text-warning"></i>
                                    <div class="media-body">
                                        <span class="mt-0 mb-0 font-weight-normal s-12">Helpdesk@go-jek.com<br></span>
                                        <span class="s-12">Email</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        
                    </div>
                    <div class="light p-5">
                        <h6>WEJANG</h6>
                        <p>
                        WEJANG in Javanese means guide and WEJANG is an application for documentation about problem solving our issues on IT Infrastructure Team
                        </p>
                        
                    </div>
                </li>
            </ul>
        </li>
        
        <li><a href="<?php echo base_url(); ?>index.php/register" class="btn btn-default nav-btn">Sign Up</a>
        </li>
    </ul>
</div>
<!-- Login modal -->
        </div>
    </div>
</nav>
<div class="light b-t">
    <?php $this->load->view($content); ?>
    <!-- #primary -->
</div>

<?php $this->view('template/view_footer') ;?>


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
                    
            </div>
        </div>
    </div>
</div>
</div>
<!--End Page page_wrrapper -->
<script src="<?php echo base_url() ?>assets/js/app.js"></script>

</body>
</html>