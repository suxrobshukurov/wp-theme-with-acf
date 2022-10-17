( function( global, $ ) {
    var editor,
        syncCSS = function() { 
            $( '#custom_css_textarea' ).val( editor.getSession().getValue() );

        },
        loadAce = function() {
            if($('#custom_css').length == 0){
                return false;
            }
            editor = ace.edit( 'custom_css' );
            global.safecss_editor = editor;
            editor.getSession().setUseWrapMode( true );
            editor.setShowPrintMargin( false );
            editor.getSession().setValue( $( '#custom_css_textarea' ).val() );
            editor.getSession().setMode( "ace/mode/php" );
            editor.setTheme("ace/theme/monokai");
            jQuery.fn.spin&&$( '#custom_css_container' ).spin( false );
            $( '#major-publishing-actions' ).click( syncCSS );
        };

        var ua = window.navigator.userAgent;
        var msie = ua.indexOf("MSIE");
        
    if (msie > 0 && navigator.appVersion<=7){
        $( '#custom_css_container' ).hide();
        $( '#custom_css_textarea' ).show();
        return false;
    } else {
        $( global ).load( loadAce );
    }
    global.aceSyncCSS = syncCSS;
} )( this, jQuery );

//Shortcode Metabox Show/hide jquery
jQuery(document).ready(function(){
    jQuery('#position-hook').change(function() {
      if ( document.getElementById('position-hook').value == 'manual_shortcode_hook')  
      {
        jQuery('#amp_acf_add_shortcode').show();
      }
      else{
         jQuery('#amp_acf_add_shortcode').hide();
      }
    });
});
