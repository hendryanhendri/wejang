<div id="primary" class="content-area"
         data-bg-possition="center"
         data-bg-repeat="false"
         style="background: url('<?php echo base_url(); ?>assets/img/icon/icon-circles.png');">
        <main id="main" class="site-main">
            <div class="container">
                <div class="col-xl-8 mx-lg-auto p-t-b-80">
                    <header class="text-center">
                        <h1>Create New Account</h1>
                        <p>Join Our wonderful community and let others help you without a single
                            penny</p>
                        <img class="p-t-b-50" src="<?php echo base_url(); ?>assets/img/icon/icon-join.png" alt="">
                    </header>
                    <form action="<?php echo base_url(); ?>index.php/register/signUp" method="POST">
                    <div class="col-lg-6" >
                            <div  class="form-group" style="visibility: hidden;">
                                <input type="text" class="form-control form-control-lg" name="id_users" value="<?php echo $getIdUsers ?>">
                           </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" name="firstname" placeholder="First Name">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" name="lastname" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" name="username" placeholder="Username">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-lg" name="password" placeholder="Password">
                                </div>
                            </div>
                            
                            <div class="col-lg-12">
                                <input type="submit" class="btn btn-primary btn-lg btn-block" value="Create Account">
                                <p class="forget-pass">A verification email wil be sent to you</p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </main>
        <!-- #main -->
    </div>