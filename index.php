<?php
/**
 * The main template file
 *
 * @package Apparel-Merchandiser
 */

get_header();
?>

 <!-- Google Tag Manager (noscript) -->
     
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KKPZ3Z9M"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


<div id="content" class="site-content container pt-4 pb-5">
  <div id="primary" class="content-area">
    <main id="main" class="site-main">

      <!-- Hero Section -->
      <div class="container py-5 mt-5 hero-blog-section shadow-lg">
        <svg class="position-absolute top-0 start-0 w-100 h-100 opacity-25 svg-bg" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
          <defs>
            <pattern id="pattern" width="60" height="60" patternUnits="userSpaceOnUse">
              <circle cx="30" cy="30" r="1.5" fill="white" />
            </pattern>
          </defs>
          <rect width="100%" height="100%" fill="url(#pattern)" />
        </svg>

        <div class="py-5 container text-white text-center position-relative">
          <div class="position-absolute top-0 start-0 w-100 h-100"></div>
          <div class="container position-relative">
            <h1 class="fw-bold fs-4 fs-lg-0">Welcome to My Learning Room</h1>
            <p class="lead mb-0">Let’s Read, Learn, and Grow Together.</p>
          </div>
        </div>
      </div>

      <!-- Blog Posts -->
      <div class="row">
        <div class="col-lg-8">
          <?php
          if (have_posts()) :
            while (have_posts()) : the_post();
          ?>
              <article id="post-<?php the_ID(); ?>" <?php post_class('card mb-4'); ?>>
                <div class="row g-0">
                  <?php if (has_post_thumbnail()) : ?>
                    <div class="col-md-5">
                      <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('medium', ['class' => 'img-fluid rounded-start w-100 h-100 object-fit-cover']); ?>
                      </a>
                    </div>
                  <?php endif; ?>

                  <div class="col">
                    <div class="card-body">
                      <div class="d-flex justify-content-between mb-2">
                        <div><?php the_category(', '); ?></div>
                        <?php if (is_sticky()) : ?>
                          <span class="badge bg-danger"><i class="fa-solid fa-star"></i> Sticky</span>
                        <?php endif; ?>
                      </div>

                      <a href="<?php the_permalink(); ?>" class="text-decoration-none text-dark">
                        <h2 class="card-title h5"><?php the_title(); ?></h2>
                      </a>

                      <p class="meta small text-muted mb-2">
                        <?php the_time('F j, Y'); ?> • <?php the_author(); ?> • 
                        <?php comments_number('No Comments', '1 Comment', '% Comments'); ?>
                      </p>

                      <p class="card-text">
                        <?php echo wp_trim_words(get_the_excerpt(), 30); ?>
                      </p>

                      <a href="<?php the_permalink(); ?>" class="btn btn-sm btn-outline-primary">Read More »</a>
                    </div>
                  </div>
                </div>
              </article>
          <?php
            endwhile;

            the_posts_pagination([
              'mid_size' => 2,
              'prev_text' => __('« Prev'),
              'next_text' => __('Next »'),
            ]);

          else :
            echo '<p>No posts found.</p>';
          endif;
          ?>
        </div>
        
       <!-- <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3602557870695275"
     crossorigin="anonymous"></script>-->
     
     <!-- Google Tag Manager (noscript) -->
     <!--
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KKPZ3Z9M"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
--><!-- End Google Tag Manager (noscript) -->

<!-- leader -->
<!--
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-3602557870695275"
     data-ad-slot="1532958923"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
-->
        <!-- Sidebar -->
        <div class="col-lg-4">
          <?php get_sidebar(); ?>
        </div>
      </div>

    </main>
  </div>
</div>

<?php get_footer(); ?>