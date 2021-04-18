( function( $ ) {
    /* ===== Footer ====== */
    wp.customize( 'facebook_page', function( value ) {
        value.bind( function( newval ) {
            $( '.social__link-facebook' ).attr( 'href', newval );
        } );
    }); // Facebook

    wp.customize( 'youtube_page', function( value ) {
        value.bind( function( newval ) {
            $( '.social__link-youtube' ).attr( 'href', newval );
        });
    }); // Youtube

    wp.customize( 'insta_page', function( value ) {
        value.bind( function( newval ) {
            $( '.social__link-insta' ).attr( 'href', newval );
        });
    }); // Instagram

    wp.customize( 'footer_phone', function( value ) {
        value.bind( function( newval ) {
            $( '.footer__phone' ).html( newval );
        });
    }); // Youtube

    wp.customize( 'footer_email', function( value ) {
        value.bind( function( newval ) {
            var $target =  $( '.footer_email' );
            $target.attr( 'href', 'mailto:' + newval );
            $target.html( newval );
        });
    }); // Instagram


    // Company Contact Detail
    wp.customize( 'contact_detail_phone', function( value ) {
        value.bind( function( newval ) {
            $( '.address-detail__phone' ).html( newval );
        });
    }); // Phone Number

    wp.customize( 'contact_detail_address', function( value ) {
        value.bind( function( newval ) {
            $( '.address-detail__address' ).html( newval );
        });
    });// Physical Address

    wp.customize( 'contact_detail_email', function( value ) {
        value.bind( function( newval ) {
            $( '.address-detail__email' ).html( newval );
        });
    });// Email
} )( jQuery );