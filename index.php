<?php get_header();?>
<!--index.php-->

<div id="content">
    
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    
    <article class="threecol">
    <div class="featured-img"><?php the_post_thumbnail("full"); ?></div>
    <div class="category"><h3><?php the_category(); ?></h3></div>
    <div class="title"><h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3></div>
      
      <p><?php the_excerpt(); ?><div class="readmore"><a href="<?php the_permalink(); ?>"> Read More &raquo</a></p></div>
   </article>    
        
    
  
  <?php endwhile; else: ?>
      <p>Sorry no posts to display</p>
        
    <?php endif; ?>
   <?php next_posts_link( 'Older Posts', $the_query->max_num_pages );
previous_posts_link( 'Newer Posts' ); ?> 
   <br /><br />
   
  
</div><!-- #content -->   

<div id="sidebar">
<?php get_sidebar(right); ?> 
</div><!-- #sidebar -->

<?php get_footer(); ?>