<?php get_header(); ?>

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