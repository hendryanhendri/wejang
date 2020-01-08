<div id="primary" class="content-area"
         data-bg-possition="center"
         data-bg-repeat="false"
         style="background: url('<?php echo base_url(); ?>assets/img/icon/icon-circles.png');">
        <main id="main" class="site-main">
            <div class="container">
                <div class="col-xl-8 mx-lg-auto p-t-b-80">
                        <header class="text-center">
                            <h1>Welcome Back</h1>
                            <p class="section-subtitle">Hey bro/sis welcome back signin now there is lot of new stuff
                                waiting
                                for you</p>
                            <img class="p-t-b-50" src="<?php echo base_url(); ?>assets/img/icon/icon-login.png" alt="">
                        </header>

                        <form action="<?php echo site_url('login/auth');?>" method="POST">
                 <div class="text-danger">
					<?php
					$info = $this->session->flashdata('info1');
					if(!empty($info))
					{
						echo $info;
					}
				 ?>
					</div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group has-icon"><i class="icon-user-o"></i>
                                        <input type="text" name="username" class="form-control form-control-lg"
                                               placeholder="Username" id="username">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group has-icon"><i class="icon-user-secret"></i>
                                        <input type="password" name="password" class="form-control form-control-lg"
                                               placeholder="Password" id="password">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <input type="submit" class="btn btn-primary btn-lg btn-block" value="Let me enter">
                                    <p class="forget-pass">Have you forgot your username or password ?</p>
                                </div>
                                
                            </div>
                        </form>
                </div>
            </div>
        </main>
        <!-- #main -->
    </div>