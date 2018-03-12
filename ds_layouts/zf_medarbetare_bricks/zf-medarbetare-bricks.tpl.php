<?php
/**
 * @file
 * Template for Zurb Foundation Two column bricks Display Suite layout.
 */
?>
<<?php print $layout_wrapper; print $layout_attributes; ?> class="zf-2col-bricks <?php print $classes;?>">

  <?php if (isset($title_suffix['contextual_links'])): ?>
    <?php print render($title_suffix['contextual_links']); ?>
  <?php endif; ?>


  <?php if (!empty($above_left) || !empty($above_right)): ?>
    <div class="<?php print $zf_wrapper_classes; ?>">
      <<?php print $above_left_wrapper ?> class="columns small-12 medium-6 group-above-left<?php print $above_left_classes; ?>">
      <?php print $above_left; ?>
      </<?php print $above_left_wrapper ?>>

      <<?php print $above_right_wrapper ?> class="columns small-12 medium-6 group-above-right<?php print $above_right_classes; ?>">
      <?php print $above_right; ?>
      </<?php print $above_right_wrapper ?>>
    </div>
  <?php endif; ?>

  <?php if (!empty($middle)): ?>
    <div class="<?php print $zf_wrapper_classes; ?>">
      <<?php print $middle_wrapper ?> class="columns small-12 medium-9 group-middle<?php print $middle_classes; ?>">
      <?php print $middle; ?>
      </<?php print $middle_wrapper ?>>
    </div>
  <?php endif; ?>


</<?php print $layout_wrapper ?>>

<?php if (!empty($drupal_render_children)): ?>
  <?php print $drupal_render_children ?>
<?php endif; ?>
