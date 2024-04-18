<?php
/**
 *
 *  * @ author ( Zikiy Vadim )
 *  * @ site http://online-services.org.ua
 *  * @ VDZ Call Back - wordpress plugin
 *  * @ copyright Copyright (C) 2016 All rights reserved.
 *
 */

if ( ! defined( 'VDZ_CALL_BACK_VERSION' ) ) {
    exit;
}


//Add LOG Class
require_once (VDZ_CALL_BACK_DIR . 'includes/classes/vdz_cb_log.php');
//Add DATA Class
require_once (VDZ_CALL_BACK_DIR . 'includes/classes/vdz_cb_data.php');

if(!class_exists('View', false)) {
    //Add VIEW Class
    require_once(VDZ_CALL_BACK_DIR . 'includes/classes/View.php');
}
//Add Send functions
require_once (VDZ_CALL_BACK_DIR . 'includes/vdz_cb_send.php');
//Add Shortcode
require_once (VDZ_CALL_BACK_DIR . 'includes/vdz_cb_shortcode.php');
//All front and admin assets
require_once (VDZ_CALL_BACK_DIR . 'includes/vdz_cb_assets.php');
//Customizer
require_once (VDZ_CALL_BACK_DIR . 'includes/vdz_cb_customize.php');
// For backend
if ( is_admin() ) {
    require_once (VDZ_CALL_BACK_DIR . 'admin/api.php');
    require_once (VDZ_CALL_BACK_DIR . 'admin/a_construct.php');
}
// For frontend
else{
    require_once (VDZ_CALL_BACK_DIR . 'front/f_construct.php');
}



?>