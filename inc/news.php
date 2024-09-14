<div>
    <header>
        <div>
            <div>
                <hr id="line">
                <h1 id="titr"><?php _e('اخبار و اطلاعیه ها', 'zand_physics'); ?></h1>
                <hr id="line">
            </div>
        </div>
    </header>
    <div>
        <ul class="news" style="height:100%;">
            <li style="display: flex; height:50%; flex-wrap: wrap; justify-content: flex-start;">
                <?php dynamic_sidebar('qomuninews'); ?>
            </li>
            <li style="display: flex; height:90px; flex-wrap: wrap; justify-content: center;">
                <?php dynamic_sidebar('qomuninews2'); ?>
            </li>
        </ul>
    </div>
    <div id="btn-c" style="margin-top: 120px;">
        <a href="https://clab.qom.ac.ir/?page_id=10" role="button">
            <button class="button"><?php _e('مشــاهده لیست کامل', 'zand_physics'); ?></button>
        </a>
    </div>
</div>
