<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage themename
 */

get_header(); ?>

<h3>This is a single post page (single.php):</h3>

<?php while(have_posts()) : the_post(); ?>

	title: <?php the_title(); ?><br />
	ID: <?php the_ID(); ?><br />
	time: <?php the_time(get_option('date_format')); ?><br />
	content: <?php the_content(); ?><br />

<?php endwhile; ?>

<?php get_footer(); ?>
