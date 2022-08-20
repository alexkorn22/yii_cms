import '../scss/common.scss';

/* <![CDATA[ */
var stackable = {"restUrl":"https:\/\/topcontent.com\/wp-json\/"};
/* ]]> */

var sgpbPublicUrl = "https:\/\/topcontent.com\/wp-content\/plugins\/popup-builder\/public\/";
var SGPB_JS_LOCALIZATION = {"imageSupportAlertMessage":"Only image files supported","areYouSure":"Are you sure?","addButtonSpinner":"L","audioSupportAlertMessage":"Only audio files supported (e.g.: mp3, wav, m4a, ogg)","publishPopupBeforeElementor":"Please, publish the popup before starting to use Elementor with it!","publishPopupBeforeDivi":"Please, publish the popup before starting to use Divi Builder with it!","closeButtonAltText":"Close"};

var SGPB_POPUP_PARAMS = {"popupTypeAgeRestriction":"ageRestriction","defaultThemeImages":{"1":"https:\/\/topcontent.com\/wp-content\/plugins\/popup-builder\/public\/img\/theme_1\/close.png","2":"https:\/\/topcontent.com\/wp-content\/plugins\/popup-builder\/public\/img\/theme_2\/close.png","3":"https:\/\/topcontent.com\/wp-content\/plugins\/popup-builder\/public\/img\/theme_3\/close.png","5":"https:\/\/topcontent.com\/wp-content\/plugins\/popup-builder\/public\/img\/theme_5\/close.png","6":"https:\/\/topcontent.com\/wp-content\/plugins\/popup-builder\/public\/img\/theme_6\/close.png"},"homePageUrl":"https:\/\/topcontent.com\/","isPreview":false,"convertedIdsReverse":[],"dontShowPopupExpireTime":365,"conditionalJsClasses":[],"disableAnalyticsGeneral":false};
var SGPB_JS_PACKAGES = {"packages":{"current":1,"free":1,"silver":2,"gold":3,"platinum":4},"extensions":{"geo-targeting":false,"advanced-closing":false}};
var SGPB_JS_PARAMS = {"ajaxUrl":"https:\/\/topcontent.com\/wp-admin\/admin-ajax.php","nonce":"ce905c50df"};

document.addEventListener( 'wpcf7mailsent', function( event ) {
    console.log(event.detail.contactFormId)
    if ( '10465' == event.detail.contactFormId ) {
        console.log('sent')
        window.dataLayer = window.dataLayer || [];
        window.dataLayer.push({'event': 'quote_form_submitted'});
    }
}, false );

/* <![CDATA[ */
var cf7mls_object = {"ajax_url":"https:\/\/topcontent.com\/wp-admin\/admin-ajax.php","cf7mls_error_message":"","scroll_step":"true","disable_enter_key":"false","check_step_before_submit":"true"};
/* ]]> */
/* <![CDATA[ */
var wpcf7 = {"api":{"root":"https:\/\/topcontent.com\/wp-json\/","namespace":"contact-form-7\/v1"},"cached":"1"};
/* ]]> */

var wpcf7cf_global_settings = {"ajaxurl":"https:\/\/topcontent.com\/wp-admin\/admin-ajax.php"};

(function() {
    var expirationDate = new Date();
    expirationDate.setTime( expirationDate.getTime() + 31536000 * 1000 );
    document.cookie = "pll_language=ru; expires=" + expirationDate.toUTCString() + "; path=/; secure; SameSite=Lax";
}());

jQuery(document).ready(function ($) {

    for (let i = 0; i < document.forms.length; ++i) {
        let form = document.forms[i];
        if ($(form).attr("method") != "get") { $(form).append('<input type="hidden" name="gbPueXoafBQxhD" value="uXm5jly" />'); }
        if ($(form).attr("method") != "get") { $(form).append('<input type="hidden" name="eyYWBdhrRSXKnZ" value="ePFn4BaMx" />'); }
    }

    $(document).on('submit', 'form', function () {
        if ($(this).attr("method") != "get") { $(this).append('<input type="hidden" name="gbPueXoafBQxhD" value="uXm5jly" />'); }
        if ($(this).attr("method") != "get") { $(this).append('<input type="hidden" name="eyYWBdhrRSXKnZ" value="ePFn4BaMx" />'); }
        return true;
    });

    jQuery.ajaxSetup({
        beforeSend: function (e, data) {

            if (data.type !== 'POST') return;

            if (typeof data.data === 'object' && data.data !== null) {
                data.data.append("gbPueXoafBQxhD", "uXm5jly");
                data.data.append("eyYWBdhrRSXKnZ", "ePFn4BaMx");
            }
            else {
                data.data = data.data + '&gbPueXoafBQxhD=uXm5jly&eyYWBdhrRSXKnZ=ePFn4BaMx';
            }
        }
    });

});

const url = new URL(window.location)
const affIdFromUrl = url.searchParams.get('aff_id')
if (affIdFromUrl) localStorage.setItem('affId', affIdFromUrl)

const affIdSaved = localStorage.getItem('affId')
if (affIdSaved) {
    $('a[href^="https://app.topcontent.com"]').each(function () {
        const url = new URL(this.href)
        url.searchParams.append('aff_id', affIdSaved)
        this.href = url.href
    })
}

let ll = new LazyLoad({
    elements_selector: ".lazy",
});

window.w3tc_lazyload=1,window.lazyLoadOptions={elements_selector:".lazy",callback_loaded:function(t){var e;try{e=new CustomEvent("w3tc_lazyload_loaded",{detail:{e:t}})}catch(a){(e=document.createEvent("CustomEvent")).initCustomEvent("w3tc_lazyload_loaded",!1,!1,{e:t})}window.dispatchEvent(e)}}