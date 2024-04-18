/*
 *
 *  * @ author ( Zikiy Vadim )
 *  * @ site http://online-services.org.ua
 *  * @ name
 *  * @ copyright Copyright (C) 2016 All rights reserved.
 *
 */
(function($){
    $(document).on('ready', function(){

        //Add popup
        $('.vdz_cb_btn, .vdz_cb_widget_btn').magnificPopup({
            type: 'inline',
            preloader: false,
            showCloseBtn: true,
            closeBtnInside: true,
        });
        //Only for mobile
        $(document).on('touch','.vdz_cb_btn, .vdz_cb_widget_btn', function (e) {
            var $this = $(this);
            $this.magnificPopup('open');
            // console.log(e.currentTarget);
            // console.log(e);
            // console.log($this);
        });

        var $vdz_cb_phone = $("#vdz_cb_phone");
        //Add Mask
        var vdz_cb_phone_mask = $vdz_cb_phone.data('mask') || "(999) 999-99-99";
        if(($vdz_cb_phone.data('mask_off') == undefined) || ($vdz_cb_phone.data('mask_off') == 'on')){
            $("#vdz_cb_phone").mask(vdz_cb_phone_mask);
        }

        //Add International code
//        $("#vdz_cb_phone").intlTelInput({
//            initialCountry: "auto",
//            geoIpLookup: function(callback) {
//              $.get('http://ipinfo.io', function() {}, "jsonp").always(function(resp) {
//                var countryCode = (resp && resp.country) ? resp.country : "";
//                callback(countryCode);
//              });
//            },
//            utilsScript: "<?//=VDZ_CB_URL?>//assets/int_tel_input/js/utils.js" // just for formatting/placeholders etc
//          });

        //Add ajax form submit
        $('#vdz_cb_form').on('submit', function(e){
            e.preventDefault();
            $('#vdz_cb_unsver div').hide();
//              $("#full_phone").val($("#vdz_cb_phone").intlTelInput("getNumber"));
            $.ajax({
                type: 'POST',
                url: window.vdz_cb.ajax_url,
                data: $(this).serialize(),
                success: function (response) {
                    var content = $.parseJSON(response);
//                            console.log(content);
                    if (content.status == 'success')
                    {
                        $("#vdz_cb_form").trigger( 'reset' ).slideUp();
                        $('#vdz_cb_unsver .success').show();
                    }else{
                        $('#vdz_cb_unsver .warning').show();
                    }
                },
                error: function( data, textStatus, jqXHR ){
//                            console.log('data:');
//                            console.log(data);
//                            console.log('textStatus:');
//                            console.log(textStatus);
//                            console.log('jqXHR:');
//                            console.log(jqXHR);
                    $('#vdz_cb_unsver .warning').show();
                }
            })
        });


    });
})(jQuery);

