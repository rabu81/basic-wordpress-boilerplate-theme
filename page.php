<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage themename
 */

get_header(); ?>

<h3>This is a page (page.php):</h3>

<?php while(have_posts()) : the_post(); ?>

	title: <?php the_title(); ?><br />
	ID: <?php the_ID(); ?><br />
	content: <?php the_content(); ?><br />

<?php endwhile; ?>

<?php get_footer(); ?>
