<?php get_header(); ?>

<?php get_sidebar(); ?>

<div id="main">
        
<!-- Page Content BEGIN --><div id="page_content">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="post" id="post-<?php the_ID(); ?>">
			<h1 class="single_title"><?php the_title(); ?></h1>
			<div class="entry">
				<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>

				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
				<div class="post-info">
				<span class="post-calendar">Posted on <?php the_time('l, F jS, Y') ?></span>
				<?php the_tags( '<span class="tags">', ', ', '</span>'); ?>
				</div>
				
			</div>
		</div>
		
		<?php edit_post_link('Edit this entry.','',''); ?>

	<?php comments_template(); ?>

	<?php endwhile; else: ?>

		<p>Sorry, no posts matched your criteria.</p>

<?php endif; ?>

<!-- Page Content END --></div>

</div>  <!-- end main -->
	
<?php get_footer(); ?>
