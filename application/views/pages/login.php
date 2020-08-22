

<!-- Contact section start -->
<div class="contact-section">
    <div class="container">
        <div class="row login-box">
            <div class="col-lg-6 align-self-center pad-0">
                <div class="form-section align-self-center">
                    <h3>Sign into your account</h3>
                    <div class="btn-section clearfix">
                        <a href="<?php echo base_url(); ?>/login" class="link-btn active btn-1 active-bg">Login</a>
                        <a href="<?php echo base_url(); ?>/signup" class="link-btn btn-2 default-bg">Register</a>
                    </div>
                    <div class="clearfix"></div>
                        <?php if (isset($_SESSION['login_failed'])) {?>

                        <div class="alert alert-danger alert-dismissable"><?php echo $_SESSION['login_failed']; ?></div>
                            <?php
                            } ?>
                            
                     <?= form_open('login') ?>
                    <!-- <form action="#" method="GET"> -->
                        <div class="form-group form-box">
                         <?php echo form_error('username','<p style="color:red;font-size:9px;">','</p>'); ?>

                            <input type="text" name="username" class="input-text" placeholder="Email Address">
                        </div>
                        <div class="form-group form-box clearfix">
                             <?php echo form_error('password','<p style="color:red;font-size:9px;">','</p>'); ?>
                            <input type="password" name="password" class="input-text" placeholder="Password">
                        </div>
                        <div class="form-group clearfix mb-0">
                            <button type="submit" class="btn-md btn-theme float-left">Login</button>
                            <a href="<?php echo base_url(); ?>/password" class="forgot-password">Forgot Password</a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 bg-color-15 align-self-center pad-0 none-992 bg-img">
               
            </div>
        </div>
    </div>
</div>
