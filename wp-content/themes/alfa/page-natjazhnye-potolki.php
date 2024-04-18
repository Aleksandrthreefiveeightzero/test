<?php get_header(); ?>
<section class="first-screen" style="background-image: url(<?php echo get_field('field_5df7ac5fb9651'); ?>)"
    id="first-screen">
    <div class="container">
        <h1><?php echo get_field('field_5df7ac5fb96bf'); ?></h1>
        <?php
            $telephoneHeadSection = get_field('field_5df7ac5fb9731');
            $telephoneRepHeadSection = preg_replace('/[^0-9]/', '', $telephoneHead);
        ?>
        <h6>Звоните нам <a href="tel:+<?php echo $telephoneRepHeadSection; ?>"><?php echo $telephoneHeadSection; ?></h6>
        <a class="btn" href="#section-application-for-free-measurement">Бесплатный замер</a>
    </div>
</section>
<section class="application-for-free-measurement" id="section-application-for-free-measurement">
    <div class="container">
        <h3><?php echo get_field('field_5df7ac5fb9815'); ?></h3>
        <div class="wrapper-form">
            <?php echo do_shortcode('[contact-form-7 id="237" title="Форма страницы Натяжные потолки"]'); ?>
        </div>
        <p><?php echo get_field('field_5df7ac5fb9886'); ?><a href="<?php echo get_field('field_5df7ac5fb9968'); ?>"
                class="pol-cong"><?php echo get_field('field_5df7ac5fb98f7'); ?></a></p>
    </div>
</section>
<section class="steps-for-successful" id="steps-for-successful">
    <div class="container">
        <h3><?php echo get_field('field_5df7ac5fb9a4d'); ?></h3>
        <div class="wrapper_items">
            <?php
                $counter = 1;
                if( have_rows('field_5df7ac5fb9abf') ): 
                while ( have_rows('field_5df7ac5fb9abf') ) : the_row();  
            ?>
            <div class="steps-success"><span>0<?php echo $counter; ?></span>
                <div class="wrapper_icon">
                    <img class="svg" src="<?php echo get_sub_field('field_5df7ac604478a'); ?>" alt="">
                </div>
                <h4><?php echo get_sub_field('field_5df7ac60447f6'); ?></h4>
                <?php 
                        if( get_sub_field('field_5df7ac6044860') ): 
                    ?>
                <?php
                            if( have_rows('field_5df7ac60448ca') ): 
                            while ( have_rows('field_5df7ac60448ca') ) : the_row();  
                        ?>
                <p><?php echo get_sub_field('field_5df7ac6047575'); ?></p>
                <?php endwhile; endif; ?>
                <?php endif; ?>
            </div>
            <?php $counter++; endwhile; endif; ?>
        </div>
    </div>
</section>
<section class="what-we-do" id="what-we-do"
    style="background-image: url(<?php echo get_field('field_5df7ac604ad6a'); ?>);">
    <div class="container">
        <h3><?php echo get_field('field_5df7ac604a1be'); ?></h3>
        <div class="wwd-items">

            <?php
                if( have_rows('field_5df7ac604b973') ): 
                while ( have_rows('field_5df7ac604b973') ) : the_row();  
            ?>

            <div class="wwd-item">
                <div class="wrapper_icon">
                    <img class="svg" src="<?php echo get_sub_field('field_5df7ac604c466'); ?>" alt="">
                </div>
                <p><?php echo get_sub_field('field_5df7ac604c4d2'); ?></p>
            </div>

            <?php endwhile; endif; ?>
        </div>
    </div>
</section>
<section class="why-we" id="why-we">
    <div class="container">
        <h3><?php echo get_field('field_5df7ac604ed94'); ?></h3>
        <p><?php echo get_field('field_5df7ac604f768'); ?></p>
        <p class="p-red-block"><?php echo get_field('field_5df7ac605014b'); ?></p>
        <p><?php echo get_field('field_5df7ac6050af6'); ?></p>
        <div class="wrapper-img"><img src="<?php echo get_field('field_5df7ac60531f7'); ?>" alt="">
            <div class="special-offer-block-1"><img src="<?php echo get_template_directory_uri(); ?>/img/special-offer-block-1-img.jpg" alt="">
                <div class="special-offer-block-1-txt">
                    <p><?php echo get_field('field_5df7ac60514b7'); ?></p>
                </div>
            </div>
            <p class="special-offer-block-2"><?php echo get_field('field_5df7ac6051e6e'); ?></p>
            <div class="special-offer-block-3">
                <p><?php echo get_field('field_5df7ac6052841'); ?></p>
                <p><?php echo get_field('field_5df7ad405fb01'); ?></p>
            </div>
        </div>
    </div>
</section>
<section class="application-for-free-measurement">
    <div class="container">
        <h3><?php echo get_field('field_5df7ac5fb9815'); ?></h3>
        <div class="wrapper-form">
            <?php echo do_shortcode('[contact-form-7 id="237" title="Форма страницы Натяжные потолки"]'); ?>
        </div>
        <p><?php echo get_field('field_5df7ac5fb9886'); ?><a href="<?php echo get_field('field_5df7ac5fb9968'); ?>"
                class="pol-cong"><?php echo get_field('field_5df7ac5fb98f7'); ?></a></p>
        <?php
            $formTel = get_field('field_5df7ac60550ac');
            $formRepTel = preg_replace('/[^0-9]/', '', $formTel);
        ?>
        <h4><?php echo get_field('field_5df7ac6054579'); ?></h4><a class="tel"
            href="tel:+<?php echo $formRepTel; ?>"><?php echo $formTel; ?></a>
    </div>
</section>
<?php include 'our-clients.php'?>
<section class="portfolio">
    <div class="container">
        <h3>ПРИМЕРЫ НАШИХ РАБОТ</h3>
        <div class="fotorama" data-nav="thumbs" data-width="100%" data-ratio="990/600" data-fit="cover"
            data-minwidth="300" data-maxwidth="900" data-minheight="300" data-maxheight="100%">

            <?php
                if( have_rows('field_5df7ac605664a') ): 
                while ( have_rows('field_5df7ac605664a') ) : the_row();  
            ?>

            <a href="<?php echo get_sub_field('field_5df7ac636d42b'); ?>"><img
                    src="<?php echo get_sub_field('field_5df7ac636d42b'); ?>" /></a></a>

            <?php endwhile; endif; ?>

        </div>
    </div>
</section>
<div class="pagination-page"><a class="dots active" href="#first-screen"></a><a class="dots"
        href="#steps-for-successful"></a><a class="dots" href="#what-we-do"></a><a class="dots" href="#why-we"></a><a
        class="dots" href="#our-clients"></a><a class="dots" href="#footer"></a></div>

<?php include 'div.php'?>
<!-- page__content -->
<?php include 'footer-block.php'?>
<?php include 'div.php'?>
<!-- page -->
<?php get_footer(); ?>