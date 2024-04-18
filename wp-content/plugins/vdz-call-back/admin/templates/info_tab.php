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
<h3><?=__( 'Info', 'vdz_call_back' )?></h3>

<ul class="accordion" data-accordion>
    <li class="accordion-item is-active" data-accordion-item>
        <a href="#" class="accordion-title"><?=__( 'Usage shortcode', 'vdz_call_back' )?></a>
        <div class="accordion-content" data-tab-content>
            <strong>[vdz_cb]popup button[/vdz_cb]</strong>
        </div>
    </li>
    <li class="accordion-item" data-accordion-item>
        <a href="#" class="accordion-title"><?=__( 'Data', 'vdz_call_back' )?></a>
        <div class="accordion-content" data-tab-content>
            <?=sprintf(__( "Found %d Call back records", 'vdz_call_back' ), VDZ_CALL_BACK_DATA::GET_COUNT() )?>
        </div>
    </li>
    <li class="accordion-item" data-accordion-item>
        <a href="#" class="accordion-title"><?=__( 'VDZ Call back Plugin', 'vdz_call_back' )?></a>
        <div class="accordion-content" data-tab-content>
            <?php
                $plugin_data = get_plugin_data(VDZ_CALL_BACK_FILE);
//                print_r($plugin_data);
            ?>
            <p><strong><?=__( 'Version:', 'vdz_call_back' )?></strong></p>
            <div class="stat"><?=VDZ_CALL_BACK_VERSION;?></div>
            <hr/>
            <?php if(isset($plugin_data['AuthorURI']) && !empty($plugin_data['AuthorURI']) && isset($plugin_data['AuthorName']) && !empty($plugin_data['AuthorName'])) : ?>
                <p><strong><?=__( 'Site & Author:', 'vdz_call_back' )?></strong></p>
                <div class="stat">
                    <a href="<?=esc_url($plugin_data['AuthorURI'])?>" target="_blank"><?=$plugin_data['AuthorName']?></a>
                </div>
                <hr/>
            <?php endif; ?>
            <?php
                $vdz_cb_log = VDZ_CALL_BACK_LOG::GET();
                if(!empty($vdz_cb_log) && is_array($vdz_cb_log)) :
            ?>
            <p><strong><?=__( 'Log:', 'vdz_call_back' )?></strong></p>
            <dl>
                <?php foreach ($vdz_cb_log as $item_arr):?>
                    <dt><?=$item_arr['msg']?></dt>
                    <dd><?=$item_arr['date_time']?></dd>
                <?php endforeach;?>
            </dl>
            <?php endif;?>
        </div>
    </li>
</ul>