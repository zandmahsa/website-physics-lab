<footer>
  <!-- Footer main -->
  <section class="ft-main">
    <div class="ft-main-item">
      <h2 class="ft-title"><?php _e('آمار بازدید','zand_physics'); ?></h2>
		<hr id="line">
        <div id="view"><a><?php _e('سامانه الکترونیکی تلفن دانشگاه قم​','zand_physics'); ?></a></div>
    </div>
    <div class="ft-main-item">
      <h2 class="ft-title"><?php _e('پیوندها','zand_physics'); ?></h2>
      <ul>
        <li><?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ,"container"=>"" ) ); ?></li>
      </ul>
    </div>
    <div class="ft-main-item">
      <h2 class="ft-title"></h2>
     <p><?php _e('آدرس : قم - بلوار الغدیر- بعد از شهرک قدس - دانشگاه قم','zand_physics'); ?></p>
                    <p><?php _e('کد پستی : 3716146611','zand_physics'); ?></p>

                    <p><?php _e('تلفن : 32103000 025','zand_physics'); ?></p>

                    <p><?php _e('فکس : 32854499 025','zand_physics'); ?></p>
                    <p><?php _e('پست الکترونيکی: INFO@QOM.AC.IR​​​','zand_physics'); ?></p>
    </div>
    <div class="ft-main-item">
      <a href="https://qom.ac.ir/">
		  <img src="<?php echo get_template_directory_uri(); ?>/images/QomUni-map-min.png" alt="" title="" style="width: 50%;"/>
		</a>

    </div>
  </section>
  <!-- Footer legal -->
  <section class="ft-legal">
    <ul class="ft-legal-list" role="contentinfo">
      <p style="margin-top: 15px;">كليه حقوق اين سايت محفوظ و متعلق به دانشگاه قم مي باشد Copyright © 2020 Qom.ac.ir All rights reserved</p>
    </ul>
  </section>
</footer>