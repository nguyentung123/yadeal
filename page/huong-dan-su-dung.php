<?php
//* Template Name: Hướng dẫn sử dụng
get_header();
?>
<main class="no-overlay">
    <!-- Support Head -->
    <?php echo do_shortcode('[breadcrumbs]');?>
    <!-- Support Head -->

    <?php
    $args = array(
        "post_type" => 'huong-dan-su-dung',
        "post_status" => 'publish',
        'posts_per_page'=>-1
    );
    $query = new WP_Query($args);
    if($query->have_posts()):
        ?>
        <section>
            <div class="container">
                <div class="list-question list-question-lp">
                    <?php while($query->have_posts()):$query->the_post();?>
                        <div class="question-item question-item-lp">
                            <div class="question-item question-lp">
                                <p style="margin-bottom: 0;"><?php echo get_the_title();?></p>
                                <span class="icon-hide-show-faq-lp">
                            <span class="fa fa-plus" aria-hidden="true"></span> 
                            <span class="fa fa-minus" aria-hidden="true"></span>
                        </span>
                            </div>
                            <div class="content-question content-question-item-lp">
                                <?php the_content();?>
                            </div>
                        </div>
                    <?php endwhile;?>
                </div>
            </div>
        </section>
    <?php endif?>
</main>
<style>
    .list-question {
        padding: 100px 0;
    }
    .question-item-lp {
        margin-bottom: 25px;
        background: #fff;
        box-shadow: 0px 5px 14px rgba(0, 0, 0, 0.05);
        border-radius: 5px;
    }
    .question-item-lp .question-lp {
        font-size: 18px;
        line-height: 23px;
        padding: 15px 28px;
        position: relative;
        display: flex;
        cursor: pointer;
        color: #252539;
        font-family: Cabin;
        font-weight: 700;
    }
    .question-item-lp .question-lp .icon-hide-show-faq-lp {
        margin-left: auto;
        color: #f36d21;
    }
    .question-item-lp .question-lp .icon-hide-show-faq-lp .fa-plus {
        display: block;
        margin-top: 3px;
    }
    .question-item-lp .question-lp .icon-hide-show-faq-lp .fa-minus {
        display: none;
        margin-top: 3px;
    }
    .question-item-lp .content-question-item-lp {
        font-size: 16px;
        line-height: 150%;
        letter-spacing: 0.02em;
        border-top: 1px solid #e4e4e4;
        padding: 20px 28px;
        color: #555554;
    }
    .question-item-lp .question-lp.show-description-lp .icon-hide-show-faq-lp .fa-minus {
        display: block;
    }
    .question-item-lp .question-lp.show-description-lp .icon-hide-show-faq-lp .fa-plus {
        display: none;
    }
</style>
<script>
    $(document).ready(function () {
        $('.content-question-item-lp').slideUp();
        $('.question-lp').click(function () {
            if($(this).hasClass('show-description-lp')){
                $(this).next().slideToggle();
                $(this).toggleClass('show-description-lp');
            }
            else{
                $('.question-lp').removeClass('show-description-lp');
                $('.content-question-item-lp').slideUp();
                $(this).next().slideToggle();
                $(this).toggleClass('show-description-lp');
            }
        });
    });
</script>
<?php get_footer();?>
