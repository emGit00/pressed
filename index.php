<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>
    <script src="http://use.edgefonts.net/josefin-slab.js"></script>
    <script src="http://use.edgefonts.net/merriweather.js"></script>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>"/>
</head>

<body>

<?php get_header(); ?>
  <div class ="clearfix">
        <section class="main">
			<img src="<?php bloginfo( 'template_url' ) ?>/images/hero.jpg" />
            <!--<p>Pressed and Squeezed is a full-service WordPress shop. We create custom themes and CMSes for our clients.</p>
                <p>We also make pancakes on the side.</p> -->
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <article>
                    <h2><a href="<?php the_permalink(); ?>" title"<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                    <?php the_content(); ?>
                </article>
            <?php endwhile; else :?>
           <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
           <?php endif; ?>
        </section>
        <aside>
             <?php get_sidebar('asidebar'); ?>
       </aside><!-- end aside widget -->
   </div>

 <?php get_footer(); ?>
 </body>
 </html>