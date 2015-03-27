<div id="block-<?php print $block->module .'-'. $block->delta; ?>" class="block">

  <?php if ($block->subject): ?>
    <h2><?php print $block->subject ?></h2>
  <?php endif;?>

  <div class="content">
    <?php print $content ?>
  </div>

</div>
