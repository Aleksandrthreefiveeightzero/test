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

<h3><?=__( 'Plugin Settings', 'vdz_call_back' )?></h3>
<form action="options.php" method="POST">
    <?php
        //Выводи идентификаторы группы полей + wp_nonce для нашего действия
        settings_fields('vdz_call_back_plugin_settings_group');
        //Получаем данные из базы
        $vdz_cb_plugin_settings = get_option('vdz_cb_plugin_settings');
    ?>
    <div class="row">
        <div class="medium-12 columns">
            <label><?=__( 'Send Email to:', 'vdz_call_back' )?>
                <input type="email" placeholder="<?=get_option('admin_email')?>" name="vdz_cb_plugin_settings[vdz_cb_plugin_email]" value="<?=isset($vdz_cb_plugin_settings['vdz_cb_plugin_email']) ? esc_attr($vdz_cb_plugin_settings['vdz_cb_plugin_email']) : ''?>">
            </label>
            <div class="success callout" data-closable>
                <?=__( 'Default send on Wordpress admin email: ', 'vdz_call_back' )?>
                <a href="mailto:<?=get_option('admin_email')?>"><?=get_option('admin_email')?></a>
                <button class="close-button hide" aria-label="Dismiss alert" type="button" data-close>
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
        <div class="medium-12 columns">
            <label><?=__( 'Send to other Emails:', 'vdz_call_back' )?>
                <input type="text" placeholder="<?=get_option('admin_email')?>,<?=get_option('admin_email')?>" name="vdz_cb_plugin_settings[vdz_cb_plugin_more_emails]" value="<?=isset($vdz_cb_plugin_settings['vdz_cb_plugin_more_emails']) ? esc_attr($vdz_cb_plugin_settings['vdz_cb_plugin_more_emails']) : ''?>">
            </label>
            <div class="success callout" data-closable>
                <?=__( 'Enter a comma-delimited email address with no spaces', 'vdz_call_back' )?>
                <button class="close-button hide" aria-label="Dismiss alert" type="button" data-close>
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
        <div class="medium-12 columns">
            <label>
                <?=__( 'Action button class:', 'vdz_call_back' )?>
                <input type="text" placeholder="vdz_cb_btn " name="vdz_cb_plugin_settings[vdz_cb_popup_action_button_class]" value="<?=isset($vdz_cb_plugin_settings['vdz_cb_popup_action_button_class']) ? esc_attr($vdz_cb_plugin_settings['vdz_cb_popup_action_button_class']) : ''?>">
            </label>
            <div class="success callout" data-closable>
                <?=__( 'Default use class "vdz_cb_btn"', 'vdz_call_back' )?>
            </div>
        </div>
        <div class="medium-12 columns">
            <label><?=__( 'Mail subject', 'vdz_call_back' )?>
                <input type="text" placeholder="<?=__( 'Call back', 'vdz_call_back' )?>" name="vdz_cb_plugin_settings[vdz_cb_plugin_custom_mail_subject]" value="<?=isset($vdz_cb_plugin_settings['vdz_cb_plugin_custom_mail_subject']) ? esc_attr($vdz_cb_plugin_settings['vdz_cb_plugin_custom_mail_subject']) : ''?>">
            </label>
            <div class="success callout" data-closable>
                <?=__( 'Default subject: ', 'vdz_call_back' ).' "'.__( 'Call back', 'vdz_call_back' ).'"'?>
            </div>
        </div>
        <div class="medium-12 columns">
            <label>
                <strong><?=__( 'Use custom mail', 'vdz_call_back' )?></strong>
                <input type="checkbox" name="vdz_cb_plugin_settings[vdz_cb_plugin_custom_mail]" value="1" <?=(isset($vdz_cb_plugin_settings['vdz_cb_plugin_custom_mail']) && ($vdz_cb_plugin_settings['vdz_cb_plugin_custom_mail'] == 1)) ? 'checked="checked"' : ''?>>
            </label>
        </div>
        <div class="medium-12 columns">

            <label>
                <?=__( 'Custom mail Text', 'vdz_call_back' )?>
                <textarea name="vdz_cb_plugin_settings[vdz_cb_plugin_custom_mail_text]" id="" cols="30" rows="5"><?=isset($vdz_cb_plugin_settings['vdz_cb_plugin_custom_mail_text']) ? esc_attr($vdz_cb_plugin_settings['vdz_cb_plugin_custom_mail_text']) : ''?></textarea>
            </label>
            <div class="success callout" data-closable>
                <?=__( 'Default empty. Use only TEXT here. Shortcode for send information: [name], [phone], [page]', 'vdz_call_back' )?>
            </div>
        </div>
        <div class="medium-12 columns">
            <button type="submit" class="button-primary button">
                <?=__( 'Save Plugin options', 'vdz_call_back' )?>
            </button>
        </div>
    </div>
</form>
