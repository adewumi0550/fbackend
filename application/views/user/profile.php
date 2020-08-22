<div class="sub-banner">
    <div class="container">
        <div class="page-name">
            <h1>My Profile</h1>
            <ul>
                <li><a href="<?php echo base_url(); ?>">My Account</a></li>
                <li><span>/</span>My Profile</li>
            </ul>
        </div>
    </div>
</div>
<!-- My profile start -->
<div class="my-profile content-area">
    <div class="container">
          <h5>My Profile</h5>
        <div class="row">

           
            <div class="col-lg-8 col-md-12 col-sm-12">
                <!-- My address start-->


                   <div class="alert alert-danger"  role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong><a href="" style="color: blue;">Set up your Business Account</a></strong> To Post Property
                </div>


                <div class="my-address">
                    <form>

                        <div class="form-group">
                            <label>Full Name</label>
                            <input type="text" value="<?php echo $user_info['name']; ?>" class="input-text" name="your name" placeholder="John deo">
                        </div>
                        <div class="form-group">
                            <label>Account</label>
                            <input type="text" value="<?php echo $user_info['status']; ?>" class="input-text" name="agent" placeholder="Your title">
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" value="<?php echo $user_info['phone']; ?>"  class="input-text" name="phone" placeholder="Phone">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" disabled="disabled" value="<?php echo $user_info['email']; ?>" class="input-text" name="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label>Personal Info</label>
                            <textarea class="input-text" name="message" placeholder="Personal info"></textarea>
                        </div>
                        <a href="#" class="btn btn-md button-theme">Save Changes</a>
                    </form>
                </div>
                <!-- My address end -->
            </div>
            <?php  $this->load->view('user/menu'); ?>
        </div>
    </div>
</div>