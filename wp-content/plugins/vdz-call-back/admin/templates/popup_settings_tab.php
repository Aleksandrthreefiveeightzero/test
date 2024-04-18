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

<h3><?=__( 'Popup Settings', 'vdz_call_back' )?></h3>
<form action="options.php" method="POST">
    <?php
    //Выводи идентификаторы группы полей + wp_nonce для нашего действия
    settings_fields('vdz_call_back_popup_settings_group');
    //Получаем данные из базы
    $vdz_cb_popup_settings = get_option('vdz_cb_popup_settings');
    ?>
    <div class="row">
        <div class="medium-12 columns">
            <label>
                <?=__( 'Popup Title:', 'vdz_call_back' )?>
                <input type="text" placeholder="<?=__( 'Call back', 'vdz_call_back' )?>" name="vdz_cb_popup_settings[vdz_cb_popup_title]" value="<?=isset($vdz_cb_popup_settings['vdz_cb_popup_title']) ? esc_attr($vdz_cb_popup_settings['vdz_cb_popup_title']) : ''?>">
            </label>
            <div class="success callout" data-closable>
                <?=__( 'Default use text "Call back"', 'vdz_call_back' )?>
            </div>
        </div>
        <div class="medium-12 columns">
            <label>
                <?=__( 'Name placeholder:', 'vdz_call_back' )?>
                <input type="text" placeholder="<?=__( 'Name', 'vdz_call_back' )?>" name="vdz_cb_popup_settings[vdz_cb_popup_name]" value="<?=isset($vdz_cb_popup_settings['vdz_cb_popup_name']) ? esc_attr($vdz_cb_popup_settings['vdz_cb_popup_name']) : ''?>">
            </label>
            <label>
                <strong><?=__( 'Required field Name: ', 'vdz_call_back' )?></strong>
                <input type="checkbox" name="vdz_cb_popup_settings[vdz_cb_popup_name_required]" value="1" <?=(isset($vdz_cb_popup_settings['vdz_cb_popup_name_required']) && ($vdz_cb_popup_settings['vdz_cb_popup_name_required'] == 1)) ? 'checked="checked"' : ''?> >
            </label>
            <div class="success callout" data-closable>
                <?=__( 'Default use text "Name"', 'vdz_call_back' )?>
            </div>
        </div>
        <div class="medium-12 columns">
            <label>
                <?=__( 'Phone placeholder:', 'vdz_call_back' )?>
                <input type="text" placeholder="<?=__( 'Phone', 'vdz_call_back' )?>" name="vdz_cb_popup_settings[vdz_cb_popup_phone]" value="<?=isset($vdz_cb_popup_settings['vdz_cb_popup_phone']) ? esc_attr($vdz_cb_popup_settings['vdz_cb_popup_phone']) : ''?>">
            </label>
            <div class="success callout" data-closable>
                <?=__( 'Default use text "Phone"', 'vdz_call_back' )?>
            </div>
        </div>
        <div class="medium-12 columns">
            <label>
                <?=__( 'Phone Mask: ', 'vdz_call_back' )?>
                <input type="text" placeholder="(999) 999-99-99" name="vdz_cb_popup_settings[vdz_cb_popup_mask]" value="<?=isset($vdz_cb_popup_settings['vdz_cb_popup_mask']) ? esc_attr($vdz_cb_popup_settings['vdz_cb_popup_mask']) : ''?>">
            </label>

            <label>
                <strong><?=__( 'Deactivate Phone Mask: ', 'vdz_call_back' )?></strong>
                <input type="checkbox" name="vdz_cb_popup_settings[vdz_cb_popup_mask_off]" value="1" <?=(isset($vdz_cb_popup_settings['vdz_cb_popup_mask_off']) && ($vdz_cb_popup_settings['vdz_cb_popup_mask_off'] == 1)) ? 'checked="checked"' : ''?>>
            </label>
            <div class="success callout" data-closable>
                <?php echo sprintf( __( 'Default mask (XXX) XXX-XX-XX. For customize see more  %s', 'vdz_call_back' ), '<a href="https://github.com/digitalBush/jquery.maskedinput" target="_blank">jQuery masked input popup</a>' );?>
                <button class="close-button hide" aria-label="Dismiss alert" type="button" data-close>
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
        <div class="medium-12 columns">
            <label>
                <?=__( 'Popup button text:', 'vdz_call_back' )?>
                <input type="text" placeholder="<?=__( 'Send', 'vdz_call_back' )?>" name="vdz_cb_popup_settings[vdz_cb_popup_button]" value="<?=isset($vdz_cb_popup_settings['vdz_cb_popup_button']) ? esc_attr($vdz_cb_popup_settings['vdz_cb_popup_button']) : ''?>">
            </label>
            <div class="success callout" data-closable>
                <?=__( 'Default use text "Send"', 'vdz_call_back' )?>
            </div>
        </div>
        <div class="medium-12 columns">
            <label>
                <?=__( 'Popup button class:', 'vdz_call_back' )?>
                <input type="text" placeholder="button btn btn-default " name="vdz_cb_popup_settings[vdz_cb_popup_button_class]" value="<?=isset($vdz_cb_popup_settings['vdz_cb_popup_button_class']) ? esc_attr($vdz_cb_popup_settings['vdz_cb_popup_button_class']) : ''?>">
            </label>
            <div class="success callout" data-closable>
                <?=__( 'Default use class "button btn btn-default"', 'vdz_call_back' )?>
            </div>
        </div>
        <div class="medium-12 columns">
            <label>
			    <?=__( 'Custom form fields', 'vdz_call_back' )?>
                <textarea name="vdz_cb_popup_settings[vdz_cb_popup_custom_fields]" id="" cols="30" rows="5"><?=isset($vdz_cb_popup_settings['vdz_cb_popup_custom_fields']) ? esc_attr($vdz_cb_popup_settings['vdz_cb_popup_custom_fields']) : ''?></textarea>
            </label>
            <div class="success callout" data-closable>
			    <?=__( 'Default empty. Use TEXT or HTML here. Allow Input / Textarea / Select / Option tags', 'vdz_call_back' )?>
            </div>
        </div>
        <div class="medium-12 columns">
            <label>
                <?=__( 'Popup Text', 'vdz_call_back' )?>
                <textarea name="vdz_cb_popup_settings[vdz_cb_popup_text]" id="" cols="30" rows="5"><?=isset($vdz_cb_popup_settings['vdz_cb_popup_text']) ? esc_attr($vdz_cb_popup_settings['vdz_cb_popup_text']) : ''?></textarea>
            </label>
            <div class="success callout" data-closable>
                <?=__( 'Default empty. Use TEXT or HTML here', 'vdz_call_back' )?>
            </div>
        </div>
        <div class="medium-12 columns">
            <label>
                <?=__( 'Error text after send', 'vdz_call_back' )?>
                <textarea name="vdz_cb_popup_settings[vdz_cb_popup_error]" id="" cols="30" rows="2" placeholder="<?=__( 'Error', 'vdz_call_back' )?>"><?=isset($vdz_cb_popup_settings['vdz_cb_popup_error']) ? esc_attr($vdz_cb_popup_settings['vdz_cb_popup_error']) : ''?></textarea>
            </label>
            <div class="success callout" data-closable>
                <?=__( 'Default use text "Error". Use TEXT or HTML here', 'vdz_call_back' )?>
            </div>
        </div>

        <div class="medium-12 columns">
            <label>
                <?=__( 'Success text after send', 'vdz_call_back' )?>
                <textarea name="vdz_cb_popup_settings[vdz_cb_popup_success]" id="" cols="30" rows="2" placeholder="<?=__( 'Thank you!', 'vdz_call_back' )?>"><?=isset($vdz_cb_popup_settings['vdz_cb_popup_success']) ? esc_attr($vdz_cb_popup_settings['vdz_cb_popup_success']): ''?></textarea>
            </label>
            <div class="success callout" data-closable>
                <?=__( 'Default use text "Thank you!". Use TEXT or HTML here', 'vdz_call_back' )?>
            </div>
        </div>
        <div class="medium-12 columns">
            <button type="submit" class="button-primary button">
                <?=__( 'Save Popup options', 'vdz_call_back' )?>
            </button>
        </div>
    </div>
</form>
