<?php get_header(); ?>
    <section >
        <div id="main" role="main">
            <header>
                <div>

                    <hr id="line">
                    <h1 id="titr" style="margin-bottom: 10px;"><big><?php _e('خدمات آزمایشگاهی','zand_physics'); ?></big></h1>
                    <h4 style="text-align: center; "><?php _e('منتخب تجهیزات و خدمات آزمایشگاهی','zand_physics'); ?></h4>
                    <hr id="line">
                </div>
            </header>
            <div class="clear"></div>
            <ul class="em">
				<?php
				$q=new WP_Query(
					array("category_name"=>"آزمایشگاه","posts_per_page"=>9)
				);
				while($q->have_posts())
				{
					$q->the_post();
				?>
					<li>
						<a href="<?php the_permalink(); ?>">
							<?php the_title(); ?>
						</a>
					</li>
				<?php
				}	

				?>
                     
            </ul>
            <div id="btn-c">
                <a href="https://clab.qom.ac.ir/?page_id=22" role="button">
                    <button class="button"><?php _e('مشــاهده لیست کامل','zand_physics'); ?></button>
                </a>
            </div>
            <div class="clear"></div>
			<?php include("inc/news.php"); ?>
        </div>
    </section>
    <?php get_footer(); ?>
	
	
	
	