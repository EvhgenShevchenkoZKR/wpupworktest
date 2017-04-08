<?php
/**
 * Search content.
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('po-article  po-blog'); ?>>
	
    <div class="po-search-middle">
   
	<header class="entry-header blog-header">
		<h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
	</header><!-- .entry-header -->
	
    </div>
</article><!-- #post-## -->