<header class="header">
    <div class="container-lg">

        <!-- content -->
         <div class="header__content shadow bg-white-500 radius-lg d-flex jc-between ai-center">

             <!-- brand -->
              <div class="header__content__brand py-2">
                  <a href="<?= (is_home() ? '#home' : get_home_url()); ?>" title="<?= SITE["name"]; ?>">
                      <img src="<?= image('logo-topo.svg', 'svg'); ?>" alt="Logo Pepetos">
                  </a>
              </div>
             <!-- end of brand -->

             <!-- navbar -->
              <div class="header__content__navbar">
                  <nav class="header__content__navbar__menu">
	                  <?php wp_nav_menu(array('theme_location' => 'header-home', 'container_class' => '')); ?>
                  </nav>
              </div>
             <!-- end of navbar -->

             <!-- cta -->
              <div class="header__content__cta bg-dark-blue-500 clr-white-500 p-4">
                  <p>teste</p>
              </div>
             <!-- end of cta -->
         </div>
        <!-- end of content -->

    </div>
</header>