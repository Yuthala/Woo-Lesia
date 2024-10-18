<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<h1><?php the_title(); ?></h1> <!--Вывести заголовок-->
	<?php the_content(); ?> <!--Вывести контент страницы-->
<?php endwhile; else: ?>
	<p>ЗАПИСЕЙ НЕТ</p>
<?php endif; ?>

<?php get_footer(); ?>