<div class="sub-banner">
    <div class="container">
        <div class="page-name">
            <h1>Properties For Rent</h1>
            <ul>
                <li><a href="<?php echo base_url(); ?>">Index</a></li>
                <li><span>/</span>Properties For Rent</li>
            </ul>
        </div>
    </div>
</div>
<!-- Properties section body start -->
<div class="properties-section content-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <!-- Option bar start -->
                <div class="option-bar">
                    <div class="float-left">
                        <h4>
                            <span class="heading-icon">
                                <i class="fa fa-th-list"></i>
                            </span>
                            <span class="title-name">Properties List</span>
                        </h4>
                    </div>
                    <div class="float-right cod-pad">
                        <div class="sorting-options">
                            <select class="sorting">
                                <option>New To Old</option>
                                <option>Old To New</option>
                                <option>Properties (High To Low)</option>
                                <option>Properties (Low To High)</option>
                            </select>
                            <a href="properties-list-rightside.html" class="change-view-btn active-view-btn"><i class="fa fa-th-list"></i></a>
                            <a href="properties-grid-rightside.html" class="change-view-btn"><i class="fa fa-th-large"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Property box 2 start -->

                    <?php if (! empty($estate) && is_array($estate)) : ?>

                 <?php foreach ($estate as $estate_item): ?>
                
                <div class="property-box-2">
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-pad">
                            <a href="properties-details.html" class="property-img">
                                <img src="<?php echo base_url(); ?>assets/img/properties/properties-list-1.jpg" alt="properties" class="img-fluid">
                                <div class="listing-badges">
                                    <span class="featured"><?php echo $estate_item['status']; ?></span>
                                </div>
                                <div class="listing-time opening">For Rent</div>
                                <div class="price-ratings-box">
                                    <p class="price">
                                         &#8358;   <?php echo$estate_item['amount']; ?>
                                    </p>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-7 col-md-7 col-pad">
                            <div class="detail">
                                <h3 class="title">
                                     <a href="<?php echo base_url(); ?>/view/<?php echo $estate_item['slug']; ?>"><?php echo $estate_item['title']; ?></a>
                                </h3>
                                <h5 class="location">
                                    <a href="properties-details.html">
                                        <i class="flaticon-location"></i><?php echo $estate_item['location']; ?>
                                    </a>
                                </h5>
                               <p><?php echo word_limiter($estate_item['descripition'], 30); ?></p>
                            </div>
                            <div class="footer clearfix">
                                <div class="pull-left days">
                                    <a><i class="fa fa-user"></i> Jhon Doe</a>
                                    <a>    Jhon Doe</a>
                                </div>
                                <div class="pull-right">
                                    <a><i class="flaticon-time"></i> 5 Days ago</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                   <?php endforeach; ?>

            <?php else : ?>
            
                  <h3>No estate</h3>

                <p>Unable to find any estate for you.</p>

            <?php endif ?>
                 
                <!-- Page navigation start -->
                <div class="pagination-box hidden-mb-45 text-center">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#"><i class="fa fa-angle-left"></i></a>
                            </li>
                            <li class="page-item"><a class="page-link active" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#"><i class="fa fa-angle-right"></i></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">

                <?php  $this->load->view('pages/menu'); ?>
       </div>
        </div>
    </div>
</div>
<!-- Footer start -->