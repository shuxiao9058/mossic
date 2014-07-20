<!DOCTYPE HTML>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="<?php $this->options->charset(); ?>" />
	<meta name="viewport" content="width=device-width,user-scalable=no">
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>
	<!--[if lt IE 9]>
    <script type="text/javascript" src="<?php $this->options->themeUrl('javascript/html5shiv.js'); ?>"></script>
    <![endif]-->
	<script type="text/javascript" src="<?php $this->options->themeUrl('javascript/archieve.js'); ?>"></script>
    <link rel="stylesheet" href="<?php $this->options->adminUrl('css/normalize.css'); ?>">
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
                    <a id="logo" href="<?php $this->options->siteUrl(); ?>">
                        <?php $this->options->title() ?>
                    </a>
                <?php endif; ?>
        	    <p class="description"><?php $this->options->description() ?></p>
            </div>
            <div>
                <nav id="nav-menu" class="clearfix">
                    <a class="<?php if($this->is('index')): ?>current<?php endif; ?> <?php if($this->is('post')): ?>current<?php endif; ?>" href="<?php $this->options->siteUrl(); ?>"><?php _e('博客'); ?></a>
					<?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
					<?php while($pages->next()): ?>
					<a<?php if($this->is('page', $pages->slug)): ?> class="current"<?php endif; ?> href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a>
					<?php endwhile; ?>
				</nav>
            </div>
        </div>
    </div>

<?php
/*
	MathJax allows you to include mathematics in your web pages, either using LaTeX,
	MathML, or AsciiMath notation, and the mathematics will be processed using javascript 
	to produce HTML, SVG or MathML equations for viewing in any modern browser.
	
	ref: http://doswa.com/2011/07/20/mathjax-in-markdown.html
*/
?>

<script type="text/javascript" 
	src="http://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS_HTML-full&locale=zh-hans">
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
</script>

</header>
<div id="body">
    <div class="container">
        <div class="col-group">
