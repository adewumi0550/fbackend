

<div class="banner" id="banner">
    <div id="bannerCarousole" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item banner-max-height active">
                <img class="d-block w-100" src="<?php echo base_url(); ?>assets/img/banner/banner-2.jpg" alt="banner">
                <div class="carousel-caption banner-slider-inner d-flex h-100 text-center">
                    <div class="carousel-content container">
                        <div class="text-center">
                            <h3 class="text-uppercase"> Apartments at your finger tips</h3>
                            <p class="none-mb-992-0" style="text-transform: uppercase;">
                               connecting real estate agents to customers 
                            </p>
                            <p><a href="" class="btn button-theme btn-search"   data-toggle="modal" data-target="#staticBackdrop">Smart Search</a>

                                <a href="<?php echo base_url(); ?>dashboard" class="btn button-theme btn-search" >My Account</a>
                            </p>
                            <div class="inline-search-area none-992">
                                <div class="row">
                                    <div class="col-lg-2 col-sm-4 col-6 search-col">
                                        <select class="selectpicker search-fields" name="property-status">
                                            <option>Property Status</option>
                                            <option>For Sale</option>
                                            <option>For Rent</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-2 col-sm-3 col-6 search-col middle-col-1">
                                        <select class="selectpicker search-fields" name="property-types">
                                            <option>Property Types</option>
                                            <option>Apartments</option>
                                            <option>Houses</option>
                                            <option>Commercial</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-2 col-sm-3 col-8 search-col middle-col-2">
                                        <select class="selectpicker search-fields" name="Location">
                                            <option>Location</option>
                                            <option>Maiduguri</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-2 col-sm-3 col-6 search-col middle-col-1">
                                        <select class="selectpicker search-fields" name="Bedrooms">
                                            <option>Min Amount</option>
                                            <option>#100,000</option>
                                            <option>#200,000</option>
                                            <option>03</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-2 col-sm-3 col-8 search-col middle-col-2">
                                        <select class="selectpicker search-fields" name="Bathrooms">
                                            <option>Max Amount</option>
                                            <option>100,000</option>
                                            <option>200,000</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-2 col-sm-2 col-4 search-col">
                                        <button class="btn button-theme btn-search btn-block">
                                            <i class="fa fa-search"></i><strong>Find</strong>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="featured-properties content-area">
    <div class="container">
        <!-- Main title -->
        <div class="main-title mt2">
            <h1>Trending Properties</h1>
           
        </div>
        <div class="row filter-portfolio">
            <div class="cars">
                <?php if (! empty($estate) && is_array($estate)) : ?>

                 <?php foreach ($estate as $estate_item): ?>
                <!-- Start here -->
                
                <div class="col-lg-4 col-md-6 col-sm-12 filtr-item" data-category="3">
                    <div class="property-box">
                        <div class="property-thumbnail">
                            <a href="<?php echo base_url(); ?>/view/<?php echo $estate_item['slug']; ?>" class="property-img">
                                <div class="listing-badges">
                                    <span class="featured"><?php echo $estate_item['status']; ?></span>
                                </div>
                                <div class="price-ratings-box">
                                    <p class="price">
                                        &#8358;<?php echo $this->cart->format_number($estate_item['amount']); ?>

                                    </p>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                </div>
                                <img class="d-block w-100" src="<?php echo base_url(); ?>/assets/img/properties/properties-1.jpg" alt="properties">
                            </a>
                        </div>
                        <div class="detail">
                            <h1 class="title">
                                <a href="<?php echo base_url(); ?>/view/<?php echo $estate_item['slug']; ?>"><?php echo $estate_item['title']; ?></a>
                            </h1>
                            <div class="location">
                                <a href="<?php echo base_url(); ?>/view/<?php echo $estate_item['slug']; ?>">
                                    <i class="fa fa-map-marker"></i><?php echo $estate_item['location']; ?>
                                </a>
                            </div>

                            <!-- <p><?php echo $estate_item['descripition']; ?></p> -->
                          <!--   <ul class="facilities-list clearfix">
                                <li>
                                    <i class="flaticon-square"></i> 4800 sq ft
                                </li>
                                <li>
                                    <i class="flaticon-furniture"></i> 3 Beds
                                </li>
                                <li>
                                    <i class="flaticon-holidays"></i> 2 Baths
                                </li>
                                <li>
                                    <i class="flaticon-vehicle"></i> 1 Garage
                                </li>
                                <li>
                                    <i class="flaticon-window"></i> 3 Balcony
                                </li>
                                <li>
                                    <i class="flaticon-monitor"></i> TV
                                </li>
                            </ul> -->
                        </div>
                        <div class="footer clearfix">
                            <div class="pull-left days">
                                <a><i class="fa fa-user"></i> <?php echo $estate_item['agent_id']; ?></a>
                            </div>
                            <div class="pull-right">
                                <a><i class="fa fa-live"></i> Live</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Here -->
                 <?php endforeach; ?>

            <?php else : ?>
            
                <h3>No estate</h3>

    <p>Unable to find any estate for you.</p>

<?php endif ?>

            </div>
        </div>
    </div>
</div>


<!-- Counters strat -->
<div class="counters">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="media counter-box">
                    <div class="media-left">
                        <i class="flaticon-tag"></i>
                    </div>
                    <div class="media-body">
                        <h1 class="counter">967</h1>
                        <p>Listings For Sale</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="media counter-box">
                    <div class="media-left">
                        <i class="flaticon-business"></i>
                    </div>
                    <div class="media-body">
                        <h1 class="counter">1276</h1>
                        <p>Listings For Rent</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="media counter-box">
                    <div class="media-left">
                        <i class="flaticon-people"></i>
                    </div>
                    <div class="media-body">
                        <h1 class="counter">396</h1>
                        <p>Agents</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="media counter-box">
                    <div class="media-left">
                        <i class="flaticon-people-1"></i>
                    </div>
                    <div class="media-body">
                        <h1 class="counter">177</h1>
                        <p>Brokers</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Recently properties start -->
<div class="recently-properties content-area-12">
    <div class="container">
        <!-- Main title -->
        <div class="main-title">
            <h1>Recently Properties</h1>
        </div>
        <div class="slick-slider-area">
            <div class="row slick-carousel" data-slick='{"slidesToShow": 4, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}, {"breakpoint": 768,"settings":{"slidesToShow": 1}}]}'>
                <div class="slick-slide-item">
                    <div class="property-box-5">
                        <div class="property-photo">
                            <img class="img-fluid" src="<?php echo base_url(); ?>/assets/img/properties/properties-1.jpg" alt="properties">
                            <div class="date-box">For Sale</div>
                        </div>
                        <div class="detail">
                            <div class="heading">
                                <h3>
                                    <a href="properties-details.html">Masons Villas</a>
                                </h3>
                                <div class="location">
                                    <a href="properties-details.html">
                                        <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City
                                    </a>
                                </div>
                            </div>
                            <div class="properties-listing">
                                <span>3 Beds</span>
                                <span>2 Baths</span>
                                <span>980 sqft</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slick-slide-item">
                    <div class="property-box-5">
                        <div class="property-photo">
                            <img class="img-fluid" src="<?php echo base_url(); ?>/assets/img/properties/properties-2.jpg" alt="properties">
                            <div class="date-box">For Sale</div>
                        </div>
                        <div class="detail">
                            <div class="heading">
                                <h3>
                                    <a href="properties-details.html">Luxury Villa</a>
                                </h3>
                                <div class="location">
                                    <a href="properties-details.html">
                                        <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City
                                    </a>
                                </div>
                            </div>
                            <div class="properties-listing">
                                <span>3 Beds</span>
                                <span>2 Baths</span>
                                <span>980 sqft</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slick-slide-item">
                    <div class="property-box-5">
                        <div class="property-photo">
                            <img class="img-fluid" src="<?php echo base_url(); ?>/assets/img/properties/properties-3.jpg" alt="properties">
                            <div class="date-box">For Rent</div>
                        </div>
                        <div class="detail">
                            <div class="heading">
                                <h3>
                                    <a href="properties-details.html">Park avenue</a>
                                </h3>
                                <div class="location">
                                    <a href="properties-details.html">
                                        <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City
                                    </a>
                                </div>
                            </div>
                            <div class="properties-listing">
                                <span>3 Beds</span>
                                <span>2 Baths</span>
                                <span>980 sqft</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slick-slide-item">
                    <div class="property-box-5">
                        <div class="property-photo">
                            <img class="img-fluid" src="<?php echo base_url(); ?>/assets/img/properties/properties-4.jpg" alt="properties">
                            <div class="date-box">For Sale</div>
                        </div>
                        <div class="detail">
                            <div class="heading">
                                <h3>
                                    <a href="properties-details.html">Real Luxury Villa</a>
                                </h3>
                                <div class="location">
                                    <a href="properties-details.html">
                                        <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City
                                    </a>
                                </div>
                            </div>
                            <div class="properties-listing">
                                <span>3 Beds</span>
                                <span>2 Baths</span>
                                <span>980 sqft</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slick-slide-item">
                    <div class="property-box-5">
                        <div class="property-photo">
                            <img class="img-fluid" src="<?php echo base_url(); ?>/assets/img/properties/properties-5.jpg" alt="properties">
                            <div class="date-box">For Sale</div>
                        </div>
                        <div class="detail">
                            <div class="heading">
                                <h3>
                                    <a href="properties-details.html">Luxury Villa</a>
                                </h3>
                                <div class="location">
                                    <a href="properties-details.html">
                                        <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City
                                    </a>
                                </div>
                            </div>
                            <div class="properties-listing">
                                <span>3 Beds</span>
                                <span>2 Baths</span>
                                <span>980 sqft</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slick-btn">
                <div class="slick-prev slick-arrow-buton-2"></div>
                <div class="slick-next slick-arrow-buton-2"></div>
            </div>
        </div>
    </div>
</div>