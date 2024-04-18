<?php
/*Добавляем новые поля в настройках шаблона для управления виджетом*/
function vdz_call_back_customizer($wp_customize) {

	if( ! class_exists( 'WP_Customize_Control' ) ) exit;

	////Добавляем секцию для настроек виджета
	$wp_customize->add_section( 'vdz_call_back_section' , array(
		'title'       => __( 'VDZ CallBack' ),
		'priority'    => 10,
//		'description' => __( '' ),
	) );
	//Добавляем настройки
	$wp_customize->add_setting( 'vdz_call_back_widget_show_flag', array(
		'type' => 'option',
	));

	//Show OR Hide
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'vdz_call_back_widget_show_flag', array(
		'label'    => __( 'VDZ CallBack Widget Settings' ),
		'section'  => 'vdz_call_back_section',
		'settings' => 'vdz_call_back_widget_show_flag',
		'type' => 'select',
		'description' => __( 'Show VDZ CallBack Widget on Front' ),
		'choices'  => array(
			1  => __('Show'),
			0 => __('Hide'),
		),
	) ) );
	//Добавляем ссылку на сайт
	$wp_customize->add_setting( 'vdz_call_back_link', array(
		'type' => 'option',
	));

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'vdz_call_back_link', array(
//        'label'    => __( 'Links' ),
		'section'  => 'vdz_call_back_section',
		'settings' => 'vdz_call_back_link',
		'type' => 'hidden',
		'description' => '<a href="' . get_admin_url() . 'options-general.php?page=vdz_call_back">'.__('VDZ Plugin Settings').'</a><br/><br/><br/><br/><br/><a href="//online-services.org.ua#vdz-call-back" target="_blank">VadimZ</a>',
	) ) );


}
add_action( 'customize_register', 'vdz_call_back_customizer', 1 );



function vdz_cb_show_widget() {
	$code_str = "\r\n". '<!--Start VDZ CallBack Widget-->' . "\r\n";
	$vdz_cb_widget_show = (int) get_option('vdz_call_back_widget_show_flag');
	if(!empty($vdz_cb_widget_show)){
		$vdz_cb_widget_view_obj = new View(VDZ_CALL_BACK_DIR . 'front/templates/');
		$code_str .= do_shortcode('[vdz_cb vdz_cb_popup_action_button_class="hidden hide d-none" vdz_cb_popup_button_open=""][/vdz_cb]');
		$code_str .= $vdz_cb_widget_view_obj->fetch('vdz_call_back_widget');
	}
	$code_str .= "\r\n". '<!--End VDZ CallBack Widget-->' . "\r\n";
	echo $code_str;
}
add_action('wp_footer', 'vdz_cb_show_widget', 1000);
//Добавляем стили
add_action('wp_head', function (){
	$vdz_cb_widget_show = (int) get_option('vdz_call_back_widget_show_flag');
	if(!empty($vdz_cb_widget_show)){
		wp_register_style('vdz_cb_widget_style', VDZ_CALL_BACK_URL . 'assets/vdz_cb_widget_style.css', array(), time());
		wp_enqueue_style( 'vdz_cb_widget_style');
	}
});