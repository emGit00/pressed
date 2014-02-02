<!DOCTYPE html>
<html>
<head>
	<title><?php bloginfo( 'name' ); ?></title>
	<script src="http://use.edgefonts.net/josefin-slab.js"></script>
	<script src="http://use.edgefonts.net/merriweather.js"></script>
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ) ?>"/>
</head>
	<body>
		<header>
			<h1><?php bloginfo( 'title' ); ?></h1>
			<nav>
				<ul>
					<li>Home</li>
					<li>WordPress</li>
				</ul>
			</nav>
		</header>
		<section>
			<img src="<?php bloginfo( 'template_url' ) ?>/images/hero.jpg" />
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <section>
                    <!--<p>Pressed and Squeezed is a full-service WordPress shop. We create custom themes and CMSes for our clients.</p>
                    <p>We also make pancakes on the side.</p> -->
                    <article>
                        <h2><a href="<?php the_permalink(); ?>" title"<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                        <?php the_content(); ?>
                    </article>
                </section>
            <?php endwhile; else :?>
                   <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>

		</section>
		<footer>
			<h1>Contact Us</h1>
			<p>Pressed and Squeezed</p>
			<p>2525 Orange Way, Orchard, CA 91104</p>
			<p>Phone: (800) 424-3232</p>
		</footer>
	</body>
</html>