<?php get_header(); ?>
<!-- <div class="container-fluid home-slider-container" >

    <div class="row slider-row" id="homeSlider"> 
        
        <?php 
            
            $slider_a = array (
                'post_type' =>  'slider',
                'order'     =>  'ASC',
                
            );
        
            $slider_q = new WP_Query($slider_a);
        
            if($slider_q->have_posts()) { 
                while($slider_q->have_posts()) { $slider_q->the_post(); ?>
                    
                    
                        <?php if ( has_post_thumbnail() ) {
                                $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
                            <div class="col-lg-12 slider-item" style="background-image:url('<?php echo $url; ?>')">
                                
                                        <?php the_post_thumbnail(); ?>
                                
                                
                                
                                    <div class="slider-content container">
                                        
                                        <div class="row">
                                            
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 slide-text">
                                              <?php the_content(); ?>
                                            </div>
                                            
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
    
    </div>
    
</div> -->

<?php  if(have_posts()) : while(have_posts()) : the_post(); ?>
<div class="container">
    <div class="row">
<div class="col-lg-12">
    
    <?php 
        
        if(get_post_meta($post->ID,'file_link')) { ?>
    
           
            
              <script type="text/javascript">  
      
        
        function startDownload()  
        {  
             var url='<?php echo get_post_meta($post->ID,'file_link')[0]; ?>';    
             window.open(url, 'Download');  
        }  
              
            setTimeout('startDownload()', 1000);
        </script>
            
       <?php } ?>
    

    
   
    
    <h1><?php the_title(); ?></h1>
    <?php the_content(); ?>
</div>
    </div></div>
 <?php endwhile; endif; ?>

<?php get_footer(); ?>