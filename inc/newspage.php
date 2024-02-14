<?php
/*
Template Name: newsform
*/
get_header();
?>

<div style="height:650px;overflow:scroll;width:100%;">
            <header>
                <div>
                    <div>
                        <hr id="line">
                        <h1 id="titr"><?php _e('اخبار و اطلاعیه ها','zand_physics'); ?></h1>
                        <hr id="line">
                    </div>
                </div>
            </header>
            <div >
                <ul class="news">
                
				<li style="display: flex;flex-wrap: wrap;">
	<?php dynamic_sidebar( 'news' ); ?></li>
	
	
                </ul>
				
               
                 
            </div>
            
</div>
             <?php get_footer(); ?>