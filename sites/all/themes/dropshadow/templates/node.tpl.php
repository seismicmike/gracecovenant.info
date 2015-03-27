<?php // $Id$ ?>

  <div class="node<?php if ($sticky) { print " sticky"; } ?><?php if (!$status) { print " node-unpublished"; } ?>">
    <?php if ($picture) {
      print $picture;
    }?>
    <div class="contenttitle">
    <h1><a href="<?php print $node_url?>"><?php print $title?></a></h1>
    <p><?php print format_date($node->created); ?>
    <?php if (!$page && isset($comment_link)) { // We're in teaser view ?>
       | <?php print $comment_link; ?>
    <?php }; ?>
    </p>
    </div>
    <div class="content">
     	<?php
	      // We hide the comments and links now so that we can render them later.
	      hide($content['comments']);
	      hide($content['links']);
	      print render($content);
	    ?>
    </div>
    <?//php if ($terms) { ?><div class="taxonomy"><?//php print t('Tags: ') . $terms; ?></div><?//php }; ?>
    <?php if (render($content['links'])):?><div class="links">&raquo; <?php print render($content['links']); ?></div><?php endif; ?>
  </div>

  <?php print render($content['comments']); ?>

  <div class="clear"></div>
  <div class="postspace">

  </div>
