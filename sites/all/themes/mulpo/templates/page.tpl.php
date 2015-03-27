<div id="wrapper"> <!--width independent from body-->

	

	<div id="header">	  	

 		  <?php if ($logo): ?>
	        <div id="logo"><a href="<?php print $base_path; ?>" title="<?php print t('Home'); ?>" rel="home"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" id="logo-image" /></a></div>
	      <?php endif; ?> 
	
		  <?php if ($main_menu): ?>
	      <div id="navigation">
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
	    <?php endif; ?>
	
		  <?php if ($site_name): ?>
			<h1 id="site-name"><a href="<?php print $base_path; ?>" title="<?php print t('Home'); ?>" rel="home">
		       <?php print $site_name; ?> </a>
			</h1>
		  <?php endif; ?> 
		  <?php if ($site_slogan): ?>
			<h2 id="slogan">
		       <?php print $site_slogan; ?>
			</h1>
		  <?php endif; ?>
		
		 
		  
		
		  <?php if ($page['header']): ?>
	          <?php render($page['header']) ?>
	      <?php endif; ?>
	  
	</div> <!-- end header -->
	
	

	<div id="main">
		

	    <?php if ($page['sidebar_first']): ?>
	      <div id="sidebar-left" class="sidebar">
	        <?php print render($page['sidebar_first']); ?>
	      </div>
	    <?php endif; ?>
	
	
	  <div id="maincontent">
	  		
	  		<?php if ($page['content_top']): ?>
              <div id="content-top">
                <?php print render($page['content_top']); ?>
              </div> <!-- /#content-top -->
            <?php endif; ?>
		
		    <?php print $messages ?>
		
		    <?php if ($title): ?>
              <h1 class="title"><?php print $title; ?></h1>
            <?php endif; ?>
		
		   	<?php if ($tabs): ?>
		        <div class="tabs">
		          <?php print render($tabs); ?>
		        </div>
		      <?php endif; ?>
		
			<?php print render($page['content']); ?>
			
			  <?php if ($page['content_bottom']): ?>
		        <div id="content-bottom">
		          <?php print render($page['content_bottom']); ?>
		        </div> <!-- /#content-bottom -->
		      <?php endif; ?>
        
	  </div>		
	  


	</div>
	
  <?php if ($page['footer']): ?>
    <div id="footer">
      <?php print render($page['footer']); ?>
    </div>
  <?php endif; ?>
	
	<?php if ($page['closure_region']): ?>
      <div id="closure-blocks"><?php print render($page['closure_region']); ?></div>
    <?php endif; ?>

</div>

</body>
</html>
