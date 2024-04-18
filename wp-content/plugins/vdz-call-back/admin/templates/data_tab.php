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
<h3><?=__( 'Data', 'vdz_call_back' )?></h3>

<?php
$vdz_cb_data = VDZ_CALL_BACK_DATA::GET();
if(!empty($vdz_cb_data) && is_array($vdz_cb_data)) :
    ?>
    <p><a href="<?=$_SERVER['REQUEST_URI']?>&data=data.csv" target="_blank"><?=__( 'Download all', 'vdz_call_back' )?></a></p>
    <p><strong><?=__( 'Last 20 CALL BACK requests:', 'vdz_call_back' )?></strong></p>
<dl>
    <?php foreach ($vdz_cb_data as $key_data => $item_arr):?>
        <dt><?=($key_data +1)?></dt>
        <dd>
            <ul>
                <?php foreach ($item_arr as $item_key => $item_value):?>
                <li>
                    <strong><?=$item_key?>:</strong> <?=$item_value?>
                </li>
                <?php endforeach;?>
            </ul>
            <hr/>
        </dd>
    <?php endforeach;?>
</dl>
<?php endif;?>