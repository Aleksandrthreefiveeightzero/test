<?php
/**
 *
 *  * @ author ( Zikiy Vadim )
 *  * @ site http://online-services.org.ua
 *  * @ VDZ Call Back - wordpress plugin
 *  * @ copyright Copyright (C) 2016 All rights reserved.
 *
 */
?>
<h3><?=__( 'Test', 'vdz_call_back' )?></h3>

<form action="options.php" method="POST">
<?php
//Выводи идентификаторы группы полей + wp_nonce для нашего действия
settings_fields('vdz_call_back_test_settings_group');
//Получаем данные из базы
$vdz_cb_test_settings = get_option('vdz_cb_test_settings');
?>
    <div class="row">
    <div class="medium-12 columns">
        <label>
            <?=__( 'Shortcode:', 'vdz_call_back' )?>
            <input type="text" placeholder="<?=__( 'Write your shortcode here', 'vdz_call_back' )?>" name="vdz_cb_test_settings[vdz_cb_test_shortcode]" value="<?=esc_attr($vdz_cb_test_settings['vdz_cb_test_shortcode'])?>">
        </label>
        <div class="success callout" data-closable>
            <?=__( 'Default use code:', 'vdz_call_back' )?> "[vdz_cb]popup button[/vdz_cb]"
        </div>
    </div>
        <div class="medium-12 columns">
            <button type="submit" class="button-primary button">
                <?=__( 'Save TEST options', 'vdz_call_back' )?>
            </button>
        </div>
    </div>
</form>
<hr/>
<h3><?=__( 'Shortcode in action:', 'vdz_call_back' )?></h3>
<div class="warning callout" data-closable>
    <p><?=__( 'Warning on this page used wordpress and foundation framework styles. Your fields and button styles may be different on front', 'vdz_call_back' )?></p>
</div>
<hr/>
<div class="row">
    <div class="medium-12 columns">
        <?php
            $vdz_cb_test_shortcode = !empty($vdz_cb_test_settings['vdz_cb_test_shortcode']) ? $vdz_cb_test_settings['vdz_cb_test_shortcode'] : '[vdz_cb]popup button[/vdz_cb]';
            echo do_shortcode($vdz_cb_test_shortcode);
        ?>
    </div>
</div>
