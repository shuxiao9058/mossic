		</div>
    </div>
</div>
<footer id="footer">
	<div class="container">
		&copy; <?php echo date('Y'); ?> <a rel="nofollow" href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>. 
		<a rel="nofollow" target="_blank" href="<?php $this->options->siteUrl(); _e('sitemap.xml'); ?>">谷歌地图</a>.
		<a><?php echo '加载耗时：',timer_stop(), 's';?></a>
		
		<span style="display:none">
		<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1000251904'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s96.cnzz.com/z_stat.php%3Fid%3D1000251904' type='text/javascript'%3E%3C/script%3E"));</script> 
		</span>
		</div>
</footer>
<?php $this->footer(); ?>
</body>
</html>