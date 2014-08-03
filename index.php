<?php
/**
 * 简单的响应式模板
 * 
 * @package Mossic
 * @author cho & shuxiao9058
 * @version 0.01
 * @date 2014/08/03
 * @link https://github.com/shuxiao9058/Mossic
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
			<ul class="post-meta">
				<li class="icon-user" itemprop="author" itemscope itemtype="http://schema.org/Person">&nbsp;<a itemprop="name" href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author('screenName'); ?></a></li>
            	<li class="icon-calendar">&nbsp;<time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date("M jS, Y"); ?></time></li>
            	<li class="icon-category">&nbsp;<?php $this->category(','); ?></li>
            </ul>
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
