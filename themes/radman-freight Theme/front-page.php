<?php /* Template Name: Home */
/**
 * Front page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pandplus
 */

get_header();

if (have_posts())  the_post();
//hero section
get_template_part('template-parts/home-page/hero');
//services
get_template_part('template-parts/home-page/services');
//about-us
get_template_part('template-parts/home-page/aboutUs');
//cta
get_template_part('template-parts/home-page/cta');
//testimony
get_template_part('template-parts/home-page/testimony');
//contact
get_template_part('template-parts/home-page/contact');
//map
//get_template_part('template-parts/home-page/map');
//blog
get_template_part('template-parts/home-page/news');
//blog
get_template_part('template-parts/home-page/blog');


get_footer();