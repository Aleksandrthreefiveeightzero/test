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

<div class="wrap">
    <div class="row ">
        <h1>
		    <?=__( 'VDZ Call Back Settings Page', 'vdz_call_back' )?>
        </h1>
    </div>
    <hr>
    <div class="row ">
        <div class="small-6 columns text-left">
            <a href="<?=get_admin_url()?>customize.php?autofocus[section]=vdz_call_back_section"><?=__('VDZ CallBack Widget Settings')?></a>
        </div>
        <div class="small-6 columns text-right">
            <?php
                $plugin_data = get_plugin_data(VDZ_CALL_BACK_FILE);
                if(isset($plugin_data['AuthorURI']) && !empty($plugin_data['AuthorURI']) && isset($plugin_data['AuthorName']) && !empty($plugin_data['AuthorName'])) :
            ?>
                    <a href="<?=esc_url($plugin_data['AuthorURI'])?>" target="_blank"><?=$plugin_data['AuthorName']?></a>
            <?php endif; ?>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="small-12 columns">
            <ul class="tabs" data-tabs id="vdz-call-back">
                <li class="tabs-title  is-active"><a href="#popup_setttings" aria-selected="true"><?=__( 'Popup Settings', 'vdz_call_back' )?></a></li>
                <li class="tabs-title"><a href="#plugin_setttings"><?=__( 'Plugin Settings', 'vdz_call_back' )?></a></li>
                <li class="tabs-title"><a href="#test"><?=__( 'Test', 'vdz_call_back' )?></a></li>
                <li class="tabs-title"><a href="#data_setttings"><?=__( 'Data', 'vdz_call_back' )?></a></li>
                <li class="tabs-title"><a href="#info"><?=__( 'Info', 'vdz_call_back' )?></a></li>
            </ul>
            <div class="tabs-content" data-tabs-content="vdz-call-back">
                <div class="tabs-panel is-active" id="popup_setttings">
                    <?=$vdz_cb_admin_view_obj->render('popup_settings_tab');?>
                </div>
                <div class="tabs-panel" id="plugin_setttings">
                    <?=$vdz_cb_admin_view_obj->render('plugin_settings_tab');?>
                </div>
                <div class="tabs-panel" id="test">
                    <?=$vdz_cb_admin_view_obj->render('test_tab');?>
                </div>
                <div class="tabs-panel" id="data_setttings">
                    <?=$vdz_cb_admin_view_obj->render('data_tab');?>
                </div>
                <div class="tabs-panel" id="info">
                    <?=$vdz_cb_admin_view_obj->render('info_tab');?>
                </div>
            </div>


        </div>
    </div>
<pre>
<?php

//var_dump(get_current_screen());
?>
</pre>
</div>