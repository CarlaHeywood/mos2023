<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>


<!-- Footer Start -->
<div class="footer-wrap">
	<div class="container">
	<a href="index.html">
		<div class="footer_logo"><img height="30px" class="footer_logo" src="<?php echo get_template_directory_uri(); ?>/img/footer_logo.png" alt=""></div>
		<ul class="footer-links">
			<li><a href="index.html">Home</a></li>
			<li><a href="about.html">About</a></li>
			<li><a href="gallery.html">Gallery</a></li>
			<li><a href="courses.html">Courses</a></li>
			<li><a href="testimonials.html">Testimonials</a></li>
			<li><a href="blog.html">Blog</a></li>
			<li><a href="contact.html">Contact</a></li>
		</ul>
		<div class="copyright">CPS-LR-1000450079</div>
		<div class="copyright">Ⓒ 2023 Momager On-Set, LLC. All Rights Reserved.</div>
		<div class="credits">Website by <a href="https://www.creativeblue.media/" target="_blank" rel="nofollow"><b>Creative Blue Media</b></a></div>
	</div>
</div>
<!-- Footer End -->

<?php wp_footer(); ?>

</body>

</html>

