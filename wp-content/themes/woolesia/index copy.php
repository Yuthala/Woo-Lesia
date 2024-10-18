<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<h1><?php the_title(); ?></h1> <!--Вывести заголовок-->
	<?php the_content(); ?> <!--Вывести контент страницы-->
<?php endwhile; else: ?>
	<p>ЗАПИСЕЙ НЕТ</p>
<?php endif; ?>

<?php wp_footer(); ?>
</body>
</html>