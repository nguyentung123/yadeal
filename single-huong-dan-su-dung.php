<?php
// This page is still under construction, only access after finish build the manual
if (! is_user_logged_in()):
    wp_redirect(site_url());
    exit;
endif;

get_header(); ?>
  <main class="no-overlay support-pages bike-instruction-page">

    <!-- Instruction Banner -->
    <div class="instruction-banner">

      <!-- Background Holder -->
      <div class="background-holder">
        <div class="bg-bottom"></div>
      </div>
      <!-- Background Holder - END -->

      <!-- Main Content -->
      <div class="main-content">
        <!-- Container -->
        <div class="container">

          <!-- Custom Row -->
          <div class="custom-row">

            <!-- Left Side -->
            <div class="left-side">
              <div class="left-side-context">
                <h1 class="bike-model"><?php echo get_the_title(get_field('bike-model')); ?></h1>
                <h3 class="sub-title">HƯỚNG DẪN SỬ DỤNG</h3>
              </div>
            </div>
            <!-- Left Side - END -->

            <!-- Right Side -->
            <div class="right-side">
              <div class="img-holder">
                <?php
                  if(get_field('bike-picture')):
                      $bikeImage = get_field('bike-picture');
                      endif;
                ?>
                <img src="<?php echo $bikeImage; ?>">
              </div>
            </div>
            <!-- Right Side - END -->

          </div>
          <!-- Custom Row - END -->

        </div>
        <!-- Container - END -->
      </div>
      <!-- Main Content - END -->

    </div>
    <!-- Instruction Banner - END -->

    <!-- Instruction Content Goes Here -->
      <?php if (have_posts()): ?>
        <div class="common-page-content">

          <!-- Container -->
          <div class="container">

            <!-- Topic Holder -->
            <div class="topic-holder">

              <!-- Topic List -->
              <ul class="topic-list">
                  <?php while (have_posts()): the_post(); ?>
                      <?php
                      $instructionContext = get_field('instruction-detail');
                      if (count($instructionContext) > 0):
                          $topicNo = 1;
                          foreach ($instructionContext as $context):?>

                            <!-- Topic Item -->
                            <li class="topic-item">
                              <!-- Title -->
                              <h3 class="topic-title">
                                  <?php echo integerToRoman($topicNo).'. '.$context['instruction_main_title']; ?>
                              </h3>
                              <!-- Title - END -->

                              <!-- Toggler -->
                              <div class="topic-toggler"></div>
                              <!-- Toggler - END -->

                                <?php
                                // Render Main Title Content
                                if ($context['instruction_have_sub_section']):
                                    // If having Sub Section Content: Render Sub Section List
                                    $subContent = $context['instruction_sub_content'];
                                    if (count($subContent) > 0):
                                        $currentSubContentNo = 1;
                                        ?>
                                      <ul class="sub-topic-holder">

                                          <?php foreach ($subContent as $subContentItem): ?>

                                            <!-- Sub Topic Item -->
                                            <li class="sub-topic-item">
                                              <p class="sub-topic-title">
                                                <?php echo $currentSubContentNo . '. ' . $subContentItem['instruction_sub_title'];?>1. Liên quan đến PIN/Ắc quy
                                              </p>
                                              <div class="sub-topic-content">
                                                <?php echo $subContentItem['instruction_sub_content']; ?>
                                              </div>
                                            </li>
                                            <!-- Sub Topic Item - END -->

                                            <?php $currentSubContentNo += 1; ?>
                                          <?php endforeach; ?>

                                      </ul>
                                    <?php endif; ?>
                                <?php else: ?>
                                  <div class="topic-context">
                                      <?php echo $context['instruction_main_content']; ?>
                                  </div>
                                <?php
                                endif;
                                ?>
                            </li>
                            <!-- Topic Item - END -->

                              <?php
                              $topicNo += 1;
                          endforeach;

                      endif;
                      ?>

                  <?php endwhile; ?>
              </ul>
              <!-- Topic List - END -->

            </div>
            <!-- Topic Holder - END -->

          </div>
          <!-- Container - END -->

        </div>
      <?php endif; ?>


      <?php get_template_part('template-parts/common', 'pre-footer'); ?>

  </main>

<?php
get_footer();
