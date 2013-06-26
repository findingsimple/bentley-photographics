<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>

<div id="sidebar">

<div id="nav">
<h2>View my Work</h2>
<ul>
<li><a href="/gallery/australian/">Australian Landscapes</a></li>
<li><a href="/gallery/american/">American Landscapes</a></li>
<li><a href="/gallery/european/">European Landscapes</a></li>
<li><a href="/gallery/china/">China Photography</a></li>
</ul>
</div>

<h2>Contact Ron</h2>
<p>I can be contacted using the following details or by using my <a href="/contact/" title="Contact Ron">contact form</a>.</p>
<ul>
<li><strong>p.</strong> 0413 520 007</li>
<li><strong>e.</strong>  <span class="spamspan"><span class="u">ron</span>[at]<span class="d">bentleyphotographics [dot] com</span></span></li>
</ul>
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
	
	<div id="latest-entries">
			<h2>Latest News, Events  &amp; Exhibitions</h2>
        <ul>
        	<?php $recent = new WP_Query("showposts=2"); while($recent->have_posts()) : $recent->the_post();?>

            <li class="latest-entries">
			
						<span class="the_date">
<span class="date_m"><?php the_time('F'); ?></span>
<span class="date_d"><?php the_time('jS'); ?></span>
</span>
			
			
			
			<a href="<?php the_permalink(); ?>"><span class="bold"> <?php the_title(); ?> </span> </a><br /><?php the_excerpt(); ?></li>
        
			<?php endwhile; ?>
			
        </ul>
		
		</div>
		
		<br class="clear" />
	
<!-- Page Content END --></div>

</div>  <!-- end main -->


<?php get_footer(); ?>

