<?php $this->need('header.php'); ?>
<div class="col-8" id="main">
	<div class="res-cons">
		<article class="post">
			<header>
				<h1 class="post-title"><?php $this->title() ?></h1>
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
