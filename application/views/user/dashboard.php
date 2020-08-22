<div class="sub-banner">
    <div class="container">
        <div class="page-name">
            <h1>My Account</h1>
            <ul>
                <li><a href="<?php echo base_url(); ?>">Home </a></li>
                <li><span>/</span>My Account</li>
            </ul>
        </div>
    </div>
</div>
<!-- My profile start -->
<div class="my-profile content-area">
    <div class="container">

        <div class="row">
         
            <div class="col-lg-8 col-md-12 col-sm-12">


                <!-- My address start-->
                <div class="my-address">
                     <h6>Welcome Back, <b><?php echo $user_info['name']; ?></b></h6>
                    <div class="row">
                    <div class="col-lg-4">
                        <div class="panel panel-primary">
                    <div class="panel-heading"><h3 class="panel-title">Save Property</h3></div>
                    <div class="panel-body"> <h1>0</h1>

                        <a href="" style="font-size: 12px;"><i class="flaticon-internet"></i> View saved property</a>
                    </div>
                </div>
                    </div>



                     <div class="col-lg-4">
                        <div class="panel panel-primary">
                    <div class="panel-heading"><h3 class="panel-title">Submit Property</h3></div>
                    <div class="panel-body"> <h1>0</h1>


                        <a href="" style="font-size: 12px;"><i class="flaticon-cross"></i> Submit New property</a>
                    </div>
                </div>
                    </div>




                     <div class="col-lg-4">
                        <div class="panel panel-primary">
                    <div class="panel-heading"><h3 class="panel-title">My Profile</h3></div>
                    <div class="panel-body">
                        <h2><?php echo $user_info['client']; ?></h2>


                         <a href="" style="font-size: 12px;"><i class="fa fa-user"></i> Post Property</a>
                    </div>
                </div>
                    </div>

                </div>
                </div>
                <!-- My address end -->
            </div>

              <?php  $this->load->view('user/menu'); ?>
        </div>
    </div>
</div>