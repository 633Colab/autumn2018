  <nav class="navbar navbar-expand-md navbar-light bg-faded">
   <a class="navbar-brand" href="#">Navbar</a>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
   </button>
         <?php
   wp_nav_menu([
     'menu'            => 'top',
     'theme_location'  => 'top',
     'container'       => 'div',
     'container_id'    => 'main-nav',
     'container_class' => 'collapse navbar-collapse',
     'menu_id'         => false,
     'menu_class'      => 'navbar-nav mr-auto justify-content-end',
     'depth'           => 2,
     'fallback_cb'     => 'bs4navwalker::fallback',
     'walker'          => new bs4navwalker()
   ]);
   ?>
    </nav>