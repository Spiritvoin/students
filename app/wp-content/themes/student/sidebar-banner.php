<div class="right-box">
    <div class="boxe">
        <div class="top-blue">Что это?</div>
        <div class="images">
            <a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/img-block.png" alt="" title="" /></a>
            <div class="title">О воде</div>
        </div>
    </div>
    <div class="boxe">
        <div class="top-green">Что это?</div>
        <div class="images">
            <a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/img-block.png" alt="" title="" /></a>
            <div class="title">О воде</div>
        </div>
    </div>
    <div class="boxe">
        <?php if (get_option('top_banner_path')) {
        ?>
        <div class="banner"><a href="<?php echo get_option('bottom_banner_url');?>"><img
            src="<?php echo get_option('bottom_banner_path');?>" alt=""
            title=""/></a></div>
        <?php } else { ?>
        <a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/poster.jpg" alt="" title="" /></a>
        <?php } ?>

    </div>
</div>