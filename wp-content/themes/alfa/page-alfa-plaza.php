<?php get_header(); ?>
<section class="first-screen" style="background-image: url(<?php echo get_field('field_64f472731636a'); ?>)"
    id="first-screen">
    <div class="container">
        <h1><?php echo get_field('field_64f472b61636b'); ?></h1>
        <?php
            $telephoneHeadSection = get_field('field_64f472dc1636c');
            $telephoneRepHeadSection = preg_replace('/[^0-9]/', '', $telephoneHead);
        ?>
        <h6>Звоните нам <a href="tel:+<?php echo $telephoneRepHeadSection; ?>"><?php echo $telephoneHeadSection; ?></h6>
        <a class="btn" href="#application-for-free-measurement">Бесплатная консультация</a>
    </div>
</section>
<section class="steps-for-successful" id="steps-for-successful">
    <div class="container">
        <h3><?php echo get_field('field_64fee9b6b55ab'); ?></h3>
        <div class="wrapper_items">
            <?php
            $counter = 1;
            if( have_rows('field_64fee9e773b72') ):
                while ( have_rows('field_64fee9e773b72') ) : the_row();
                    ?>
                    <div class="steps-success"><span>0<?php echo $counter; ?></span>
                        <div class="wrapper_icon">
                            <img class="svg" src="<?php echo get_sub_field('field_64feea26e8fd9'); ?>" alt="">
                        </div>
                        <h4><?php echo get_sub_field('field_64feea59e8fda'); ?></h4>
                        <?php
                        if( get_sub_field('field_64feea6de8fdb') ):
                            ?>
                            <?php
                            if( have_rows('field_64feea94e8fdc') ):
                                while ( have_rows('field_64feea94e8fdc') ) : the_row();
                                    ?>
                                    <p><?php echo get_sub_field('field_64feeafa86848'); ?></p>
                                <?php endwhile; endif; ?>
                        <?php endif; ?>
                    </div>
                    <?php $counter++; endwhile; endif; ?>
        </div>
    </div>
</section>
<section class="what-we-do" id="what-we-do"
         style="background-image: url(<?php echo get_field('field_64fef1b03d57e'); ?>);">
    <div class="container">
        <h3><?php echo get_field('field_64fef1903d57d'); ?></h3>
        <p><?php echo get_field('field_650c5f016f796'); ?></p><br>
        <p><?php echo get_field('field_650c5f536f797'); ?></p><br>
        <p><?php echo get_field('field_650c5f6c6f798'); ?></p><br>
        <p><?php echo get_field('field_650c5f7b6f799'); ?></p><br><br>
        <div class="wwd-items">

            <?php
            if( have_rows('field_64fef1ff3d57f') ):
                while ( have_rows('field_64fef1ff3d57f') ) : the_row();
                    ?>

                    <div class="wwd-item">
                        <div class="wrapper_icon">
                            <img class="svg" src="<?php echo get_sub_field('field_64fef22b3d580'); ?>" alt="">
                        </div>
                        <p><?php echo get_sub_field('field_64fef2563d581'); ?></p>
                    </div>

                <?php endwhile; endif; ?>
        </div>
    </div>
</section>
<section class="alfa-online-store" id="alfa-online-store">
    <div class="container">
        <div class="wrapper_items">
            <?php
                if( have_rows('field_6500820584598') ):
                while ( have_rows('field_6500820584598') ) : the_row();
            ?>
            <div class="product-wrap">
                <div class="product-image">
                    <a href=""><img src="<?php echo get_sub_field('field_6500828a8459a'); ?>" alt=""></a>
                </div>
                <div class="product-list">
                    <h3 id="name"><?php echo get_sub_field('field_6500828a8459b'); ?></h3>
                    <div class="price" id="price">&#8381; <?php echo get_sub_field('field_6500828a8459c'); ?></div>
                    <div class="quantity-counter">
                        <button class="button-minus">&#8722;</button>
                        <div class="quantity-box"><span class="quantity-value">0</span></div>
                        <button class="button-plus">&#43;</button>
                    </div>
                    <h3>Монтаж</h3>
                    <div class="price" id="install-price">&#8381; <?php echo get_sub_field('field_6500828a8459d'); ?></div>
                    <div class="total">Total: &#8381; 0<!--<?php echo (get_sub_field('field_6500828a8459c') + get_sub_field('field_6500828a8459d')); ?>--></div>
                    <div class="add-to-cart">
                        <a class="add-to-cart-button" href="#" title="Добавить в корзину"></a>
                    </div>
                </div>
            </div>
            <?php endwhile; endif; ?>
        </div>
    </div>
</section>
<section class="application-for-free-measurement" id="application-for-free-measurement">
    <div class="container">
        <h3><?php echo get_field('field_64ff15bfc98c1'); ?></h3>
        <div class="wrapper-form">
            <?php echo do_shortcode('[contact-form-7 id="236" title="Форма страницы Кондиционеры"]'); ?>
        </div>
        <p><?php echo get_field('field_64ff15d9c98c2'); ?><a href="<?php echo get_field('field_64ff1629c98c4'); ?>"
                                                             class="pol-cong"><?php echo get_field('field_64ff15fdc98c3'); ?></a></p>
        <?php
        $formTel = get_field('field_64ff1a46e2349');
        $formRepTel = preg_replace('/[^0-9]/', '', $formTel);
        ?>
        <h4><?php echo get_field('field_64ff1697e2348'); ?></h4><a class="tel"
                                                                   href="tel:+<?php echo $formRepTel; ?>"><?php echo $formTel; ?></a>
    </div>
</section>
<section class="portfolio" id="portfolio">
    <div class="container">
        <h3>ПРОЕКТЫ MDV</h3>
        <div class="fotorama" data-nav="thumbs" data-width="100%" data-ratio="990/600" data-fit="cover"
             data-minwidth="300" data-maxwidth="900" data-minheight="300" data-maxheight="100%">

            <?php
            if( have_rows('field_650040eb81112') ):
                while ( have_rows('field_650040eb81112') ) : the_row();
                    ?>

                    <a href="<?php echo get_sub_field('field_6500411181113'); ?>"><img
                                src="<?php echo get_sub_field('field_6500411181113'); ?>" /></a></a>

                <?php endwhile; endif; ?>

        </div>
    </div>
</section>

<div class="pagination-page">
    <a class="dots active" href="#first-screen"></a>
    <a class="dots" href="#steps-for-successful"></a>
    <a class="dots" href="#what-we-do"></a>
    <a class="dots" href="#alfa-online-store"></a>
    <a class="dots" href="#portfolio"></a>
    <a class="dots" href="#footer"></a>
</div>
<div class="cart" hidden>
    <div id="cart-icon" class="cart-icon">
        <img src="<?php echo get_template_directory_uri();?>/img/cart.png">
    </div>
    <div id="cart-red-dot" class="cart-red-dot" hidden>
        <img src="<?php echo get_template_directory_uri();?>/img/cart-red-dot.png">
        <p id="cart-total-quantity" class="cart-total-quantity centered">0</p>
    </div>
</div>


<?php include 'div.php'?>
<!-- page__content -->
<?php include 'footer-block.php'?>
<?php include 'div.php'?>
<!-- page -->
<?php get_footer(); ?>