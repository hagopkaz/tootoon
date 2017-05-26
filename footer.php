
	<footer>
    
    <div class="container ">
        
        <div class="row">
            
            <div class="col-xs-10 col-xs-offset-1">
                <?php 
					
					$footer_nav_args = array (
						
							'theme_location' 	=> 'footer-menu',
							'container'			=> 'nav',
							'menu_class' 		=> 'clearfix ',
						
					);
					
					wp_nav_menu($footer_nav_args); 
				?></div>
          
        
        </div>
    
    </div>

<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-xs-10 col-xs-offset-1">
                &copy; 2015-2017 tootoon tobacco. 
                <div class="hidden-sm hidden-md hidden-lg clear"></div>
                All rights reserved. 
                <div class="hidden-sm hidden-md hidden-lg clear"></div>
                <?php echo smp_print_list('title'); ?>
            </div>
        </div>
    </div>
</div>
    
</footer>
</body>
</html>