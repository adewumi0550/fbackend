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
           <?php 
           $this->load->view('user/menu'); ?>
            <div class="col-lg-8 col-md-12 col-sm-12">


                <!-- My address start-->
                <div class="my-address">
                  <h3 class="heading-2">Favorited Properties</h3>
                <div class="my-properties">
                    <table class="table brd-none">
                        <thead>
                        <tr>
                            <th>Property</th>
                            <th class="hedin-div">Date</th>
                            <th><span class="hedin-div"></span></th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>

                             <?php if (! empty($estate) && is_array($estate)) : ?>

                        <?php foreach ($estate as $estate_item): ?>

                        <tr class="brd-none">
                          
                            <td>
                                <div class="inner">
                                    <h5><a href="<?php echo base_url(); ?>view/<?php echo $estate_item['slug'];  ?>"><?php echo $estate_item['title']; ?></a></h5>
                                </div>
                            </td>
                            <td class="hedin-div"><?php echo $estate_item['created_date']; ?></td>
                            <td> <span class="hedin-div">active</span></td>
                            <td class="actions">
                                <a href="#"><i class="delete fa fa-trash-o"></i></a>
                            </td>
                        </tr>
                              <?php endforeach; ?>

                                <?php else : ?>
                                
                                    <h3>No estate</h3>

                        <p>Unable to find any estate for you.</p>

                    <?php endif ?>
                        
                      
                        </tbody>
                    </table>
                </div>
                </div>
                <!-- My address end -->
            </div>
        </div>
    </div>
</div>