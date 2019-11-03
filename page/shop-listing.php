<?php
//* Template Name: Shop*/
get_header();
?>

<!-- === MAIN CONTENT === -->
<main class="no-overlay">
    <!-- Support Head -->
    <?php echo do_shortcode('[breadcrumbs]');?>
    <!-- Support Head -->

    <section class="section section-shop-listing" id="shop-listing">
        <div class="container">
            <div id='storemapper' style='width:100%;'>
                <p>
                    Store Locator is loading from
                    <a href='https://www.storemapper.co'>
                        Storemapper store locator software
                    </a>...
                </p>
            </div>
        </div>
    </section>
</main>

<script data-storemapper-start='2019,11,01' data-storemapper-id='6554'>(function() {var script = document.createElement('script');script.type  = 'text/javascript';script.async = true;script.src = document.location.protocol + '//www.storemapper.co/js/widget.js'; var entry = document.getElementsByTagName('script')[0];entry.parentNode.insertBefore(script, entry);}());</script>
<!-- === MAIN CONTENT - END === -->


<!--get footer-->
<?php get_footer();?>
