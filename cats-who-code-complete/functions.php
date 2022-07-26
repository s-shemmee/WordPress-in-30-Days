<?php 




/* register the sidebar */ 

register_sidebar(array(
	'name' => _( 'Sidebar Cat Blog'), 
	'id' => 'cat-sidebar-1', 
	'description'   => 'Widgets Here Will Be On The Right of the Site',
	'before_widget' => '<div class="widget">',
	'after_widget'  => '</div><!-- .widget --> ',
	'before_title'  => '<h3>',
	'after_title'   => '</h3>' 
)); 



/* register the nav menu */ 

register_nav_menu('main', 'Main navigation menu');









?>