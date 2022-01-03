<?php get_header(); ?>

 <!--<div class="oo9gr5id" dir="auto" style="text-align: center;"><span style="color: rgb(243, 121, 52);"><strong>প্রিয় পাঠক আপনাদের দেশপ্রতিক্ষণ ওয়েবসাইটের ডিজাইন পরিবর্তন ও আপডেটের কাজ চলছে। সাময়িক অসুবিধার জন্য আন্তরিক ভাবে দুঃখিত।</strong></span></div> -->
  <!-- =======================
        Main Body Section
    ======================== -->
<div class="container">

   <!-- =====================
        highlights Ads
   ========================= -->
  <section>
    <div class="home-page-ads" id="lead-ads">
          <div class="row">
            <?php
             // the query
             $the_category = new WP_Query( array(
               'post_type' => 'ads',
               'post_status' => 'publish',
               'posts_per_page' => 3,
               'orderby' => 'post_date',
               'order' => 'DESC',
               'type' => 'the-news',
             ));
             ?>
            <?php if ( $the_category->have_posts()) : ?>
            <?php while ( $the_category->have_posts() ) : $the_category->the_post(); ?>
            <?php $url= get_post_meta($post->ID, 'ads-link', true); ?>
            <div class="col-md-4 col-sm-12 col-12" id="mbl-left">
              <div>
                <a href="<?php echo esc_url($url) ?>" target="_blank"><?php the_post_thumbnail();?></a>
              </div>
            </div>
            <?php endwhile; endif; wp_reset_postdata();?>
          </div>
    </div>
    <!-- end ads -->

    <!-- ====Uniq Custom Null Lead News Query=== -->
    <?php
      // the query
      $lead_news = new WP_Query( array(
        'category_name' => 'the-news',
        'posts_per_page' => 3,
      ));
       if ( $lead_news->have_posts()){
             $posts = $lead_news->the_post();
             $lead[] = $post->ID;
       }
       else {
         echo " ";
       }
      
    ?>
    <!-- End custom uniq Query -->

  <!-- Lead Section -->
    <div class="row my-2">
      <!-- ========Body Part======= -->
      <div class="col-md-12 col-sm-12 col-12">
        <div class="lead-sec">
          <div class="row">
            <div class="col-md-3 col-sm-12 col-12">
              <div class="one-bottom-box"  id="lead-sec-left">
              <!-- Start Cat First Content -->
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-12" id="soft-back">
                  
                    <?php
                    // the query
                    $the_category = new WP_Query( array(
                      'category_name' => 'stock-market',
                      'posts_per_page' => 6,
                      'post__not_in'  =>  $lead,
                    ));
                    if($the_category->have_posts()):
                    while ($the_category->have_posts() ):$the_category->the_post();
                    ?>
                     <?php  $slider3[] = $post->ID; ?>
                    <div class="box-style">
                      <div class="box-left">
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail();?></a>
                      </div>
                      <div class="box-right">
                        <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                      </div>
                    </div>

                    <?php endwhile;  endif; wp_reset_postdata();?>
                    <!-- End box style -->

                  </div>
                  <!-- End column -->
                </div>
                <!-- End row -->
              </div>
            </div>
            <!-- end 1st col -->

            <div class="col-md-6 col-sm-12 col-12">
              <!-- Start One-Bottom-Box -->
              <div class="lead-first-content" id="lead-sec-main">
                <!-- Start Cat First Content -->
                <div class="row">
                  <div class="col-md-12 col-sm-12 col-12">
                    <?php
                    // the query
                    $the_category = new WP_Query( array(
                      'category_name' => 'the-news',
                      'posts_per_page' => 1,
                      'offset' => 0,
                    ));
                    ?>
                    <?php if ( $the_category->have_posts()) : ?>
                    <?php while ( $the_category->have_posts() ) : $the_category->the_post(); ?>
                    <?php  $lead[] = $post->ID; ?>
                    <div class="first-content" id="lead-img">
                      <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail();?></a>
                      <h2><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h2>
                      <p><?php echo wp_trim_words( get_the_content(), 35, '...' );?> </p>
                    </div>

                    <?php endwhile; endif; wp_reset_postdata();?>
                      <!-- end main content -->
                  </div>
                  <!-- End column -->
                </div>
                <!-- End row -->
              </div>
              <!-- End Main lead News -->

              <div class="row">

                <div class="col-md-6 col-sm-12 col-12">
                    <!-- Start One-Bottom-Box -->
                    <div class="one-bottom-box" id="lead-sec-bottom">
                      <!-- Start Cat First Content -->
                      <div class="row">
                        <div class="col-md-12 col-sm-12 col-12">
                          <?php
                          // the query
                          $the_category = new WP_Query( array(
                            'category_name' => 'the-news',
                              'posts_per_page' => 1,
                              'offset' => 0,
                              'post__not_in'  =>  $lead,
                          ));
                          ?>

                        <?php if ( $the_category->have_posts()) : ?>
                        <?php while ( $the_category->have_posts() ) : $the_category->the_post(); ?>
                        <?php  $lead[] = $post->ID; ?>
                          <div class="box-style">
                            <div class="box-left">
                              <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail();?></a>
                            </div>
                            <div class="box-right">
                              <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                            </div>
                            <div>

                            </div>
                          </div>
                          <?php endwhile;  endif; wp_reset_postdata(); ?>
                          <!-- End box style -->
                        </div>
                        <!-- End column -->
                      </div>
                      <!-- End row -->
                  </div>
                  <!-- end 2nd col -->
                </div>
                <!-- end column -->

                <div class="col-md-6 col-sm-12 col-12">
                    <!-- Start One-Bottom-Box -->
                    <div class="one-bottom-box" id="lead-sec-bottom">
                      <!-- Start Cat First Content -->
                      <div class="row">
                        <div class="col-md-12 col-sm-12 col-12">
                          <?php
                          // the query
                          $the_category = new WP_Query( array(
                            'category_name' => 'the-news',
                              'posts_per_page' => 1,
                              'offset' => 0,
                              'post__not_in'  =>  $lead,
                          ));
                          ?>

                        <?php if ( $the_category->have_posts()) : ?>
                        <?php while ( $the_category->have_posts() ) : $the_category->the_post(); ?>
                        <?php  $lead[] = $post->ID; ?>
                          <div class="box-style">
                            <div class="box-left">
                              <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail();?></a>
                            </div>
                            <div class="box-right">
                              <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                            </div>
                            <div>

                            </div>
                          </div>
                          <?php endwhile;  endif; wp_reset_postdata(); ?>
                          <!-- End box style -->
                        </div>
                        <!-- End column -->
                      </div>
                      <!-- End row -->
                  </div>
                  <!-- end 2nd col -->
                </div>
                <!-- end column -->

              </div>

            </div>
            <!-- end lead middle col -->

            <div class="col-md-3 col-sm-12 col-12">
              <div class="one-bottom-box" id="lead-sec-right">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-12" id="soft-back">
                  
                    <?php
                    // the query
                    $the_category = new WP_Query( array(
                      'category_name' => 'national',
                      'posts_per_page' => 6,
                      'offset' => 0,
                      'post__not_in'  =>  $lead,
                    ));
                    if($the_category->have_posts()):
                    while ($the_category->have_posts() ):$the_category->the_post();
                    ?>
                     <?php  $slider4[] = $post->ID; ?>
                    <div class="box-style mar-right">
                        
                      <div class="box-left">
                      <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                      </div>

                      <div class="box-right">
                      <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail();?></a>
                    </div>

                    </div>

                    <?php endwhile;  endif; wp_reset_postdata();?>
                    <!-- End box style -->

                  </div>
                  <!-- End column -->
                </div>
                <!-- End row -->
              </div>
            </div>
            <!-- end 3rd col -->
          </div>
          <!-- end row -->
        </div>
        <!-- End lead div -->
    </div>
    <!-- end row -->
  </section>
  <!-- End Lead Section -->

    <!-- ===============
        Comapany category
    ================ -->
  <section class="company" id="mbl-left">
      <!-- Start Ads -->
    <div class="home-page-ads">
          <div class="row">
            <?php
             // the query
             $the_category = new WP_Query( array(
               'post_type' => 'ads',
               'post_status' => 'publish',
               'posts_per_page' => 3,
               'orderby' => 'post_date',
               'order' => 'DESC',
               'type' => 'company-news',
             ));
             ?>
            <?php if ( $the_category->have_posts()) : ?>
            <?php while ( $the_category->have_posts() ) : $the_category->the_post(); ?>
            <?php $url= get_post_meta($post->ID, 'ads-link', true); ?>
            <div class="col-md-4 col-sm-12 col-12" id="mbl-left">
                <a href="<?php echo esc_url($url) ?>" target="_blank"><?php the_post_thumbnail();?></a>
            </div>
            <?php endwhile; endif; wp_reset_postdata();?>
          </div>
    </div>
    <!-- end ads -->
    <!-- Start Category -->
      <div class="row">  
          <div class="col-md-8 col-sm-12 col-12" id="company">
            
            <!-- Satrt Category Title -->
            <div class="cat-title">
              <div class="title">
                <h1> কোম্পানি সংবাদ </h1>
              </div>
              <div class="link">
                       <?php
                      // the query
                      $the_category = new WP_Query( array(
                        'category_name' => 'company-news',
                        'posts_per_page' => 1,
                      ));
                      if($the_category->have_posts()):
                      while ($the_category->have_posts() ):$the_category->the_post();
                      $cats = wp_get_post_categories($post->ID);
                      if($cats) : foreach($cats as $cat) : $category = get_category($cat);endforeach;
                      $cat_lik = get_category_link($category->cat_ID);
                      ?>
                      <a href="<?php echo $cat_lik?>">আরও খবর  <i class="fas fa-arrow-right"></i></a>
                      <?php
                        endif;
                        endwhile;
                      endif;
                      ?>
                    </div>
            </div> 
            
            <div class="one-right-two">
              <!-- End cat title -->
              <div class="row">
                <div class="col-md-6 col-sm-12 col-12 my-2">
                  <?php
                   // the query
                   $the_category = new WP_Query( array(
                     'category_name' => 'company-news',
                      'posts_per_page' => 1,
                      'offset' => 0,
                      'post__not_in'  =>  $lead,
                   ));
                  if($the_category->have_posts()):
                   while ($the_category->have_posts() ):$the_category->the_post();
                   ?>
                  <div class="first-content">
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail();?></a>
                    <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                      <p><?php echo wp_trim_words( get_the_content(), 30, '...' );?></p>
                  </div>
                  <?php endwhile;  endif; wp_reset_postdata();?>
                </div>
                <!-- End Column -->
                <div class="col-md-6 col-sm-12 col-12">
                    <?php
                     // the query
                     $the_category = new WP_Query( array(
                       'category_name' => 'company-news',
                        'posts_per_page' => 5,
                        'offset' => 1,
                        'post__not_in'  =>  $lead,
                     ));
                    if($the_category->have_posts()):
                     while ($the_category->have_posts() ):$the_category->the_post();
                     ?>
                    <div class="box-style">
                      <div class="box-left">
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail()?></a>
                      </div>
                      <div class="box-right">
                        <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                      </div>
                    </div>
                    <?php endwhile;  endif; wp_reset_postdata();?>
                    <!-- End Column -->
                </div>

              </div>
              <!-- End row -->
            </div>
            <!-- End one right two category -->

          </div>
          <!-- End column -->
          <div class="col-md-4 col-sm-12 col-12">
            <div class="epaper">
            <div class="cat-title">
                    <div class="title px-1">
                      <h1>ই-পেপার </h1>
                    </div>
                    <div class="link">
                      <a href="http://epaper.deshprotikhon.com/" target="_blank">ক্লিক করুন  <i class="fas fa-arrow-right"></i> </a>
                    </div>
                  </div> 

              <?php dynamic_sidebar('epaper-sidebar');?>
              <!-- Epaper Sidebar -->

            </div>
            <!-- end epaper -->
          </div>
        <!-- end column -->
    </div>
    <!-- End category -->
  </section>
  <!-- End company section -->

  <!-- =========================
      Price Sensitive Parts
  ============================-->
  <section id="price-sensitive-part">
    <div class="row">
          <div class="col-md-12 col-sm-12 col-12 price-sensitive-part">
            <!-- Start Ads -->
              <div class="home-page-ads px-3">
                <div class="row">
                  <?php
                  // the query
                  $the_category = new WP_Query( array(
                    'post_type' => 'ads',
                    'post_status' => 'publish',
                    'posts_per_page' => 3,
                    'orderby' => 'post_date',
                    'order' => 'DESC',
                    'type' => 'politics',
                  ));
                  ?>
                  <?php if ( $the_category->have_posts()) : ?>
                  <?php while ( $the_category->have_posts() ) : $the_category->the_post(); ?>
                  <?php $url= get_post_meta($post->ID, 'ads-link', true); ?>
                  <div class="col-md-4 col-sm-12 col-12" id="ads">
                      <a href="<?php echo esc_url($url) ?>" target="_blank"><?php the_post_thumbnail();?></a>
                  </div>
                  <?php endwhile; endif; wp_reset_postdata();?>
                </div>
              </div>
              <!-- end ads -->
          </div>
          <!-- end ads column -->
      <div class="col-md-8 col-sm-12 col-12">
          <div class="one-right-two"  id="mbl-left">
              <div class="content-body">
                <!-- Satrt Category Title -->
                  <div class="cat-title">
                    <div class="title">
                      <h1> রাজনীতি </h1>
                    </div>
                    <div class="link">
                       <?php
                      // the query
                      $the_category = new WP_Query( array(
                        'category_name' => 'politics',
                        'posts_per_page' => 1,
                      ));
                      if($the_category->have_posts()):
                      while ($the_category->have_posts() ):$the_category->the_post();
                      $cats = wp_get_post_categories($post->ID);
                      if($cats) : foreach($cats as $cat) : $category = get_category($cat);endforeach;
                      $cat_lik = get_category_link($category->cat_ID);
                      ?>
                      <a href="<?php echo $cat_lik?>">আরও খবর  <i class="fas fa-arrow-right"></i></a>
                      <?php
                        endif;
                        endwhile;
                      endif;
                      ?>
                    </div>
                  </div> 
                <!-- End cat title -->
                <div class="row">
                      <?php
                      // the query
                      $the_category = new WP_Query( array(
                        'category_name' => 'politics',
                          'posts_per_page' => 4,
                          'offset' => 0,
                          'post__not_in'  =>  $lead,
                      ));
                      if($the_category->have_posts()):
                      while ($the_category->have_posts() ):$the_category->the_post();
                      ?>
                      <div class="col-lg-6 col-md-12 col-sm-12 col-12 ">
                        <div class="secound-content">
                          <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail();?></a>
                          <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                        </div>
                        <!-- End Column -->
                      </div>
                      <?php endwhile;  endif; wp_reset_postdata();?>
                </div>
                <!-- End row -->
              </div>
              <!-- end content body -->
          </div>
           <!-- End one right two category -->

          <!--============ Start Category =============-->
          <div class="one-right-two my-2"  id="mbl-left">
              <!-- Start Ads -->
              <div class="home-page-ads">
                <div class="row">
                  <?php
                  // the query
                  $the_category = new WP_Query( array(
                    'post_type' => 'ads',
                    'post_status' => 'publish',
                    'posts_per_page' => 2,
                    'orderby' => 'post_date',
                    'order' => 'DESC',
                    'type' => 'money-and-trade',
                  ));
                  ?>
                  <?php if ( $the_category->have_posts()) : ?>
                  <?php while ( $the_category->have_posts() ) : $the_category->the_post(); ?>
                  <?php $url= get_post_meta($post->ID, 'ads-link', true); ?>
                  <div class="col-md-6 col-sm-12 col-12" id="ads">
                      <a href="<?php echo esc_url($url) ?>" target="_blank"><?php the_post_thumbnail();?></a>
                  </div>
                  <?php endwhile; endif; wp_reset_postdata();?>
                </div>
              </div>
              <!-- end ads -->
              <div class="content-body">
                <!-- Satrt Category Title -->
                <div class="cat-title">
                    <div class="title">
                      <h1> অর্থনীতি </h1>
                    </div>
                    <div class="link">
                       <?php
                      // the query
                      $the_category = new WP_Query( array(
                        'category_name' => 'money-and-trade',
                        'posts_per_page' => 1,
                      ));
                      if($the_category->have_posts()):
                      while ($the_category->have_posts() ):$the_category->the_post();
                      $cats = wp_get_post_categories($post->ID);
                      if($cats) : foreach($cats as $cat) : $category = get_category($cat);endforeach;
                      $cat_lik = get_category_link($category->cat_ID);
                      ?>
                      <a href="<?php echo $cat_lik?>">আরও খবর  <i class="fas fa-arrow-right"></i></a>
                      <?php
                        endif;
                        endwhile;
                      endif;
                      ?>
                    </div>
                  </div> 
                <!-- End cat title -->
                <div class="row">
                <div class="col-md-6 col-sm-12 col-12 my-2">
                  <?php
                   // the query
                   $the_category = new WP_Query( array(
                     'category_name' => 'money-and-trade',
                      'posts_per_page' => 1,
                      'offset' => 0,
                      'post__not_in'  =>  $lead,
                   ));
                  if($the_category->have_posts()):
                   while ($the_category->have_posts() ):$the_category->the_post();
                   ?>
                  <div class="first-content">
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail();?></a>
                    <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                      <p><?php echo wp_trim_words( get_the_content(), 35, '...' );?></p>
                  </div>
                  <?php endwhile;  endif; wp_reset_postdata();?>
                </div>
                <!-- End Column -->
                <div class="col-md-6 col-sm-12 col-12">
                    <?php
                     // the query
                     $the_category = new WP_Query( array(
                       'category_name' => 'money-and-trade',
                        'posts_per_page' => 5,
                        'offset' => 1,
                        'post__not_in'  =>  $lead,
                     ));
                    if($the_category->have_posts()):
                     while ($the_category->have_posts() ):$the_category->the_post();
                     ?>
                    <div class="box-style">
                      <div class="box-left">
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail()?></a>
                      </div>
                      <div class="box-right">
                        <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                      </div>
                    </div>
                    <?php endwhile;  endif; wp_reset_postdata();?>
                    <!-- End Column -->
                </div>

              </div>
              <!-- End row -->
              </div>
              <!-- end content body -->
          </div>
           <!-- End one right two category -->
           <div class="one-right-two my-2"  id="mbl-left">
              <!-- Start Ads -->
              <div class="home-page-ads">
                <div class="row">
                  <?php
                  // the query
                  $the_category = new WP_Query( array(
                    'post_type' => 'ads',
                    'post_status' => 'publish',
                    'posts_per_page' => 2,
                    'orderby' => 'post_date',
                    'order' => 'DESC',
                    'type' => 'exclusive',
                  ));
                  ?>
                  <?php if ( $the_category->have_posts()) : ?>
                  <?php while ( $the_category->have_posts() ) : $the_category->the_post(); ?>
                  <?php $url= get_post_meta($post->ID, 'ads-link', true); ?>
                  <div class="col-md-6 col-sm-12 col-12" id="ads">
                      <a href="<?php echo esc_url($url) ?>" target="_blank"><?php the_post_thumbnail();?></a>
                  </div>
                  <?php endwhile; endif; wp_reset_postdata();?>
                </div>
              </div>
              <!-- end ads -->
              <div class="content-body">
                <!-- Satrt Category Title -->
                <div class="cat-title">
                    <div class="title">
                      <h1> এক্সক্লুসিভ </h1>
                    </div>
                    <div class="link">
                       <?php
                      // the query
                      $the_category = new WP_Query( array(
                        'category_name' => 'exclusive',
                        'posts_per_page' => 1,
                      ));
                      if($the_category->have_posts()):
                      while ($the_category->have_posts() ):$the_category->the_post();
                      $cats = wp_get_post_categories($post->ID);
                      if($cats) : foreach($cats as $cat) : $category = get_category($cat);endforeach;
                      $cat_lik = get_category_link($category->cat_ID);
                      ?>
                      <a href="<?php echo $cat_lik?>">আরও খবর  <i class="fas fa-arrow-right"></i></a>
                      <?php
                        endif;
                        endwhile;
                      endif;
                      ?>
                    </div>
                  </div> 
                <!-- End cat title -->
                <div class="row">
                <div class="col-md-6 col-sm-12 col-12 my-2">
                  <?php
                   // the query
                   $the_category = new WP_Query( array(
                     'category_name' => 'exclusive',
                      'posts_per_page' => 1,
                      'offset' => 0,
                      'post__not_in'  =>  $lead,
                   ));
                  if($the_category->have_posts()):
                   while ($the_category->have_posts() ):$the_category->the_post();
                   ?>
                  <div class="first-content">
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail();?></a>
                    <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                      <p><?php echo wp_trim_words( get_the_content(), 35, '...' );?></p>
                  </div>
                  <?php endwhile;  endif; wp_reset_postdata();?>
                </div>
                <!-- End Column -->
                <div class="col-md-6 col-sm-12 col-12">
                    <?php
                     // the query
                     $the_category = new WP_Query( array(
                       'category_name' => 'exclusive',
                        'posts_per_page' => 5,
                        'offset' => 1,
                        'post__not_in'  =>  $lead,
                     ));
                    if($the_category->have_posts()):
                     while ($the_category->have_posts() ):$the_category->the_post();
                     ?>
                    <div class="box-style">
                      <div class="box-left">
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail()?></a>
                      </div>
                      <div class="box-right">
                        <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                      </div>
                    </div>
                    <?php endwhile;  endif; wp_reset_postdata();?>
                    <!-- End Column -->
                </div>

              </div>
              <!-- End row -->
              </div>
              <!-- end content body -->
          </div>
           <!-- End one right two category -->

           <div class="one-right-two my-2"  id="mbl-left">
              <!-- Start Ads -->
              <div class="home-page-ads">
                <div class="row">
                  <?php
                  // the query
                  $the_category = new WP_Query( array(
                    'post_type' => 'ads',
                    'post_status' => 'publish',
                    'posts_per_page' => 2,
                    'orderby' => 'post_date',
                    'order' => 'DESC',
                    'type' => 'rumor',
                  ));
                  ?>
                  <?php if ( $the_category->have_posts()) : ?>
                  <?php while ( $the_category->have_posts() ) : $the_category->the_post(); ?>
                  <?php $url= get_post_meta($post->ID, 'ads-link', true); ?>
                  <div class="col-md-6 col-sm-12 col-12" id="ads">
                      <a href="<?php echo esc_url($url) ?>" target="_blank"><?php the_post_thumbnail();?></a>
                  </div>
                  <?php endwhile; endif; wp_reset_postdata();?>
                </div>
              </div>
              <!-- end ads -->
              <div class="content-body">
                <!-- Satrt Category Title -->
                <div class="cat-title">
                    <div class="title">
                      <h1> গুজব </h1>
                    </div>
                    <div class="link">
                       <?php
                      // the query
                      $the_category = new WP_Query( array(
                        'category_name' => 'rumor',
                        'posts_per_page' => 1,
                      ));
                      if($the_category->have_posts()):
                      while ($the_category->have_posts() ):$the_category->the_post();
                      $cats = wp_get_post_categories($post->ID);
                      if($cats) : foreach($cats as $cat) : $category = get_category($cat);endforeach;
                      $cat_lik = get_category_link($category->cat_ID);
                      ?>
                      <a href="<?php echo $cat_lik?>">আরও খবর  <i class="fas fa-arrow-right"></i></a>
                      <?php
                        endif;
                        endwhile;
                      endif;
                      ?>
                    </div>
                  </div> 
                <!-- End cat title -->
                <div class="row">
                <div class="col-md-6 col-sm-12 col-12 my-2">
                  <?php
                   // the query
                   $the_category = new WP_Query( array(
                     'category_name' => 'rumor',
                      'posts_per_page' => 1,
                      'offset' => 0,
                      'post__not_in'  =>  $lead,
                   ));
                  if($the_category->have_posts()):
                   while ($the_category->have_posts() ):$the_category->the_post();
                   ?>
                  <div class="first-content">
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail();?></a>
                    <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                      <p><?php echo wp_trim_words( get_the_content(), 35, '...' );?></p>
                  </div>
                  <?php endwhile;  endif; wp_reset_postdata();?>
                </div>
                <!-- End Column -->
                <div class="col-md-6 col-sm-12 col-12">
                    <?php
                     // the query
                     $the_category = new WP_Query( array(
                       'category_name' => 'rumor',
                        'posts_per_page' => 5,
                        'offset' => 1,
                        'post__not_in'  =>  $lead,
                     ));
                    if($the_category->have_posts()):
                     while ($the_category->have_posts() ):$the_category->the_post();
                     ?>
                    <div class="box-style">
                      <div class="box-left">
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail()?></a>
                      </div>
                      <div class="box-right">
                        <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                      </div>
                    </div>
                    <?php endwhile;  endif; wp_reset_postdata();?>
                    <!-- End Column -->
                </div>

              </div>
              <!-- End row -->
              </div>
              <!-- end content body -->
          </div>
           <!-- End one right two category -->
      </div>
      <!-- end column -->

      <!-- ====== Price section Ads========== -->
      <div class="col-md-4 col-sm-12 col-12">
          <div class="price-sensitive-ads px-2">
            <div class="cat-title">
              <h1> <a href="#">Price Sensitive Information</a> </h1>
            </div>
            <div class="row">
              <?php
              // the query
              $the_category = new WP_Query( array(
                'post_type' => 'ads',
                'post_status' => 'publish',
                'posts_per_page' => 30,
                'orderby' => 'post_date',
                'order' => 'DESC',
                'type' => 'price-sensitive-ads',
              ));
              ?>
              <?php if ( $the_category->have_posts()) : ?>
              <?php while ( $the_category->have_posts() ) : $the_category->the_post(); ?>
              <?php $url= get_post_meta($post->ID, 'ads-link', true); ?>
              <div class="col-md-12 col-sm-12 col-12">
                <div class="price-sensitive-ads">
                  <a href="<?php echo esc_url($url) ?>" target="_blank"><?php the_post_thumbnail();?></a>
                </div>
              </div>
              <?php endwhile; endif; wp_reset_postdata();?>
            </div>
            <!-- end row -->
            <!-- button -->
            <button type="button" id="price-sensitive" name="button"> <a href="http://www.deshprotikhon.com/type/price-sensitive-ads/"> আরও দেখুন</a> </button>
          </div>
          <!-- end price sensitive ads -->
      </div>
      <!-- end column -->
    </div>
    <!-- end row -->
</section>
  <!-- end price sensitive section -->

  <!-- Division News Section -->
         <!-- Ads news -->
         <div class="home-page-ads mx-4">
            <div class="row">
              <?php
              // the query
              $the_category = new WP_Query( array(
                'post_type' => 'ads',
                'post_status' => 'publish',
                'posts_per_page' => 3,
                'orderby' => 'post_date',
                'order' => 'DESC',
                'type' => 'division',
              ));
              ?>
              <?php if ( $the_category->have_posts()) : ?>
              <?php while ( $the_category->have_posts() ) : $the_category->the_post(); ?>
              <?php $url= get_post_meta($post->ID, 'ads-link', true); ?>
              <div class="col-md-4 col-sm-12 col-12">
                <div>
                  <a href="<?php echo esc_url($url) ?>" target="_blank"><?php the_post_thumbnail();?></a>
                </div>
              </div>
              <?php endwhile; endif; wp_reset_postdata();?>
            </div>
        </div>
        <!-- end ads -->
  <section id="division-news">
      <div class="row pd-sm">
                <!-- Satrt Category Title -->
                <div class="cat-title">
                    <div class="title">
                      <h1> বিভাগের খবর</h1>
                    </div>
                    <div class="link">
                       <?php
                      // the query
                      $the_category = new WP_Query( array(
                        'category_name' => 'division',
                        'posts_per_page' => 1,
                      ));
                      if($the_category->have_posts()):
                      while ($the_category->have_posts() ):$the_category->the_post();
                      $cats = wp_get_post_categories($post->ID);
                      if($cats) : foreach($cats as $cat) : $category = get_category($cat);endforeach;
                      $cat_lik = get_category_link($category->cat_ID);
                      ?>
                      <a href="<?php echo $cat_lik?>">আরও খবর  <i class="fas fa-arrow-right"></i></a>
                      <?php
                        endif;
                        endwhile;
                      endif;
                      ?>
                    </div>
                  </div> 
          <!-- End cat title -->
          <div class="row pd-2">
              <div class="col-md-4 col-sm-12 col-12">
                  <?php
                   // the query
                   $the_category = new WP_Query( array(
                     'category_name' => 'division',
                      'posts_per_page' => 1,
                      'offset' => 0,
                      'post__not_in'  =>  $lead,
                   ));
                  if($the_category->have_posts()):
                   while ($the_category->have_posts() ):$the_category->the_post();
                   ?>
                  <div class="first-content">
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail();?></a>
                    <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                      <p><?php echo wp_trim_words( get_the_content(), 20, '...' );?></p>
                  </div>
                  <?php endwhile;  endif; wp_reset_postdata();?>

                  <?php
                     // the query
                     $the_category = new WP_Query( array(
                       'category_name' => 'division',
                        'posts_per_page' => 3,
                        'offset' => 1,
                        'post__not_in'  =>  $lead,
                     ));
                    if($the_category->have_posts()):
                     while ($the_category->have_posts() ):$the_category->the_post();
                     ?>
                    <div class="box-style">
                      <div class="box-left">
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail()?></a>
                      </div>
                      <div class="box-right">
                        <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                      </div>
                    </div>
                    <?php endwhile;  endif; wp_reset_postdata();?>
                    <!-- End Column -->
              </div>
            <!-- End Column -->

            <div class="col-md-4 col-sm-12 col-12">
                  <?php
                   // the query
                   $the_category = new WP_Query( array(
                     'category_name' => 'division',
                      'posts_per_page' => 1,
                      'offset' => 4,
                      'post__not_in'  =>  $lead,
                   ));
                  if($the_category->have_posts()):
                   while ($the_category->have_posts() ):$the_category->the_post();
                   ?>
                  <div class="first-content">
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail();?></a>
                    <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                      <p><?php echo wp_trim_words( get_the_content(), 20, '...' );?></p>
                  </div>
                  <?php endwhile;  endif; wp_reset_postdata();?>

                  <?php
                     // the query
                     $the_category = new WP_Query( array(
                       'category_name' => 'division',
                        'posts_per_page' => 3,
                        'offset' => 5,
                        'post__not_in'  =>  $lead,
                     ));
                    if($the_category->have_posts()):
                     while ($the_category->have_posts() ):$the_category->the_post();
                     ?>
                    <div class="box-style">
                      <div class="box-left">
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail()?></a>
                      </div>
                      <div class="box-right">
                        <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                      </div>
                    </div>
                    <?php endwhile;  endif; wp_reset_postdata();?>
                    <!-- End Column -->
            </div>
            <!-- End Column -->

            <div class="col-md-4 col-sm-12 col-12">
                  <?php
                   // the query
                   $the_category = new WP_Query( array(
                     'category_name' => 'division',
                      'posts_per_page' => 1,
                      'offset' => 8,
                      'post__not_in'  =>  $lead,
                   ));
                  if($the_category->have_posts()):
                   while ($the_category->have_posts() ):$the_category->the_post();
                   ?>
                  <div class="first-content">
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail();?></a>
                    <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                      <p><?php echo wp_trim_words( get_the_content(), 20, '...' );?></p>
                  </div>
                  <?php endwhile;  endif; wp_reset_postdata();?>

                  <?php
                     // the query
                     $the_category = new WP_Query( array(
                       'category_name' => 'division',
                        'posts_per_page' => 3,
                        'offset' => 9,
                        'post__not_in'  =>  $lead,
                     ));
                    if($the_category->have_posts()):
                     while ($the_category->have_posts() ):$the_category->the_post();
                     ?>
                    <div class="box-style">
                      <div class="box-left">
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail()?></a>
                      </div>
                      <div class="box-right">
                        <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                      </div>
                    </div>
                    <?php endwhile;  endif; wp_reset_postdata();?>
                    <!-- End Column -->
            </div>
            <!-- End Column -->
          </div>
      </div>
      <!-- end row -->
  </section>
  <!-- end division news -->

    <!-- ===================
        Main Body Part
    =====================-->
  <div class="main-body">
    <section>
    <div class="home-page-ads" id="inter-ads">
          <div class="row">
            <?php
             // the query
             $the_category = new WP_Query( array(
               'post_type' => 'ads',
               'post_status' => 'publish',
               'posts_per_page' => 3,
               'orderby' => 'post_date',
               'order' => 'DESC',
               'type' => 'international',
             ));
             ?>
            <?php if ( $the_category->have_posts()) : ?>
            <?php while ( $the_category->have_posts() ) : $the_category->the_post(); ?>
            <?php $url= get_post_meta($post->ID, 'ads-link', true); ?>
            <div class="col-md-4 col-sm-12 col-12" id="mbl-left">
              <div>
                <a href="<?php echo esc_url($url) ?>" target="_blank"><?php the_post_thumbnail();?></a>
              </div>
            </div>
            <?php endwhile; endif; wp_reset_postdata();?>
          </div>
    </div>
    <!-- end ads -->
    <div class="row">
      <div class="col-md-9 col-sm-12 col-12">
        <!-- ===========All Category============== -->
        <section>
          <div class="cat-section my-2">
            <div class="row">
                <div class="col-md-4 col-sm-12 col-12">
                  <!-- Satrt Category Title -->
                <!-- Satrt Category Title -->
                <div class="cat-title">
                    <div class="title">
                      <h1> আন্তর্জাতিক</h1>
                    </div>
                    <div class="link">
                       <?php
                      // the query
                      $the_category = new WP_Query( array(
                        'category_name' => 'international',
                        'posts_per_page' => 1,
                      ));
                      if($the_category->have_posts()):
                      while ($the_category->have_posts() ):$the_category->the_post();
                      $cats = wp_get_post_categories($post->ID);
                      if($cats) : foreach($cats as $cat) : $category = get_category($cat);endforeach;
                      $cat_lik = get_category_link($category->cat_ID);
                      ?>
                      <a href="<?php echo $cat_lik?>">আরও খবর  <i class="fas fa-arrow-right"></i></a>
                      <?php
                        endif;
                        endwhile;
                      endif;
                      ?>
                    </div>
                  </div> 
                  <!-- End cat title -->
                      <?php
                      // the query
                      $the_category = new WP_Query( array(
                        'category_name' => 'international',
                        'posts_per_page' => 1,
                        'offset' => 0,
                        'post__not_in'  =>  $lead,
                      ));
                      if($the_category->have_posts()):
                      while ($the_category->have_posts() ):$the_category->the_post();
                      ?>
                      <div class="first-content">
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail();?></a>
                        <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                          <p><?php echo wp_trim_words( get_the_content(), 10, '...' );?></p>
                      </div>
                      <?php endwhile;  endif; wp_reset_postdata();?>

                      <?php
                        // the query
                        $the_category = new WP_Query( array(
                          'category_name' => 'international',
                            'posts_per_page' => 3,
                            'offset' => 1,
                            'post__not_in'  =>  $lead,
                        ));
                        if($the_category->have_posts()):
                        while ($the_category->have_posts() ):$the_category->the_post();
                        ?>
                        
                      <li><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
                      
                      <?php endwhile;  endif; wp_reset_postdata();?>
                      
                </div>
                  <!-- End category Column -->
                  
                <div class="col-md-4 col-sm-12 col-12">
                  <!-- Satrt Category Title -->
                  <div class="cat-title">
                    <div class="title">
                      <h1> বিনোদন </h1>
                    </div>
                    <div class="link">
                       <?php
                      // the query
                      $the_category = new WP_Query( array(
                        'category_name' => 'entertainment',
                        'posts_per_page' => 1,
                      ));
                      if($the_category->have_posts()):
                      while ($the_category->have_posts() ):$the_category->the_post();
                      $cats = wp_get_post_categories($post->ID);
                      if($cats) : foreach($cats as $cat) : $category = get_category($cat);endforeach;
                      $cat_lik = get_category_link($category->cat_ID);
                      ?>
                      <a href="<?php echo $cat_lik?>">আরও খবর  <i class="fas fa-arrow-right"></i></a>
                      <?php
                        endif;
                        endwhile;
                      endif;
                      ?>
                    </div>
                  </div> 
                  <!-- End cat title -->
                      <?php
                      // the query
                      $the_category = new WP_Query( array(
                        'category_name' => 'entertainment',
                        'posts_per_page' => 1,
                        'offset' => 0,
                        'post__not_in'  =>  $lead,
                      ));
                      if($the_category->have_posts()):
                      while ($the_category->have_posts() ):$the_category->the_post();
                      ?>
                      <div class="first-content">
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail();?></a>
                        <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                          <p><?php echo wp_trim_words( get_the_content(), 10, '...' );?></p>
                      </div>
                      <?php endwhile;  endif; wp_reset_postdata();?>

                      <?php
                        // the query
                        $the_category = new WP_Query( array(
                          'category_name' => 'entertainment',
                            'posts_per_page' => 3,
                            'offset' => 1,
                            'post__not_in'  =>  $lead,
                        ));
                        if($the_category->have_posts()):
                        while ($the_category->have_posts() ):$the_category->the_post();
                        ?>
                        
                      <li><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
                      
                      <?php endwhile;  endif; wp_reset_postdata();?>
                      
                </div>
                  <!-- End category Column -->

              <div class="col-md-4 col-sm-12 col-12">
                  <!-- Satrt Category Title -->
                  <div class="cat-title">
                    <div class="title">
                      <h1> খেলাধুলা </h1>
                    </div>
                    <div class="link">
                       <?php
                      // the query
                      $the_category = new WP_Query( array(
                        'category_name' => 'sports',
                        'posts_per_page' => 1,
                      ));
                      if($the_category->have_posts()):
                      while ($the_category->have_posts() ):$the_category->the_post();
                      $cats = wp_get_post_categories($post->ID);
                      if($cats) : foreach($cats as $cat) : $category = get_category($cat);endforeach;
                      $cat_lik = get_category_link($category->cat_ID);
                      ?>
                      <a href="<?php echo $cat_lik?>">আরও খবর  <i class="fas fa-arrow-right"></i></a>
                      <?php
                        endif;
                        endwhile;
                      endif;
                      ?>
                    </div>
                  </div> 
                  <!-- End cat title -->
                      <?php
                      // the query
                      $the_category = new WP_Query( array(
                        'category_name' => 'sports',
                        'posts_per_page' => 1,
                        'offset' => 0,
                        'post__not_in'  =>  $lead,
                      ));
                      if($the_category->have_posts()):
                      while ($the_category->have_posts() ):$the_category->the_post();
                      ?>
                      <div class="first-content">
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail();?></a>
                        <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                          <p><?php echo wp_trim_words( get_the_content(), 10, '...' );?></p>
                      </div>
                      <?php endwhile;  endif; wp_reset_postdata();?>

                      <?php
                        // the query
                        $the_category = new WP_Query( array(
                          'category_name' => 'sports',
                            'posts_per_page' => 3,
                            'offset' => 1,
                            'post__not_in'  =>  $lead,
                        ));
                        if($the_category->have_posts()):
                        while ($the_category->have_posts() ):$the_category->the_post();
                        ?>
                        
                      <li><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
                      
                      <?php endwhile;  endif; wp_reset_postdata();?>
                      
                </div>
                  <!-- End category Column -->
          </div>
            
        </section>
        <!-- end category section -->
        
      </div>
      <!-- end main body column -->

      <!-- ===============================
                Sidebar Part
      =============================== -->
      <div class="col-md-3 col-sm-12 col-12">
            <!-- =========================
                  Start Tabbar Part
            ============================ -->
            <div class="tab-bar my-3">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="latest-tab" data-toggle="tab" href="#latest" role="tab" aria-controls="home" aria-selected="true"> সর্বশেষ সংবাদ </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="popular-tab" data-toggle="tab" href="#popular" role="tab" aria-controls="profile" aria-selected="false">সর্বাধিক পঠিত</a>
              </li>
            </ul>
            <div class="tab-content" id="myTabContent">
              <!-- !st Tab Content -->
              <div class="tab-pane fade show active" id="latest" role="tabpanel" aria-labelledby="home-tab">
                <div class="tab-news">
                  <ul>
                    <?php
                    $latest = new WP_Query( array(
                      'posts_per_page' => 10, /* how many post you need to display */
                      'offset' => 0,
                      // 'category__not_in' => array(31337),
                      'orderby' => 'post_date',
                      'order' => 'DESC',
                      'post_type' => 'post', /* your post type name */
                      'post_status' => 'publish'

                    ) );
                      ?>
                    <?php if ( $latest->have_posts() ) : ?>
                    <?php while ( $latest->have_posts() ) : $latest->the_post(); ?>
                    <li>
                      <div class="box-style">
                        <div class="box-left">
                          <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail();?></a>
                        </div>
                        <div class="box-right">
                          <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                        </div>
                      </div>
                    </li>
                    <?php endwhile; wp_reset_postdata(); else : endif; ?>
                  </ul>
                </div>
              </div>
              <!-- end content -->
              <!-- 2nd tab Content -->
              <div class="tab-pane fade" id="popular" role="tabpanel" aria-labelledby="profile-tab">
                <div class="tab-news">
                  <ul>
                    <?php
                    $popular = new WP_Query( array(
                      'meta_key' => 'my_post_viewed',
                      'orderby' => 'meta_value_num',
                      'posts_per_page' => 10,
                      'offset' => 0,
                      // 'category__not_in' => array(31337),
                    ) );
                      ?>
                    <?php if ( $popular->have_posts() ) : ?>
                    <?php while ( $popular->have_posts() ) : $popular->the_post(); ?>
                    <li>
                      <div class="box-style">
                        <div class="box-left">
                          <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail();?></a>
                        </div>
                        <div class="box-right">
                          <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                        </div>
                      </div>
                    </li>
                    <?php endwhile; else :  endif; wp_reset_postdata();?>
                  </ul>

                </div>
              </div>

            </div>
            <!-- End content -->
          </div>
          <!-- End TabBar -->

        <!-- ========== Home Sidebar Ads  ==========-->
        <asside>
              <?php dynamic_sidebar('home-sidebar');?>
        </asside>
        <!-- End Main Sidebar -->

      </div>
      <!-- End Sidebar column -->
    </div>
    <!-- end row -->

   </section>
   <!-- end section -->
  </div>
  <!-- end main body part -->

  <section class="last-cats">
       <div class="home-page-ads mx-4" id="inter-ads">
          <div class="row">
            <?php
             // the query
             $the_category = new WP_Query( array(
               'post_type' => 'ads',
               'post_status' => 'publish',
               'posts_per_page' => 3,
               'orderby' => 'post_date',
               'order' => 'DESC',
               'type' => 'life-style',
             ));
             ?>
            <?php if ( $the_category->have_posts()) : ?>
            <?php while ( $the_category->have_posts() ) : $the_category->the_post(); ?>
            <?php $url= get_post_meta($post->ID, 'ads-link', true); ?>
            <div class="col-md-4 col-sm-12 col-12" id="mbl-left">
              <div>
                <a href="<?php echo esc_url($url) ?>" target="_blank"><?php the_post_thumbnail();?></a>
              </div>
            </div>
            <?php endwhile; endif; wp_reset_postdata();?>
          </div>
       </div>
    <!-- end ads -->

        <!-- ===========last Category============== -->
          <div class="last-cat my-2">
            <div class="row">
                <div class="col-md-3 col-sm-12 col-12">
                      <!-- Satrt Category Title -->
                      <div class="cat-title">
                          <div class="title">
                            <h1> লাইফস্টাইল</h1>
                          </div>
                          <div class="link">
                            <?php
                            // the query
                            $the_category = new WP_Query( array(
                              'category_name' => 'life-style',
                              'posts_per_page' => 1,
                            ));
                            if($the_category->have_posts()):
                            while ($the_category->have_posts() ):$the_category->the_post();
                            $cats = wp_get_post_categories($post->ID);
                            if($cats) : foreach($cats as $cat) : $category = get_category($cat);endforeach;
                            $cat_lik = get_category_link($category->cat_ID);
                            ?>
                            <a href="<?php echo $cat_lik?>">আরও খবর  <i class="fas fa-arrow-right"></i></a>
                            <?php
                              endif;
                              endwhile;
                            endif;
                            ?>
                          </div>
                      </div> 
                      <!-- End cat title -->
                        <?php
                        // the query
                        $the_category = new WP_Query( array(
                          'category_name' => 'life-style',
                          'posts_per_page' => 1,
                          'offset' => 0,
                          'post__not_in'  =>  $lead,
                        ));
                        if($the_category->have_posts()):
                        while ($the_category->have_posts() ):$the_category->the_post();
                        ?>
                        <div class="first-content">
                          <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail();?></a>
                          <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                        </div>
                        <?php endwhile;  endif; wp_reset_postdata();?>

                        <?php
                          // the query
                          $the_category = new WP_Query( array(
                            'category_name' => 'life-style',
                              'posts_per_page' => 2,
                              'offset' => 1,
                              'post__not_in'  =>  $lead,
                          ));
                          if($the_category->have_posts()):
                          while ($the_category->have_posts() ):$the_category->the_post();
                          ?>
                          <div class="box-style">
                            <div class="box-left">
                              <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail();?></a>
                            </div>
                            <div class="box-right">
                              <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                            </div>
                          </div>                      
                        <?php endwhile;  endif; wp_reset_postdata();?>                     
                  </div>
                    <!-- End category Column -->       
                    
                    <div class="col-md-3 col-sm-12 col-12">
                      <!-- Satrt Category Title -->
                      <div class="cat-title">
                          <div class="title">
                            <h1> তথ্যপ্রযুক্তি</h1>
                          </div>
                          <div class="link">
                            <?php
                            // the query
                            $the_category = new WP_Query( array(
                              'category_name' => 'technology',
                              'posts_per_page' => 1,
                            ));
                            if($the_category->have_posts()):
                            while ($the_category->have_posts() ):$the_category->the_post();
                            $cats = wp_get_post_categories($post->ID);
                            if($cats) : foreach($cats as $cat) : $category = get_category($cat);endforeach;
                            $cat_lik = get_category_link($category->cat_ID);
                            ?>
                            <a href="<?php echo $cat_lik?>">আরও খবর  <i class="fas fa-arrow-right"></i></a>
                            <?php
                              endif;
                              endwhile;
                            endif;
                            ?>
                          </div>
                      </div> 
                      <!-- End cat title -->
                        <?php
                        // the query
                        $the_category = new WP_Query( array(
                          'category_name' => 'technology',
                          'posts_per_page' => 1,
                          'offset' => 0,
                          'post__not_in'  =>  $lead,
                        ));
                        if($the_category->have_posts()):
                        while ($the_category->have_posts() ):$the_category->the_post();
                        ?>
                        <div class="first-content">
                          <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail();?></a>
                          <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                        </div>
                        <?php endwhile;  endif; wp_reset_postdata();?>

                        <?php
                          // the query
                          $the_category = new WP_Query( array(
                            'category_name' => 'technology',
                              'posts_per_page' => 2,
                              'offset' => 1,
                              'post__not_in'  =>  $lead,
                          ));
                          if($the_category->have_posts()):
                          while ($the_category->have_posts() ):$the_category->the_post();
                          ?>
                          <div class="box-style">
                            <div class="box-left">
                              <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail();?></a>
                            </div>
                            <div class="box-right">
                              <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                            </div>
                          </div>                      
                        <?php endwhile;  endif; wp_reset_postdata();?>                     
                  </div>
                    <!-- End category Column -->           

                    <div class="col-md-3 col-sm-12 col-12">
                      <!-- Satrt Category Title -->
                      <div class="cat-title">
                          <div class="title">
                            <h1> ধর্ম</h1>
                          </div>
                          <div class="link">
                            <?php
                            // the query
                            $the_category = new WP_Query( array(
                              'category_name' => 'islam-and-life',
                              'posts_per_page' => 1,
                            ));
                            if($the_category->have_posts()):
                            while ($the_category->have_posts() ):$the_category->the_post();
                            $cats = wp_get_post_categories($post->ID);
                            if($cats) : foreach($cats as $cat) : $category = get_category($cat);endforeach;
                            $cat_lik = get_category_link($category->cat_ID);
                            ?>
                            <a href="<?php echo $cat_lik?>">আরও খবর  <i class="fas fa-arrow-right"></i></a>
                            <?php
                              endif;
                              endwhile;
                            endif;
                            ?>
                          </div>
                      </div> 
                      <!-- End cat title -->
                        <?php
                        // the query
                        $the_category = new WP_Query( array(
                          'category_name' => 'islam-and-life',
                          'posts_per_page' => 1,
                          'offset' => 0,
                          'post__not_in'  =>  $lead,
                        ));
                        if($the_category->have_posts()):
                        while ($the_category->have_posts() ):$the_category->the_post();
                        ?>
                        <div class="first-content">
                          <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail();?></a>
                          <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                        </div>
                        <?php endwhile;  endif; wp_reset_postdata();?>

                        <?php
                          // the query
                          $the_category = new WP_Query( array(
                            'category_name' => 'islam-and-life',
                              'posts_per_page' => 2,
                              'offset' => 1,
                              'post__not_in'  =>  $lead,
                          ));
                          if($the_category->have_posts()):
                          while ($the_category->have_posts() ):$the_category->the_post();
                          ?>
                          <div class="box-style">
                            <div class="box-left">
                              <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail();?></a>
                            </div>
                            <div class="box-right">
                              <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                            </div>
                          </div>                      
                        <?php endwhile;  endif; wp_reset_postdata();?>                     
                  </div>
                    <!-- End category Column -->           

                    <div class="col-md-3 col-sm-12 col-12">
                      <!-- Satrt Category Title -->
                      <div class="cat-title">
                          <div class="title">
                            <h1> জবস</h1>
                          </div>
                          <div class="link">
                            <?php
                            // the query
                            $the_category = new WP_Query( array(
                              'category_name' => 'job-news',
                              'posts_per_page' => 1,
                            ));
                            if($the_category->have_posts()):
                            while ($the_category->have_posts() ):$the_category->the_post();
                            $cats = wp_get_post_categories($post->ID);
                            if($cats) : foreach($cats as $cat) : $category = get_category($cat);endforeach;
                            $cat_lik = get_category_link($category->cat_ID);
                            ?>
                            <a href="<?php echo $cat_lik?>">আরও খবর  <i class="fas fa-arrow-right"></i></a>
                            <?php
                              endif;
                              endwhile;
                            endif;
                            ?>
                          </div>
                      </div> 
                      <!-- End cat title -->
                        <?php
                        // the query
                        $the_category = new WP_Query( array(
                          'category_name' => 'job-news',
                          'posts_per_page' => 1,
                          'offset' => 0,
                          'post__not_in'  =>  $lead,
                        ));
                        if($the_category->have_posts()):
                        while ($the_category->have_posts() ):$the_category->the_post();
                        ?>
                        <div class="first-content">
                          <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail();?></a>
                          <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                        </div>
                        <?php endwhile;  endif; wp_reset_postdata();?>

                        <?php
                          // the query
                          $the_category = new WP_Query( array(
                            'category_name' => 'job-news',
                              'posts_per_page' => 2,
                              'offset' => 1,
                              'post__not_in'  =>  $lead,
                          ));
                          if($the_category->have_posts()):
                          while ($the_category->have_posts() ):$the_category->the_post();
                          ?>
                          <div class="box-style">
                            <div class="box-left">
                              <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail();?></a>
                            </div>
                            <div class="box-right">
                              <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                            </div>
                          </div>                      
                        <?php endwhile;  endif; wp_reset_postdata();?>                     
                  </div>
                    <!-- End category Column -->           
              
              </div>
              <!-- end row -->
          </div>
          <!-- end column -->
  </section>


</div>
  <!-- End Whole Body Container Section -->
<?php get_footer(); ?>