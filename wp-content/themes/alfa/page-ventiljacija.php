<?php get_header(); ?>
<section class="first-screen" style="background-image: url(<?php echo get_field('field_5df39e2d02d5b'); ?>)" id="first-screen">
    <div class="container">
        <h1><?php echo get_field('field_5df39e5202d5c'); ?></h1>
        <?php
            $telephoneHeadSection = get_field('field_5df73240148ce');
            $telephoneRepHeadSection = preg_replace('/[^0-9]/', '', $telephoneHead);
        ?>
        <h6>Звоните нам <a href="tel:+<?php echo $telephoneRepHeadSection; ?>"><?php echo $telephoneHeadSection; ?></h6><a class="btn"
            href="#section-application-for-free-measurement">Бесплатный замер</a>
    </div>
</section>
<section class="application-for-free-measurement" id="section-application-for-free-measurement">
    <div class="container">
        <h3><?php echo get_field('field_5df3aa0bb353e'); ?></h3>
        <div class="wrapper-form">
            <?php echo do_shortcode('[contact-form-7 id="17" title="Форма страницы Вентиляции"]'); ?>
        </div>
        <p><?php echo get_field('field_5df3aa40b353f'); ?><a href="<?php echo get_field('field_5df3b0c5136d2'); ?>" class="pol-cong"><?php echo get_field('field_5df3b0ab136d1'); ?></a></p>
    </div>
</section>
<section class="steps-for-successful" id="steps-for-successful">
    <div class="container">
        <h3><?php echo get_field('field_5df7436792f93'); ?></h3>
        <div class="wrapper_items">
            <?php
                $counter = 1;
                if( have_rows('field_5df7439892f94') ): 
                while ( have_rows('field_5df7439892f94') ) : the_row();  
            ?>
                <div class="steps-success"><span>0<?php echo $counter; ?></span>
                    <div class="wrapper_icon">
                        <img class="svg" src="<?php echo get_sub_field('field_5df743d492f95'); ?>" alt="">
                    </div>
                    <h4><?php echo get_sub_field('field_5df743ff92f96'); ?></h4>
                    <?php 
                        if( get_sub_field('field_5df7496ffa39d') ): 
                    ?>
                        <?php
                            if( have_rows('field_5df749aefa39e') ): 
                            while ( have_rows('field_5df749aefa39e') ) : the_row();  
                        ?>
                            <p><?php echo get_sub_field('field_5df749c8fa39f'); ?></p>
                        <?php endwhile; endif; ?>
                    <?php endif; ?>
                </div>
            <?php $counter++; endwhile; endif; ?>
        </div>
    </div>
</section>
<section class="what-we-do" id="what-we-do" style="background-image: url(<?php echo get_field('field_5df752ba56bc7'); ?>);">
    <div class="container">
        <h3><?php echo get_field('field_5df752a456bc6'); ?></h3>
        <div class="wwd-items">

            <?php
                if( have_rows('field_5df753a156bc8') ): 
                while ( have_rows('field_5df753a156bc8') ) : the_row();  
            ?>                      

                <div class="wwd-item">
                    <div class="wrapper_icon">
                        <img class="svg" src="<?php echo get_sub_field('field_5df7541856bc9'); ?>" alt="">
                    </div>
                    <p><?php echo get_sub_field('field_5df7543d56bca'); ?></p>
                </div>

            <?php endwhile; endif; ?>
        </div>
    </div>
</section>
<section class="why-we" id="why-we">
    <div class="container">
        <h3><?php echo get_field('field_5df76ad76509f'); ?></h3>
        <p><?php echo get_field('field_5df76afc650a0'); ?></p>
        <p class="p-red-block"><?php echo get_field('field_5df76c36650a1'); ?></p>
        <p><?php echo get_field('field_5df76c41650a2'); ?></p>
        <div class="wrapper-img"><img src="<?php echo get_field('field_5df76da9650a6'); ?>" alt=""><img
                src="<?php echo get_field('field_5df76eb5645ce'); ?>" alt="special-offer-img2mob">
            <div class="special-offer-block-1"><img src="<?php get_template_directory_uri(); ?>/img/special-offer-block-1-img.jpg" alt="">
                <div class="special-offer-block-1-txt">
                    <p><?php echo get_field('field_5df76c61650a3'); ?></p>
                </div>
            </div>
            <div class="special-offer-block-3">
                <p><?php echo get_field('field_5df76c73650a4'); ?></p>
                <p><?php echo get_field('field_5df76d99650a5'); ?></p>
            </div>
        </div>
    </div>
</section>
<section class="application-for-free-measurement">
    <div class="container">
        <h3><?php echo get_field('field_5df3aa0bb353e'); ?></h3>
        <div class="wrapper-form">
            <?php echo do_shortcode('[contact-form-7 id="17" title="Форма страницы Вентиляции"]'); ?>
        </div>
        <p><?php echo get_field('field_5df3aa40b353f'); ?><a href="<?php echo get_field('field_5df3b0c5136d2'); ?>" class="pol-cong"><?php echo get_field('field_5df3b0ab136d1'); ?></a></p>
        <?php
            $formTel = get_field('field_5df772564356c');
            $formRepTel = preg_replace('/[^0-9]/', '', $formTel);
        ?>
        <h4><?php echo get_field('field_5df772324356b'); ?></h4><a class="tel" href="tel:+<?php echo $formRepTel; ?>"><?php echo $formTel; ?></a>
    </div>
</section>
<?php include 'our-clients.php'?>
<section class="portfolio">
    <div class="container">
        <h3>ПРИМЕРЫ НАШИХ РАБОТ</h3>
        <div class="fotorama" data-nav="thumbs" data-width="100%" data-ratio="990/600" data-fit="cover"
            data-minwidth="300" data-maxwidth="900" data-minheight="300" data-maxheight="100%">

            <?php
                if( have_rows('field_5df77d199c3cb') ): 
                while ( have_rows('field_5df77d199c3cb') ) : the_row();  
            ?> 

                <a href="<?php echo get_sub_field('field_5df77d489c3cd'); ?>"><img src="<?php echo get_sub_field('field_5df77d489c3cd'); ?>" /></a></a>

            <?php endwhile; endif; ?>

        </div>
    </div>
</section>
<div class="pagination-page"><a class="dots active" href="#first-screen"></a><a class="dots"
        href="#steps-for-successful"></a><a class="dots" href="#what-we-do"></a><a class="dots" href="#why-we"></a><a
        class="dots" href="#our-clients"></a><a class="dots" href="#footer"></a></div>

<?php include 'div.php'?> <!-- page__content -->
<?php include 'footer-block.php'?>
<?php include 'div.php'?> <!-- page -->
<?php get_footer(); ?>