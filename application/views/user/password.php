<div class="sub-banner">
    <div class="container">
        <div class="page-name">
            <h1>Change Password</h1>
            <ul>
                <li><a href="<?php echo base_url(); ?>">Home </a></li>
                <li><span>/</span>Change Password</li>
            </ul>
        </div>
    </div>
</div>
<!-- Change password start -->
<div class="change-password content-area-7">
    <div class="container">
        <div class="row">
         
            <div class="col-lg-8 col-md-12">
                <!-- My address start -->
                <div class="my-address">
                    <h3 class="heading-2">Change Password</h3>

                    <form action="#" method="GET">
                       
                        <div class="form-group">
                            <label>New Password</label>
                            <input type="password" autofocus="autofocus" class="input-text" name="new-password" placeholder="New Password">
                        </div>
                        <div class="form-group">
                            <label>Confirm New Password</label>
                            <input type="password" class="input-text" name="confirm-new-password" placeholder="Confirm New Password">
                        </div>
                        <a href="submit-property.html" class="btn btn-md button-theme"><i class="fa fa-save"></i> Save Changes</a>
                    </form>
                </div>
                <!-- My address end -->
            </div>

             <?php 
           $this->load->view('user/menu'); ?>
        </div>
    </div>
</div>
<!-- Footer start -->