=== VDZ CallBack Plugin ===
Contributors: vadim8vz
Donate link:  https://api.fondy.eu/s/hH1g4sTQJJr7kcz
Tags: call back, callback, callback form, call back form, simple form, simple callback, simple call back, shortcode, wordpress shortcode, form, marketing, jquery, masked input, popup form, contact form, contact, wordpress plugin
Requires at least: 3.8
Requires PHP: 5.4
Tested up to: 5.3.2
Stable tag: 1.9.4
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Simple CallBack Shortcode with customization and phone mask. Compatible with Bootstrap / Foundation / WPML / Polylang.

== Description ==
<p>
Simple CallBack Shortcode with customization and phone mask. Compatible with Bootstrap / Foundation / WPML / Polylang.
</p>
<p>
Translateble, working with Multilingual plugins as WPML and Polylang.
</p>
<p>
Usage: <strong>[vdz_cb]popup button[/vdz_cb]</strong>
</p>
<p>
You can use a lot of shortcodes button:<br /> <strong>[vdz_cb]popup button 1[/vdz_cb]</strong><br /><strong>[vdz_cb]&lt;span class=&quot;my_custom_class&quot;&gt;popup button 2&lt;/span&gt;[/vdz_cb]</strong><br /><strong>[vdz_cb]popup button 3[/vdz_cb]</strong>
</p>
<p><strong>
Use in php: &lt;?php echo do_shortcode(&#39;[vdz_cb]popup button 1[/vdz_cb]&#39;);?&gt;<br/>
or: &lt;?=do_shortcode(&#39;[vdz_cb]popup button 1[/vdz_cb]&#39;);?&gt;
</strong>
</p>
<h3>TEST your Shortcode whith param in admin on Settings plugin page</h3>

== Screenshots ==
1. Foundation style
2. Popup settings
3. Plugin settings
4. Test plugin shortcode in admin
5. Data


== Installation ==
<p>
Just upload the plugin from your Wordpress Plugins menu and activate it or download from *** and upload to your WP Plugin directory (/wp-content/plugins/).
</p>
<p>
And use this shortcode in pages, posts, etc:
</p>

== FAQ ==

= Add custom image in button =
use this shortcode `[vdz_cb]<img src="/my_image.jpg" alt="">[/vdz_cb].`
= More options in shortcode =
use this shortcode `[vdz_cb vdz_cb_popup_title="Call back Title" vdz_cb_popup_mask="(999) 999-99-99" vdz_cb_popup_name="Name" vdz_cb_popup_name_required="true" vdz_cb_popup_phone="Phone" vdz_cb_popup_text="Some text" vdz_cb_popup_button="Send" vdz_cb_popup_error="Error" vdz_cb_popup_success="Thank you!" vdz_cb_popup_button_class="custom_class" vdz_cb_popup_action_button_class="custom_class_btn" ]Open Cell back[/vdz_cb].`
= Off phone mask in shortcode =
use this shortcode `
[vdz_cb vdz_cb_popup_mask_off=1]Call back[/vdz_cb].
` this option disable phone mask in widget too
=Use custom colors=
Paste in your custom css settings in Wordpress `#vdz_cb_widget{background-color: rgba(82,78,162, 0.5) !important;border-color: rgba(82,78,162, 0.3) !important;} #vdz_cb_widget:before{border-color: rgba(82,78,162, 0.5) !important;}#vdz_cb_widget:after{background-color: rgba(82,78,162, 0.3)!important;}`
= Change sender name and email =
`Add in your function.php theme file next filters:
//name from
add_filter( 'wp_mail_from_name', function(){
	return 'NEW NAME';
} );
//email from
add_filter( 'wp_mail_from', function(){
	return 'new_email_from@your.site';
} );`
= Change position widget =
use this code in custom style 
`#vdz_cb_widget{
	bottom: 40px;
	right: initial !important;
	left: 40px !important;
}`


== Upgrade Notice ==
Add new version 1.9


== Changelog ==

= 1.9.4 =
Add required checkbox for Name field & add shortcode param vdz_cb_popup_name_required

= 1.9.3 =
Update ReadMe

= 1.9.2 =
Fix Dependencies jquery & add .htaccess

= 1.9.1 =
Fix custom field add required attribute

= 1.9.0 =
Add update api 

= 1.8.3 =
Tested up to: 5.3.2

= 1.8.2 =
Tested up to WP 5.3

= 1.8.1 =
Tested up to WP 5.2.4

= 1.8 =
Add custom fields in form

= 1.7.9 =
Check Working in WP 5.2

= 1.7.8 =
Add touch event for mobile

= 1.7.7 =
Check Working in WP 4.9.8

= 1.7.6 =
Check Working in WP 4.9.5

= 1.7.5 =
Add new field settings "Send to other Emails"

= 1.7.0 =
Add customize email text/subject & disable phone mask flag

= 1.6.0 =
Add Phone widget

= 1.5.1 =
Fix custom class for plugin settings & shortcode attributes

= 1.5 =
Add option "class" for action & popup buttons
Check Working in WP 4.9

= 1.4.6 =
Check Working in WP 4.8.3

= 1.4.5 =
Check Working in WP 4.8.2

= 1.4.4.1 =
fix version

= 1.4.4 =
Check Working in WP 4.8 & fix link on masked input plugin

= 1.4.3 =
Check Working in WP 4.7.4

= 1.4.2 =
fix Contributors

= 1.4.1 =
Check Working in WP 4.7.3

= 1.4 =
Add download all data in csv format file

= 1.3 =
Fix error if files *.log & *.db not exist.
Add usage many shortcode buttons.
Disable plugin if is not supported wordpress version.

= 1.2 =
WordPress 4.7 compatibility.
Add api

= 1.1 =
update admin styles

= 1.0 =
First release.