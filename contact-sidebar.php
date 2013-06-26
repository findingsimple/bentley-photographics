<?php
/*
Template Name: Contact Form
*/
?>

<?php get_header(); ?>

<div id="sidebar" class="contact-form-side">
<?php echo do_shortcode('[gravityform id="1" name="Contact Ron" title="false" description="false"]'); ?>
</div>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div id="main">
        
<!-- Page Content BEGIN --><div id="page_content">

		<h1 class="page_title"><?php the_title(); ?></h1>

		<div class="post" id="post-<?php the_ID(); ?>">
			<div class="entry">
				<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>

				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

			</div>
		</div>
		<?php endwhile; endif; ?>
		
	<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
	
<!-- Page Content END --></div>

</div>  <!-- end main -->


<?php get_footer(); ?>

