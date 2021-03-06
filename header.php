<!DOCTYPE HTML>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<a rel="nofollow" target="_blank" href="https://github.com/shuxiao9058">
    <img style="position: absolute; top: 0; right: 0; border: 0;" 
        src= "<?php $this->options->themeUrl('img/forkme_right_gray_6d6d6d.png'); ?>" alt="Fork me on GitHub" 
        data-canonical-src="<?php $this->options->themeUrl('img/forkme_right_gray_6d6d6d.png'); ?>" >
</a>

<head>

<script type="text/javascript" charset="UTF-8"
	src="http://lurongkai.github.io/anti-baidu/js/anti-baidu-latest.js"></script>

<?php
/*
	MathJax allows you to include mathematics in your web pages, either using LaTeX,
	MathML, or AsciiMath notation, and the mathematics will be processed using javascript 
	to produce HTML, SVG or MathML equations for viewing in any modern browser.
	
	ref: http://doswa.com/2011/07/20/mathjax-in-markdown.html
*/
?>

<script type="text/javascript"
	src="//cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS_HTML-full&locale=zh-hans">
</script>

<script type="text/x-mathjax-config">
    MathJax.Hub.Config({
		showProcessingMessages: false,
		displayAlign: "center",
		style: {color:"#444", "font-style":"italic"},
		config: ["MMLorHTML.js"],
		jax: ["input/TeX","input/MathML","input/AsciiMath","output/HTML-CSS","output/NativeMML"],
		extensions: ["tex2jax.js","mml2jax.js","asciimath2jax.js","MathMenu.js","MathZoom.js"],
	
		tex2jax: {
			skipTags: ['script', 'noscript', 'style', 'textarea', 'pre'],  // removed 'code' entry
			inlineMath: [
				['$', '$'],
				['\\(', '\\)']
			],
			displayMath: [
				['$$', '$$'],
				["\\[", "\\]"]
			],
			menuSettings: {
				context: 'Browser'
			},
			processEscapes: true,
			balanceBraces: true
		},
		TeX: {
			TagSide: "right", 
			extensions: ["AMSmath.js","AMSsymbols.js","noErrors.js","noUndefined.js"],
			equationNumbers: {
				autoNumber: ["AMS"],
				useLabelIds: false
			},            // false for TeX on all one line
			Macros: {
				hfill: "{}",
				RR: '{\\bf R}',
				bold: ['{\\bf #1}',1]
			}
		},
		"HTML-CSS": {
			linebreaks: {
				automatic: true
			},
			availableFonts: ["TeX"],
			scale: 110
		},
		SVG: {
			linebreaks: {
				automatic: true
			}
		}
		});
	
	MathJax.Hub.Queue(function() {
		// Fix <code> tags after MathJax finishes running. This is a
		// hack to overcome a shortcoming of Markdown. Discussion at
		// https://github.com/mojombo/jekyll/issues/199
		var all = MathJax.Hub.getAllJax(), i;
		for(i = 0; i < all.length; i += 1) {
			all[i].SourceElement().parentNode.className += ' has-jax';
		}
	});

    MathJax.Hub.Configured();
</script>

<meta charset="<?php $this->options->charset(); ?>" />
<meta name="viewport" content="width=device-width,user-scalable=no">
<title>
	  <?php if($this->is('index')): ?>
	      <?php $this->options->title(); ?> - <?php $this->options->description(); ?>
	  <?php else:?>
    <?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?>
     <?php endif; ?>
     </title>
     
    <!--[if lt IE 9]>
    <script src="<?php $this->options->themeUrl('js/html5shiv.js'); ?>"></script>
    <![endif]-->
    
    <!-- 使用url函数转换相关路径 -->
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/normalize.min.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>">
    
    <?php $this->header("generator=&template=&"); ?>
    
</head>
<body>
	<header id="header" class="clearfix">
		<div class="container">
			<div class="col-group">
				<div class="site-name ">
                <?php if ($this->is('index')): ?>
                    <h1>
						<a id="logo" href="<?php $this->options->siteUrl(); ?>">
                            <?php $this->options->title() ?>
                        </a>
					</h1>
                <?php else:?>
                    <a id="logo"
						href="<?php $this->options->siteUrl(); ?>">
                        <?php $this->options->title() ?>                        
                    </a>
                <?php endif; ?>
                <p class="description"><?php $this->options->description() ?></p>
				</div>
				<div>
					<nav id="nav-menu" class="clearfix">
						<a
							class="<?php if($this->is('index')): ?>current<?php endif; ?> <?php if($this->is('post')): ?>current<?php endif; ?>"
							href="<?php $this->options->siteUrl(); ?>"><?php _e('博客'); ?></a>
					<?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
					<?php while($pages->next()): ?>
					<a <?php if($this->is('page', $pages->slug)): ?> class="current"
							<?php endif; ?> href="<?php $pages->permalink(); ?>"
							title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a>
					<?php endwhile; ?>
				</nav>
				</div>
			</div>
		</div>
	</header>
	<div id="body">
		<div class="container">
			<div class="col-group">