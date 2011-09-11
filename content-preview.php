<?php
	$external_link = get_post_meta($post->ID,"external_link",true);
?>

<div id="post-<?php the_ID(); ?>" <?php post_class('preview'); ?>>
	<div class="entry-header">
		<h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'toolbox' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
	</div><!-- .entry-header -->
	<?	if ( has_post_thumbnail() ):	?>
	<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'toolbox' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark">
	<?  the_post_thumbnail('featured-thumb',array("class"=>"thumbnail"));	?>
	</a>
	<?	endif;	?>
	<div class="entry-summary">
		<?php the_excerpt( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'toolbox' ) ); ?>
	</div><!-- .entry-summary -->

	<div class="entry-nav">
		<?	
		$external_link = get_post_meta($post->ID,"external_link",true);	
		if($external_link!=""):	?>	
		<a href="<?=$external_link;?>" title="Link to webiste">Website</a>
		<?	endif;	?>
		<?php edit_post_link( __( 'Edit', 'toolbox' ), '<span class="edit-link">', '</span>' ); ?>
		<a class="link" href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'toolbox' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark">Read More</a>
		<br class="cb" />
	</div><!-- #entry-meta -->
</div><!-- #post-<?php the_ID(); ?> -->
