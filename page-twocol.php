<?php get_header();?>
<!-----blog.php--------->

<div id="content">
   
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    
         
        <?php the_post_thumbnail(); ?>
        
        <p><?php the_content(); ?></p>
   
       
    
    <?php endwhile; else: ?>
        <p>Sorry no posts to display</p>
    
    <?php endif; ?>
    

</div><!-- #content --> 
  
<?php get_sidebar(); ?>
<?php get_footer(); ?>