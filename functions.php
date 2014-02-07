<?php
register_nav_menus();
register_sidebar(array(
'name' => 'Pressed Aside',
'id' => 'aside',
'description' => 'aside widget column',
'before_widget' => '<div class="widget">',
'after_widget' => '</div>',
'before_title' => '<h3 class="aside_title">',
'after_title' => '</h3>',
));