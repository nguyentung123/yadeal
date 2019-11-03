<?php
//* Template Name: Home*/
get_header();
?>

<!-- === MAIN CONTENT === -->
<main style="overflow: hidden">
    <?php
        for($i = 1; $i < 5; $i++){
            getBanner($i);
        }
    ?>
</main>
<!-- === MAIN CONTENT - END === -->


<!--get footer-->
<?php get_footer();?>
