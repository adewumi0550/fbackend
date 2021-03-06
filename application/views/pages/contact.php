<!-- Sub banner start -->
<div class="sub-banner">
    <div class="container">
        <div class="page-name">
            <h1>Contact Us</h1>
            <ul>
                <li><a href="<?php echo base_url(); ?>"><i class="fa fa-home"></i>  Home</a></li>
                <li><span>/</span><?= ucfirst($title); ?></li>
            </ul>
        </div>
    </div>
</div>
<!-- Contact 1 start -->
<div class="contact-1 content-area-5">
    <div class="container">
        <div class="row">
            <div class=" col-lg-4 col-md-5">
                <div class="contact-info">
                    <h3 class="heading">Find Us There</h3>
                    <p>Collaboratively administrate channels whereas virtual. Objectively seize scalable metrics whereas proactive e-services.</p>
                    <div class="media">
                        <i class="flaticon-technology-1"></i>
                        <div class="media-body">
                            <h5 class="mt-0">Phone:</h5>
                            <p><a href="tel:+2347036951585">+2347036951585</a></p>
                        </div>
                    </div>
                    <div class="media">
                        <i class="flaticon-envelope"></i>
                        <div class="media-body">
                            <h5 class="mt-0">Email:</h5>
                            <p><a href="mailto:info@gidanhaya.com">info@gidanhaya.com</a></p>
                        </div>
                    </div>
                  
                    <div class="media mb-0">
                        <i class="flaticon-technology-2"></i>
                        <div class="media-body">
                            <h5 class="mt-0">Fax:</h5>
                            <p><a href="#">+2347036951585</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="offset-lg-1 col-lg-7 col-md-7 ">
                <h3 class="heading">Contact Form</h3>
                <?php if (isset($_SESSION['success_contact_save'])) {?>


                            <div class="alert alert-success"><?php echo $_SESSION['success_contact_save']; ?></div>
                            <?php
                            } ?>
                                            <?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>
                                        <?php echo form_open('contact', 'class="form"'); ?>
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group name">
                                <input type="text" name="name" class="form-control" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group email">
                                <input type="email" name="email" class="form-control" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group subject">
                                <input type="text" name="subject" class="form-control" placeholder="Subject">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group number">
                                <input type="text" name="phone" class="form-control" placeholder="+234">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group message">
                                <textarea class="form-control" name="message" placeholder="Write message"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="send-btn">
                                <button type="submit" class="btn btn-md button-theme">Send Message</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Google map start -->
<div class="section">
    <div class="map">
        <div id="contactMap" class="contact-map"></div>
    </div>
</div>
<!-- Footer start -->