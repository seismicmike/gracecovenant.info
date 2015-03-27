<?php 
// $Id$ 
?>

<div id="header">

<div class="headerleft">
	<div id="logowrapper">
        <?php if ($site_name) { ?><div id="siteName">
            <a href="<?php print $base_path ?>" title="<?php print t('Home') ?>"><?php print $site_name ?></a>
          </div><?php } ?>
        <?php if ($site_slogan) { ?><p><?php print $site_slogan ?></p><?php } ?>
      </div>
	</div>

<div class="headerright">
        <?php print theme('links__system_main_menu', array(
          'links' => $main_menu,
          'attributes' => array(
          'id' => 'main-menu-links',
          'class' => array('primary-links', 'links'),
        ),
          'heading' => array(
          'text' => t('Main menu'),
          'level' => 'h2',
          'class' => array('element-invisible'),
        ),
        )); ?>
</div>

</div>
<div id="wrapper"><!-- to color center white  -->
<div id="content">

	<div id="contentleft">
		<?php print $messages; ?>
        <?php print render($page['help']); ?>
        <?php print render($tabs); ?>		
		<?php print render($page['content']); ?>
	</div>

	
<!-- begin r_sidebar -->

	<div id="r_sidebar">
	  <?php print render($page['right']); ?>
	  <?php print render($page['left']); ?>
	</div>

<!-- end r_sidebar -->
<div style="clear:both;"></div>

</div>

<!-- The main column ends  -->

</div> <!-- wrapper ends  -->

<!-- begin footer -->




<div id="footerbg">

	<div id="footer">
		<?php print render($page['footer']); ?>
	</div>

</div>

</body>
</html>