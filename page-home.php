<?php get_header(); ?>
<section class="slider" >

    <div id="bannerCarousel" class="carousel slide" data-ride="carousel"> 
        <ol class="carousel-indicators hidden-xs hidden-sm">
                                            <?php
                
                                                $slider_a = array (                
                                                    'post_type' => 'testimonials',
                                                    'order'     =>  'ASC',
                                                    'posts_per_page'=>  '-1',
                                                );            

                                                $slider_q = new WP_Query($slider_a);


                                            if ($slider_q->have_posts()) {

                                                        $j=0;

                                                    while($slider_q->have_posts()) { 
                                                        $slider_q->the_post(); ?>

                                                <li data-target="#testimCarousel" data-slide-to="<?php echo $j; ?>"  ></li>

                                               <?php $j++; } 



                                            }  wp_reset_postdata();  

                                            ?>
                                        </ol>   

                                        <div class="slider-container">
                                            <div class="carousel-inner">
        <?php 
            
            $slider_a = array (
                'post_type' =>  'slider',
                'order'     =>  'ASC',
                'posts_per_page'=>  '-1',
                
            );
        
            $slider_q = new WP_Query($slider_a);
        
            if($slider_q->have_posts()) { 
                while($slider_q->have_posts()) { $slider_q->the_post(); ?>
                    
                        
                        <?php if (class_exists('MultiPostThumbnails')) : 
                                $imageid = MultiPostThumbnails::get_post_thumbnail_id('slider', 'mobile-image', $post->ID);
                                $imageurl = wp_get_attachment_image_src($imageid,'full');
                                    
                                
                               $mobileUrl = $imageurl[0];

                                endif; ?>

                        <?php if ( has_post_thumbnail() ) {
                                $fullUrl = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>

                            <div class="col-xs-12 item" >

                                <div class="hidden-xs hidden-sm full-bg slider-bg" style="background-image:url('<?php echo $fullUrl; ?>')">
                                
                                        <?php the_post_thumbnail(); ?>
                                        <div class="floater"></div>
                                            <div class="carousel-content">
                                
                                                  <?php the_content(); ?>
                                              </div>
                                       
                                 </div>

                                 <div class="hidden-md hidden-lg mobile-bg slider-bg" style="background-image:url('<?php echo $mobileUrl; ?>')">
                                
                                        <?php the_post_thumbnail(); ?>
                                        <div class="floater"></div>
                                        <div class="carousel-content">
                                
                                                  <?php the_content(); ?>
                                              </div>

                                       
                                 </div>
                                      
                                
                                  </div>
                        <?php    };   ?>
                  
                    
                    
                <?php }
                
            } else {
                
            };
            /* Restore original Post Data */
            wp_reset_postdata();    
        ?>
        </div></div>
    </div>
    
</section>
<section class="home-about">
<?php  if(have_posts()) : while(have_posts()) : the_post(); ?>
<div class="container">
    <div class="row">

<div class="col-xs-12">
  
    

        <?php the_content(); ?>
</div>
    </div></div>
 <?php endwhile; endif; ?>
</section>

<section class="home-products">

    <div class="container">

        <div class="row">
            <div class="product-section-title">
            <h2 class="home-section-title section-title">OUR FLAVOURS</h2>
</div>
            <div class="col-xs-12 product-item">


                
                <div class="product-img">
                    <img src="<?php bloginfo('template_directory'); ?>/images/prod-.png" />
                </div>

                <div class="product-content">
                <div class="product-description">
                    <h3 class="product-title">
                        Spanish Lime
                    </h3>

                    <p>printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer </p>


                </div>

                <div class="product-meta clearfix">
                    <span class="product-sku">1-008 005 006</span>  <span class="product-price">$89.00</span>
                </div>
            </div>
            </div>


            <a class="button products-more grad-border">See More</a>
            
        </div>

    </div>

</section>

<section class="testimonials">
    
    <h2 class="home-section-title section-title">Happy Clients</h2>

    <div id="testimCarousel" class="carousel slide">
                                     <ol class="carousel-indicators">
                                            <?php
                
                                                $testim_a = array (                
                                                    'post_type' => 'testimonials',
                                                    'order'     =>  'ASC',
                                                    'posts_per_page'=>  '-1',
                                                );            

                                                $testim_q = new WP_Query($testim_a);


                                            if ($testim_q->have_posts()) {

                                                        $i=0;

                                                    while($testim_q->have_posts()) { 
                                                        $testim_q->the_post(); ?>

                                                <li data-target="#testimCarousel" data-slide-to="<?php echo $i; ?>"  ></li>

                                               <?php $i++; } 



                                            }  wp_reset_postdata();  

                                            ?>
                                        </ol>
                                    <div class="container testim-container">

                                       
                                        
                                        <div class="row carousel-inner">
                                            
                                            <?php
                
                                                $testim_a = array (                
                                                    'post_type' => 'testimonials',
                                                    'order'     =>  'ASC',
                                                    'posts_per_page'=>  '-1',
                                                );            

                                                $testim_q = new WP_Query($testim_a);


                                            if ($testim_q->have_posts()) {



                                                    while($testim_q->have_posts()) {
                                                        $testim_q->the_post(); ?>
                                                        <div class="item">
                                                            <div class=" testimonial-holder col-xs-12">
                                                                <div class="carousel-content">
                                                               
                                                                <?php if(get_post_meta($post->ID,'testimonial')) {
                                                                            
                                                                            echo "<p>".get_post_meta($post->ID,'testimonial')[0]."</p>";
                                                                        };?>
                                                                
                                                                <div class="testimonial-meta">
                                                                    <?php
                                                                        if(get_post_meta($post->ID,'name')) {
                                                                            
                                                                            echo "-".get_post_meta($post->ID,'name')[0];
                                                                        };
                                                        
                                                                        if(get_post_meta($post->ID,'title')) {
                                                                            
                                                                            echo ", ".get_post_meta($post->ID,'title')[0];
                                                                        };

                                                                    ?></div>
                                                                </div>
                                                                </div>
                                                                

                                            </div>                      

                                                   <?php }



                                            }  wp_reset_postdata();  

                                            ?>
                                        
                                        </div>
                                         
                                    </div>
                                    </div>  
</section>

<?php get_footer(); ?>