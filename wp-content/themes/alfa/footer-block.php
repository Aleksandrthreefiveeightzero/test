<footer class="footer" id="footer">
    <div class="container">
        <h3><?php echo get_field('field_5df3991f26233', 15); ?></h3>
        <div class="inner-container-for-contact">
            <div class="con_item">
                <img class="svg" src="<?php echo get_field('field_5df39acb26236', 15); ?>" alt="">
                <?php
                    $telephoneHeadItem1 = get_field('field_5df3996426235', 15);
                    $telephoneRepHeadItem1 = preg_replace('/[^0-9]/', '', $telephoneHeadItem1);
                ?>
                <a href="tel:<?php echo $telephoneRepHeadItem1; ?>"><?php echo $telephoneHeadItem1; ?></a>
            </div>
            <div class="con_item">
                <img class="svg" src="<?php echo get_field('field_5df39b3426238', 15); ?>" alt="">
                <?php
                    $telephoneHeadItem2 = get_field('field_5df39b4b26239', 15);
                    $telephoneRepHeadItem2 = preg_replace('/[^0-9]/', '', $telephoneHeadItem2);
                ?>
                <a href="tel:<?php echo $telephoneRepHeadItem2; ?>"><?php echo $telephoneHeadItem2; ?></a>
            </div>
            <div class="con_item">
                <img class="svg" src="<?php echo get_field('field_5df39b7e2623c', 15); ?>" alt="">
                <address><?php echo get_field('field_5df39bc02623e', 15); ?></address>
            </div>
            <div class="con_item">
                <img class="svg" src="<?php echo get_field('field_5df39b842623d', 15); ?>" alt="">
                <div class="wrapper-link">
                    <a href="mailto:<?php echo get_field('field_5df39bec2623f', 15); ?>"><?php echo get_field('field_5df39bec2623f', 15); ?></a>
                    <a href="mailto:<?php echo get_field('field_5df39c0026241', 15); ?>"><?php echo get_field('field_5df39c0026241', 15); ?></a>
                </div>
            </div>
        </div>
        <div class="inner-container-for-soc">
            <a class="soc_item" href="<?php echo "https://www.instagram.com/alfa_company27/"; ?>"><img src="<?php echo get_template_directory_uri();?>/img/instagram.svg"></a>
            <a class="soc_item"href="<?php echo "https://vk.com/public193094849"; ?>"><img src="<?php echo get_template_directory_uri();?>/img/vk.svg"></a>
            <a class="soc_item" href="<?php echo "https://ok.ru/group/56710384910350"; ?>"><img src="<?php echo get_template_directory_uri();?>/img/odnoklassniki.svg"></a>
        </div>
        <h6 class="copy">© 2019 - <?php echo date('Y'); ?> <?php echo get_field('field_5df78aaf00891', 15); ?></h6>
    </div>
</footer>

<div class="up_btn" id="back-top">
    <svg class="ico ico-arrow-left">
        <use xlink:href="<?php echo get_template_directory_uri();?>/img/sprite.svg#ico-arrow-left"></use>
    </svg>
</div>

<div id="tphone" class="tphone-page" hidden>
    <a class="dots" href="#section-application-for-free-measurement"><img src="<?php echo get_template_directory_uri();?>/img/tphone.png"></a>
</div>

<div class="modal-content mfp-hide white-popup-block my-mfp-slide-bottom modal-form-tnx" id="modal-form-tnx">
    <div class="popup-buble">
        <div class="popup-dialog">
            <h2>Cпасибо за заявку!</h2>
            <p>Мы свяжемся с вами в ближайшее время</p>
        </div>
    </div>
</div>