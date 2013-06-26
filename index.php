<?php get_header(); ?>

<?php get_sidebar(); ?>

<div id="main">
        
<!-- Page Content BEGIN --><div id="page_content">
	
	<h1>News, Events &amp; Exhibitions</h1>
	
	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>
		
		<div class="post" id="post-<?php the_ID(); ?>">

				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				
				<div class="entry">
					<?php the_content('Read the rest of this entry &raquo;'); ?>
				</div>

				<p class="postmetadata"><?php comments_popup_link('Comments (0)', 'Comments (1)', 'Comments (%)'); ?> | Posted by <?php the_author() ?> | <?php the_time('F jS, Y') ?> <?php edit_post_link('Edit', ' | ', ''); ?> </p>
			</div>

		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>

	<?php else : ?>

		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>
		<?php include (TEMPLATEPATH . "/searchform.php"); ?>

	<?php endif; ?>

<!-- Page Content END --></div>

</div>  <!-- end main -->

<?php get_footer(); ?>
