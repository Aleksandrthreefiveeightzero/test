<?php get_header(); ?>

<section class="main-slider">
    <div class="swiper-container main-slider-swiper">
        <div class="swiper-wrapper">

            <?php 
                if( have_rows('field_5df391cd30270') ): 
                while ( have_rows('field_5df391cd30270') ) : the_row();  
            ?>
                <div class="swiper-slide" style="background-image: url(<?php echo get_sub_field('field_5df391e230271'); ?>)">
                    <h2><?php echo get_sub_field('field_5df392196ebab'); ?></h2>
                    <a class="btn" href="<?php echo get_sub_field('field_5df3933b649a1'); ?>">Подробнее</a>
                 </div>
            <?php endwhile; endif; ?>
        </div>
        <!-- Add Arrows-->
        <div class="swiper-button-next main-slider-button-next">
            <svg class="ico ico-arrow-right">
                <use xlink:href="<?php echo get_template_directory_uri();?>/img/sprite.svg#ico-arrow-right"></use>
            </svg>
        </div>
        <div class="swiper-button-prev main-slider-button-prev">
            <svg class="ico ico-arrow-left">
                <use xlink:href="<?php echo get_template_directory_uri();?>/img/sprite.svg#ico-arrow-left"></use>
            </svg>
        </div>
        <!-- Add Pagination-->
        <div class="swiper-pagination main-slider-swiper-pagination"></div>
    </div>
</section>


<?php include 'div.php'?> <!-- page__content -->
<?php include 'div.php'?> <!-- page -->
<?php get_footer(); ?>