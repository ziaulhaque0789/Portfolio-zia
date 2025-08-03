<?php
/**
 * The template for displaying comments
 *
 * @package Apparel-Merchandiser
 */

if (post_password_required()) {
  return;
}
?>

<div id="comments" class="mt-5">
  <?php if (have_comments()) : ?>
    <h2 class="h5 mb-4">
      <?php
      printf(
        _nx('One comment', '%1$s comments', get_comments_number(), 'comments title', 'apparel-merchandiser'),
        number_format_i18n(get_comments_number())
      );
      ?>
    </h2>

    <ul class="list-unstyled mb-4">
      <?php
      wp_list_comments([
        'style' => 'ul',
        'short_ping' => true,
        'avatar_size' => 50,
      ]);
      ?>
    </ul>

    <?php the_comments_navigation(); ?>
  <?php endif; ?>

  <?php if (comments_open()) : ?>
    <div class="comment-form mt-4">
      <?php comment_form(); ?>
    </div>
  <?php endif; ?>
</div>
