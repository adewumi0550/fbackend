<div class="sub-banner">
    <div class="container">
        <div class="page-name">
            <h1>My Property</h1>
            <ul>
                <li><a href="<?php echo base_url(); ?>">Home </a></li>
                <li><span>/</span>My Property</li>
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
                  <h3 class="heading-2">Post Properties</h3>
                <div class="my-properties">
                    <table class="table brd-none">
                        <thead>
                        <tr>
                            <th>Property</th>
                            <th class="hedin-div">Date</th>
                            <th><span class="hedin-div">Views</span></th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="brd-none">
                            <td class="image">
                                <a href="properties-details.html"><img alt="properties-small" src="img/properties/small-properties-1.jpg" class="img-fluid"></a>
                            </td>
                            <td>
                                <div class="inner">
                                    <h5><a href="properties-details.html">Modern Family Home</a></h5>
                                    <figure class="hedin-div"><i class="fa fa-map-marker"></i> 123 Kathal St. Tampa City</figure>
                                    <div class="price-month">$ 27,000</div>
                                </div>
                            </td>
                            <td class="hedin-div">7.02.2018</td>
                            <td> <span class="hedin-div">421</span></td>
                            <td class="actions">
                                <a href="#"><i class="delete fa fa-trash-o"></i></a>
                            </td>
                        </tr>
                        
                      
                        </tbody>
                    </table>
                </div>
                </div>
                <!-- My address end -->
            </div>
            <?php 
           echo view('user/menu'); ?>
        </div>
    </div>
</div>