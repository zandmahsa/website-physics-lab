<?php get_header(); ?>
    
            
           
            
<?php if(have_posts()) : ?> <?php while(have_posts()) : the_post(); ?>
<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
<?php the_excerpt(); ?>
<?php endwhile;else : ?>
 <h1 id="titr" style="margin-bottom: 10px;"><big><?php _e('چیزی پیدا نشد','zand_physics'); ?></big></h1>
<?php endif; ?> 
            
			
    <?php get_footer(); ?>