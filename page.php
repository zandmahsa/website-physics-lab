<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); // اینجا که حلقه قرار دادیم ?>

<?php if (has_post_thumbnail()){ // اینجا هم که تصویر شاخص رو میزاریم نشون بده
 the_post_thumbnail('news');
 }
 ?>            
   
 <section>
		
        <div class="post"> 
		<br >
			 <h1 ><big><?php the_title();?></big></h1>
			 <br>
			 <br>
            <div >
			<br>
			<br>
			<br>
               <?php the_content(); ?>
            </div>
        </div>
		
    </section>
	
	<?php endwhile; else : ?>
 <p><?php _e('چیزی پیدا نشد','zand_physics'); ?></p>
<?php endif; ?>
  </div>
	 

<?php get_footer(); ?>