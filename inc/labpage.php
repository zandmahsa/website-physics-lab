<?php
/*
Template Name: lab
*/
get_header();
?>

<div style="height:650px; overflow:scroll; width:100%;">
    <header>
        <div>
            <hr id="line">
            <h1 id="titr"><big><?php _e('خدمات آزمایشگاهی', 'zand_physics'); ?></big></h1>
            <hr id="line">
        </div>
    </header>
    <div>
        <ul class="em">
            <?php
            $q = new WP_Query(
                array(
                    "category_name" => "آزمایشگاه",
                    "posts_per_page" => 10000
                )
            );
            while ($q->have_posts()) {
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
    </div>
</div>

<?php get_footer(); ?>
