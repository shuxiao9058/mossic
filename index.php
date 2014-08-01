<?php
/**
 * 简单的响应式模板
 * 
 * @package Maupassant
 * @author cho
 * @version 1.3
 * @link https://github.com/pickcho/maupassant
 */
 $this->need('header.php');
 ?>
<div class="col-8" id="main">
	<div class="res-cons">
		<?php while($this->next()): ?>
			<article class="post">
				<header>
					<h2 class="post-title">
						<a href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
					</h2>
				</header>
				<p class="post-meta">
					<i class="icon-user"></i>
					<span itemprop="author" itemscope itemtype="http://schema.org/Person"><a itemprop="name" href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author('screenName'); ?></a></span>
				    <i class="icon-calendar"></i>
	            	<span><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date("M jS, Y"); ?></time></span>
					<i class="icon-category"></i>
	            	<a><?php $this->category(','); ?></a>
	            </p>
				<div class="post-content">
					<?php $this->content('- 阅读剩余部分 -'); ?>
				</div>
			</article>
		<?php endwhile; ?>
		<?php $this->pageNav('&laquo; Previous','Next &raquo;',10,'...');?>
	</div>
</div>
<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
