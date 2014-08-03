<?php $this->need('header.php'); ?>
<div class="col-8" id="main">
	<div class="res-cons">
		<article class="post">
			<header>
				<h1 class="post-title"><?php $this->title() ?></h1>
			</header>
			<ul class="post-meta">
				<li class="icon-user" itemprop="author" itemscope itemtype="http://schema.org/Person">&nbsp;<a itemprop="name" href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author('screenName'); ?></a></li>
            	<li class="icon-calendar">&nbsp;<time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date("M jS, Y"); ?></time></li>
            	<li class="icon-category">&nbsp;<?php $this->category(','); ?></li>
            </ul>
			<div class="post-content">
				<?php $this->content(); ?>
				<br/>
				<b>转载请注明出处：<a href="<?php $this->permalink(); ?>"><?php $this->permalink(); ?></a></b>
			</div>
			
		</article>
		<?php $this->need('comments.php'); ?>
	</div>
</div>
<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
