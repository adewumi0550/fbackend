<div class="sub-banner">
    <div class="container">
        <div class="page-name">
            <h1>Setup Account</h1>
            <ul>
                <li><a href="<?php echo base_url(); ?>dashboard">Dashboard</a></li>
                <li><span>/</span>Submit Property</li>
            </ul>
        </div>
    </div>
</div>
<!-- Submit Property start -->
<div class="submit-property content-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="notification-box">
                    <h3>Don't Have an Account? Set up Your Business Account</h3>
                </div>
            </div>
            <div class="col-md-12">
                <div class="submit-address">
                   <?php echo form_open('setup'); ?>
                        <h3 class="heading-2">Basic Information</h3>
                        <div class="search-contents-sidebar mb-30">
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="form-group">
                                        <label>Company Name</label>
                                        <input type="text" class="input-text" name="company_name" placeholder="John dae">
                                    </div>
                                </div>
                              
                                <div class="col-lg-4 col-md-6">
                                    <div class="form-group">
                                        <label> <i class="fa fa-map-marker"></i> Location</label>
                                        <input type="text" class="input-text" name="company_Address" >
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="form-group">
                                        <label>Company Email</label>
                                        <input type="text" class="input-text" name="company_email" >
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="form-group">
                                        <label>Agent Name</label>
                                        <input type="text" class="input-text" name="company_agent" >
                                    </div>
                                </div>

                                 <div class="col-lg-4 col-md-6">
                                    <div class="form-group">
                                        <label>Company Phone</label>
                                        <input type="text" class="input-text" name="company_phone" >
                                    </div>
                                </div>

                                 <div class="col-lg-4 col-md-6">
                                    <div class="form-group">
                                        <label>Company Number</label>
                                        <input type="text" class="input-text" name="company_number" >
                                    </div>
                                </div>
                            </div>
                        </div>
                      
                        <h3 class="heading-2">Location</h3>
                        <div class="row mb-30">
                            <div class="col-lg-4 col-md-4">
                                <div class="form-group">
                                    <label>Local Government</label>
                                    <input type="text" class="input-text" name="company_lga">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="form-group">
                                    <label>City</label>
                                    <input type="text" class="input-text" name="company_city">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="form-group">
                                    <label>State</label>
                                    <select class="selectpicker search-fields" name="company_state">
                                        <option>Borno</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <h3 class="heading-2">Detailed Information</h3>
                        <div class="row mb-50">
                            <div class="col-md-12">
                                <div class="form-group mb-0">
                                    <label>Company Information</label>
                                    <textarea class="input-text" name="company_details" placeholder="Detailed Information"></textarea>
                                </div>

                                <br><br>

                                  <div class="form-group mb-0">
                                    <label>Agent Details</label>
                                    <textarea class="input-text" name="agent_details" placeholder="Detailed Information"></textarea>
                                </div>
                            </div>
                        </div>
                     
                        <h3 class="heading-2">Agent Contact Details</h3>
                        <div class="row">
                          
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="input-text" name="agent_email" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Phone (optional)</label>
                                    <input type="text" class="input-text" name="agent_phone"  placeholder="Phone">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <input type="submit" class="btn btn-primary" name="submit" value="Setup Account" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>