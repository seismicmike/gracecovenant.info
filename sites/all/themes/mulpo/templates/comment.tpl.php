<?php // $Id$ ?>
<li>
  <cite><?php print $author; ?></cite> on <?php print format_date($comment->timestamp); ?>
  <div class="commenttext">
    <?php print $content; ?>
  </div>
  <?php if ($picture) : ?>
    <br class="clear" />
  <?php endif; ?>
  <div class="links"><?php print $links ?></div>
</li>