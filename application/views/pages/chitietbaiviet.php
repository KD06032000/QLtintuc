<section class="intro-news-area section-padding-100-0 mb-70">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Intro News Tabs Area -->
                <div class="col-12 col-lg-8">
                    <?php foreach($post_details as $key =>$ps) { ?>
                    <div class="card-body">
                                <img src="<?php echo base_url('uploads/post/'.$ps->image)?>"  class="card-img-top" alt="">
                                <h5 class="card-title"><?php echo $ps->title?></h5><span >22-3-2023</span>
                                <p class="card-text"><?php echo $ps->description?></p>
                                
                    </div>
                    <?php } ?>
                </div>

                <!-- Sidebar Widget -->
                <div class="col-12 col-sm-9 col-md-6 col-lg-4">
                    <div class="sidebar-area">

                        <!-- Newsletter Widget -->
                        <div class="single-widget-area newsletter-widget mb-30">
                            <h4>Subscribe to our newsletter</h4>
                            <form action="#" method="post">
                                <input type="email" name="nl-email" id="nlemail" placeholder="Your E-mail">
                                <button type="submit" class="btn newsbox-btn w-100">Subscribe</button>
                            </form>
                            <p class="mt-30">Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis eget nibh . volutpat lobortis.</p>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>