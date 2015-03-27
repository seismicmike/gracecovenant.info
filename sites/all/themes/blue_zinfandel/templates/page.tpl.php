<div id="header">
  <a href="<?php print url(); ?>"><?php print $site_name; ?></a><br />
  <?php print $site_slogan; ?>
</div>

<?php if ($main_menu): ?>
  <div id="navbar">
    <?php print theme('links__system_main_menu', array(
      'links' => $main_menu,
      'attributes' => array(
      'id' => 'main-menu-links',
      'class' => array('primary-links', 'links', 'clearfix'),
    ),
      'heading' => array(
      'text' => t('Main menu'),
      'level' => 'h2',
      'class' => array('element-invisible'),
    ),
    )); ?>
  </div>
<?php endif; ?>

<div id="wrap">
  <div id="content">

<!-- begin l_sidebar -->

    <?php if ($page['left']): ?>
      <div id="l_sidebar">
        <?php print render($page['left']); ?>
      </div>
    <?php endif; ?>

<!-- end l_sidebar -->

    <div id="contentmiddle">
      <?php print $messages; ?>
      <?php print $help; ?>
      <?php print render($tabs); ?>
      <?php print render($page['content']); ?>
    </div>

<!-- The main column ends  -->

<!-- begin footer -->

    <div style="clear: both;"></div>
    <div style="clear: both;"></div>

  <?php if ($page['footer']): ?>
    <div id="footer">
      <?php print render($page['footer']); ?>
    </div>
  <?php endif; ?>


  </div>
</div>