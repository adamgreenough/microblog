<?php get_header(); ?>

<div class="hero">
	<div class="container-narrow">
		<h1>Adam's Microblog</h1>
		<p>Hey, I'm <a href="https://adamgreenough.me/" target="_blank">Adam</a>! Web <a href="https://adamgreenough.me/" target="_blank">designer & developer</a> from the sunny south coast of the United Kingdom. You've found my microblog. Posts here automatically syndicate to <a href="https://twitter.com/adam_greenough" target="_blank">my Twitter</a>.</p>
		<p class="small">This microblog is powered by my own open-source creation, <a href="https://nicholas.adgr.dev/" target="_blank">Nicholas</a>, and syndicates to Twitter using IFTTT. You can view the source code <a href="https://github.com/adamgreenough/microblog" target="_blank">here</a>.
	</div>
</div>

<div class="container-narrow">		
	<?php foreach ($posts as $post) { ?>		
	
	<article class="blog-preview">
		<a href="<?= get_post_link($post); ?>">
				<p class="small"><?= date($config['date_format'], $post->date); ?> <?= ($post->tags[0] != '' ? '• Filed under ' . display_tag_list($post->tags) : ''); ?></p>
			<h2><?= $post->title; ?></h2>
		</a>
		<p><?= $post->body; ?></p>

	</article>
	
	<?php } ?>
	
	<div class="pagination">
		<div class="prev">
			<?php 
				$prevLink = get_pagination_link($page, $posts)['prev'];
				if($prevLink) { echo '<a href="' . $prevLink . '" title="Previous Page">&laquo; Newer Posts </a>'; }
			?>	
		</div>
		<div class="next">
			<?php 
				$nextLink = get_pagination_link($page, $posts)['next'];
				if($nextLink) { echo '<a href="' . $nextLink . '" title="Next Page">Older Posts &raquo;</a>'; }
			?>	
		</div>
	</div>
</div>



<?php get_footer(); ?>