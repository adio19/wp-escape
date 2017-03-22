<!--Header-->

  <header>
    <div id="Home" class="first-element-body">
        <div class="logo col-md-4 col-md-offset-2">
          <a href="#"><img src="wp-content/themes/vcs-starter/assets/font images/main logo.png" alt="main logo image was here"/></a>
        </div>
        <?php wp_nav_menu(array(
          'container' => '<ul></ul>',
          'menu_class' =>'nav-list'
        )); ?>
        <div class="main-header col-md-12">
          <h1 class="header-one">Can you build the website of my dreams?</h1>
          <h3 class="header-two">Yup, we can do that.</h3>
        </div>
        <div class="col-md-12 lol">
        <?php
        // The number of all posts for a given query
        $posts_found = $GLOBALS['wp_query']->found_posts;
        // The number of posts for just the page
        $posts_count = $GLOBALS['wp_query']->post_count;

        if(have_posts()): ?>
        	<?php while (have_posts()) : the_post(); ?>
            <?php
            echo the_content();
            $text = get_field('t_fl_link_text');
            $link = get_field('t_fl_link_url');
            ?>
            <a href="<?php echo $link; ?>" class="main-button"><?php echo $text; ?></a>
        	<?php endwhile; ?>
        <?php endif; ?>
        </div>
      </div>
    </div>
  </header>
