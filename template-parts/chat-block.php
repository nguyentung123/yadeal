<!-- Facebook Customer Chat -->
<div id="fb-root"></div>
<div class="fb-customerchat" attribution=setup_tool page_id="586286351830837" theme_color="#ff7e29"
                                                                    logged_in_greeting="YADEA có thể giúp gì cho bạn?" logged_out_greeting="YADEA có thể giúp gì cho bạn?">
</div>

<!-- Facebook plugin -->
<script>
  window.fbAsyncInit = function() {
    FB.init({
      xfbml: true,
      version: 'v5.0'
    });
  };

  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s);
    js.id = id;
    js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>

<!-- Zalo Customer  Chat -->
<div class="zalo-holder">
  <div class="zalo-chat-widget" data-oaid="3358660728590406874"
       data-welcome-message="YADEA có thể hỗ trợ gì cho bạn?" data-autopopup="0" data-width="350" data-height="420"></div>
</div>
<!-- Zalo plugin -->
<script src="https://sp.zalo.me/plugins/sdk.js" async></script>