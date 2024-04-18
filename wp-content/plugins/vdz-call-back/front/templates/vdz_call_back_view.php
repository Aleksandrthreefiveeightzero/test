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

<a id="vdz_cb_btn<?=(($shortcode_count>0) ? $shortcode_count : '')?>" class="vdz_cb_btn  <?=sanitize_text_field($vdz_cb_popup_action_button_class);?>" href="#vdz_cb">
    <?=$vdz_cb_popup_button_open?>
</a>

<?php if($shortcode_count == 0):?>
<div id="vdz_cb" class="mfp-hide">
    <h3><?=$vdz_cb_popup_title?></h3>
    <form id="vdz_cb_form">
    <?php wp_nonce_field("vdz_cb");?>
    <input id="vdz_cb_name" type="text" name="name" minlength="3" maxlength="50" placeholder="<?=$vdz_cb_popup_name?>" <?=(isset($vdz_cb_popup_name_required) && !empty($vdz_cb_popup_name_required)) ? 'required="required"' : ''?>>
    <input id="vdz_cb_phone" type="text" name="phone" required="required" placeholder="<?=$vdz_cb_popup_phone?>*" data-mask="<?=$vdz_cb_popup_mask?>" data-mask_off="<?=(isset($vdz_cb_popup_mask_off) && !empty($vdz_cb_popup_mask_off)) ? 'off' : 'on'?>">
    <input type="hidden" name="action" value="vdz_cb_send" >
<!--    <input id="full_phone" type="hidden" name="full_phone"><br/>-->

	    <?php if(!empty($vdz_cb_popup_custom_fields)) : ?>
            <div class="vdz_custom_fields">
			    <?=$vdz_cb_popup_custom_fields?>
            </div>
	    <?php endif;?>

        <button class="button btn btn-default <?=sanitize_text_field($vdz_cb_popup_button_class);?>" type="submit"><?=$vdz_cb_popup_button?></button>
        <?php if(!empty($vdz_cb_popup_text)) : ?>
        <hr/>
        <div>
            <?=$vdz_cb_popup_text?>
        </div>
        <?php endif;?>
    </form>
    <div id="vdz_cb_unsver">
        <div class="warning" style="display: none;"><?=$vdz_cb_popup_error?></div>
        <div class="success" style="display: none;"><?=$vdz_cb_popup_success?></div>
    </div>
</div>
<?php endif; ?>