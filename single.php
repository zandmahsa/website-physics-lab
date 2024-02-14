<?php get_header(); ?>
 
   <?php      
            while(have_posts())
            {
                the_post();
				?>
 <section>
        <div class="post">
<br>		
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
	<?php
	}
	?>
	 
 <?php get_footer(); ?>





