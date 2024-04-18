<?php get_header(); ?>
<section class="first-screen" style="background-image: url(<?php echo get_field('field_5df7934fa354a'); ?>)"
    id="first-screen">
    <div class="container">
        <h1><?php echo get_field('field_5df7934fa3591'); ?></h1>
        <?php
            $telephoneHeadSection = get_field('field_5df7934fa35fc');
            $telephoneRepHeadSection = preg_replace('/[^0-9]/', '', $telephoneHead);
        ?>
        <h6>Звоните нам <a href="tel:+<?php echo $telephoneRepHeadSection; ?>"><?php echo $telephoneHeadSection; ?></h6>
        <a class="btn" href="#section-application-for-free-measurement">Бесплатная консультация</a>
    </div>
</section>
<section class="application-for-free-measurement" id="section-application-for-free-measurement">
    <div class="container">
        <h3><?php echo get_field('field_5df7934fa36d1'); ?></h3>
        <div class="wrapper-form">
            <?php echo do_shortcode('[contact-form-7 id="236" title="Форма страницы Кондиционеры"]'); ?>
        </div>
        <p><?php echo get_field('field_5df7934fa373c'); ?><a href="<?php echo get_field('field_5df7934fa3811'); ?>"
                class="pol-cong"><?php echo get_field('field_5df7934fa37a7'); ?></a></p>
    </div>
</section>
<section class="steps-for-successful" id="steps-for-successful">
    <div class="container">
        <h3><?php echo get_field('field_5df7934fa38e6'); ?></h3>
        <div class="wrapper_items">
            <?php
                $counter = 1;
                if( have_rows('field_5df7934fa3943') ):
                while ( have_rows('field_5df7934fa3943') ) : the_row();
            ?>
            <div class="steps-success"><span>0<?php echo $counter; ?></span>
                <div class="wrapper_icon">
                    <img class="svg" src="<?php echo get_sub_field('field_5df7934fd996a'); ?>" alt="">
                </div>
                <h4><?php echo get_sub_field('field_5df7934fd99d6'); ?></h4>
                <?php 
                        if( get_sub_field('field_5df7934fd9a41') ): 
                    ?>
                <?php
                            if( have_rows('field_5df7934fd9aac') ): 
                            while ( have_rows('field_5df7934fd9aac') ) : the_row();  
                        ?>
                <p><?php echo get_sub_field('field_5df7934fde368'); ?></p>
                <?php endwhile; endif; ?>
                <?php endif; ?>
            </div>
            <?php $counter++; endwhile; endif; ?>
        </div>
    </div>
</section>
<section class="what-we-do" id="what-we-do"
    style="background-image: url(<?php echo get_field('field_5df7934fe373e'); ?>);">
    <div class="container">
        <h3><?php echo get_field('field_5df7934fe25f3'); ?></h3>
        <div class="wwd-items">

            <?php
                if( have_rows('field_5df7934fe45f4') ): 
                while ( have_rows('field_5df7934fe45f4') ) : the_row();  
            ?>

            <div class="wwd-item">
                <div class="wrapper_icon">
                    <img class="svg" src="<?php echo get_sub_field('field_5df7934fe5658'); ?>" alt="">
                </div>
                <p><?php echo get_sub_field('field_5df7934fe56c5'); ?></p>
            </div>

            <?php endwhile; endif; ?>
        </div>
    </div>
</section>
<section class="why-we" id="why-we">
    <div class="container">
        <h3><?php echo get_field('field_5df7934fe8b3f'); ?></h3>
        <p><?php echo get_field('field_5df7934fe9a28'); ?></p>
        <p class="p-red-block"><?php echo get_field('field_5df7934fea70c'); ?></p>
        <p><?php echo get_field('field_5df7934feb815'); ?></p>
        <div class="wrapper-img"><img src="<?php echo get_field('field_5df7934fef10f'); ?>" alt="">
            <div class="special-offer-block-1"><img src="<?php echo get_template_directory_uri(); ?>/img/special-offer-block-1-img.jpg" alt="">
                <div class="special-offer-block-1-txt">
                    <p><?php echo get_field('field_5df7934feca90'); ?></p>
                </div>
            </div>
            <p class="special-offer-block-2"><span>Диагностика </span><span>+ </span><span>Чистка </span><span>+
                </span><span>Дозаправка </span><span>+ </span><span>Фреон</span></p>
            <div class="special-offer-block-3">
                <p><?php echo get_field('field_5df7934fed7c4'); ?></p>
                <p><?php echo get_field('field_5df7934fee4b2'); ?></p>
            </div>
        </div>
    </div>
</section>
<section class="application-for-free-measurement">
    <div class="container">
        <h3><?php echo get_field('field_5df7934fa36d1'); ?></h3>
        <div class="wrapper-form">
            <?php echo do_shortcode('[contact-form-7 id="236" title="Форма страницы Кондиционеры"]'); ?>
        </div>
        <p><?php echo get_field('field_5df7934fa373c'); ?><a href="<?php echo get_field('field_5df7934fa3811'); ?>"
                class="pol-cong"><?php echo get_field('field_5df7934fa37a7'); ?></a></p>
        <?php
            $formTel = get_field('field_5df7934ff2242');
            $formRepTel = preg_replace('/[^0-9]/', '', $formTel);
        ?>
        <h4><?php echo get_field('field_5df7934ff1614'); ?></h4><a class="tel"
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
                if( have_rows('field_65003b8f35d5a') ):
                while ( have_rows('field_65003b8f35d5a') ) : the_row();
            ?>

            <a href="<?php echo get_sub_field('field_65003c0135d5b'); ?>"><img
                    src="<?php echo get_sub_field('field_65003c0135d5b'); ?>" /></a></a>

            <?php endwhile; endif; ?>

        </div>
    </div>
</section>
<div class="pagination-page">
    <a class="dots active" href="#first-screen"></a>
    <a class="dots" href="#steps-for-successful"></a>
    <a class="dots" href="#what-we-do"></a>
    <a class="dots" href="#why-we"></a>
    <a class="dots" href="#our-clients"></a>
    <a class="dots" href="#footer"></a>
</div>
<div id="dphone" class="dphone" hidden>
    <a class="aphone" href="#section-application-for-free-measurement"><img src="<?php echo get_template_directory_uri();?>/img/tphone.png"></a>
</div>


<?php include 'div.php'?>
<!-- page__content -->
<?php include 'footer-block.php'?>
<?php include 'div.php'?>
<!-- page -->
<?php get_footer(); ?>