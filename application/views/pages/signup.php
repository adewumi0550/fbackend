

<!-- Contact section start -->
<div class="contact-section">
    <div class="container">
        <div class="row login-box">
            <div class="col-lg-6 align-self-center pad-0">
                <div class="form-section align-self-center">
                    <h3>Create an account</h3>
                    <div class="btn-section clearfix">
                        <a href="<?php echo base_url(); ?>/login" class="link-btn btn-2 default-bg">Login</a>
                        <a href="<?php echo base_url(); ?>/signup" class="link-btn  active btn-1 active-bg">Register</a>
                    </div>
                      <?php if (isset($_SESSION['login_success'])) {?>

                        <div class="alert alert-success alert-dismissable"><?php echo $_SESSION['login_success']; ?></div>
                            <?php
                            } ?>
                 

             
                     <?= form_open('signup') ?>
                        <div class="form-group form-box">
                            <?php echo form_error('name','<p style="color:red;font-size:9px;">','</p>'); ?>
                            <input type="text" name="name" class="input-text" placeholder="Full Name">

                        </div>
                        <div class="form-group form-box">
                            <?php echo form_error('email','<p style="color:red;font-size:9px;">','</p>'); ?>
                            <input type="email" name="email" class="input-text" placeholder="Email Address">
                        </div>
                        <div class="form-group form-box clearfix">
                            <?php echo form_error('password','<p style="color:red;font-size:9px;">','</p>'); ?>
                            <input type="password" name="password" class="input-text" placeholder="Password">
                        </div>

                        <div class="form-group">
                            <input type="radio" name="client"  checked="checked"  value="Client">Client
                            &nbsp;&nbsp;
                             <input type="radio" name="client"   value="Agent">Agent
                             &nbsp;&nbsp;
                             <!-- <input type="radio" name="client"   value="Developer">Property Developer -->
                        </div>
                        <div class="form-group clearfix mb-0">
                            <button type="submit" class="btn-md btn-theme float-left">Register</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 bg-color-15 align-self-center pad-0 none-992 bg-img">
              
            </div>
        </div>
    </div>
</div>
