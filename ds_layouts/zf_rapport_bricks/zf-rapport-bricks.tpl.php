<?php
/**
 * @file
 * Template for Zurb Foundation Two column bricks Display Suite layout.
 */
?>
<<?php print $layout_wrapper; print $layout_attributes; ?> class="zf-2col-bricks rapport-node <?php print $classes;?>">

  <?php if (isset($title_suffix['contextual_links'])): ?>
    <?php print render($title_suffix['contextual_links']); ?>
  <?php endif; ?>
  <div class="row">

  <?php if (!empty($main_left)): ?>
    <div class="columns large-4 small-12">
      <div class="stycke">
      <?php print $main_left; ?>
      </div>
    </div>
  <?php endif; ?>

  <?php if (!empty($main_right)): ?>
    <div class="columns large-8 small-12">
        <?php print $main_right; ?>
      <div class="bottom">
        <?php print $main_bottom; ?>
      </div>
    </div>
  <?php endif; ?>
  
</div>

</<?php print $layout_wrapper ?>>

<?php if (!empty($drupal_render_children)): ?>
  <?php print $drupal_render_children ?>
<?php endif; ?>
