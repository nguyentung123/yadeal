!function(t){wp.customize("facebook_page",function(n){n.bind(function(n){t(".social__link-facebook").attr("href",n)})}),wp.customize("youtube_page",function(n){n.bind(function(n){t(".social__link-youtube").attr("href",n)})}),wp.customize("insta_page",function(n){n.bind(function(n){t(".social__link-insta").attr("href",n)})}),wp.customize("footer_phone",function(n){n.bind(function(n){t(".footer__phone").html(n)})}),wp.customize("footer_email",function(n){n.bind(function(n){var i=t(".footer_email");i.attr("href","mailto:"+n),i.html(n)})}),wp.customize("contact_detail_phone",function(n){n.bind(function(n){t(".address-detail__phone").html(n)})}),wp.customize("contact_detail_address",function(n){n.bind(function(n){t(".address-detail__address").html(n)})}),wp.customize("contact_detail_email",function(n){n.bind(function(n){t(".address-detail__email").html(n)})})}(jQuery);