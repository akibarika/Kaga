<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php if ( is_tag() ) { echo wp_title('Tag:');if($paged > 1) printf(' - 第%s页',$paged);echo ' | '; bloginfo( 'name' );} elseif ( is_archive() ) {echo wp_title('');  if($paged > 1) printf(' - 第%s页',$paged);    echo ' | ';    bloginfo( 'name' );} elseif ( is_search() ) {echo '&quot;'.wp_specialchars($s).'&quot;的搜索结果 | '; bloginfo( 'name' );} elseif ( is_home() ) {bloginfo( 'name' );$paged = get_query_var('paged'); if($paged > 1) printf(' - 第%s页',$paged);}  elseif ( is_404() ) {echo '页面不存在！ | '; bloginfo( 'name' );}elseif ( is_singular('portfolio')) {echo wp_title('');}else {echo wp_title( ' | ', false, right )  ; bloginfo( 'name' );} ?></title>
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <!--[if lt IE 9]>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Rika Akiba">
    <!-- style file -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style.css">
    <link href="<?php bloginfo('template_url'); ?>/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/normalize.css">
    <link rel="stylesheet/less" type="text/css" href="<?php bloginfo('template_directory'); ?>/styles.less" />
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,700,600,500,800,900,300,200,100' rel='stylesheet' type='text/css'>
    <!-- my less files-->
    <script src="<?php bloginfo('template_directory'); ?>/js/less-1.7.3.min.js" type="text/javascript"></script>
    <!-- js files-->
    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/insite.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/modernizer.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/imagesloaded.pkgd.min.js"></script>
    <link rel="Shortcut Icon" href="<?php bloginfo('template_url'); ?>/favicon.ico">
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="alternate" type="application/rss+xml" title="RSS 1.0" href="<?php bloginfo('rss_url'); ?>" />
    <link rel="alternate" type="application/atom+xml" title="ATOM 1.0" href="<?php bloginfo('atom_url'); ?>" />
    <?php wp_head(); ?>
</head>

<body>
<?php if (is_single()) { ?>
    <div class="nav-menu-wrapper nav-menu-cover">
        <nav class="nav-menu">
            <a class="selector">
                <div class="bar-icon-wrapper">
                    <span class="bar-icon"></span>
                    <span class="bar-icon"></span>
                    <span class="bar-icon"></span>
                </div>
            </a>
            <div class="pop-menu">
                <ul>
                    <li class="search">
                        <?php get_search_form(); ?>
                    </li>
                    <li>
                        <a href="/">
                            Home
                            <i class="fa fa-angle-right fa-lg icon-right"></i>
                        </a>
                    </li>
                    <li>
                        <a href="/">
                            Link
                            <i class="fa fa-angle-right fa-lg icon-right"></i>
                        </a>
                    </li>
                    <li>
                        <a href="/">
                            Work
                            <i class="fa fa-angle-right fa-lg icon-right"></i>
                        </a>
                    </li>
                    <li>
                        <a href="/">
                            Blog
                            <i class="fa fa-angle-right fa-lg icon-right"></i>
                        </a>
                    </li>
                    <li>
                        <span>Theme <div class="kaga">Kaga</div> By Rika</span>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

<?php } else {?>
    <div class="nav-menu-wrapper nav-menu-cover">
        <nav class="nav-menu">
            <a class="selector">
                <div class="bar-icon-wrapper">
                    <span class="bar-icon"></span>
                    <span class="bar-icon"></span>
                    <span class="bar-icon"></span>
                </div>
            </a>
            <div class="pop-menu">
                <ul>
                    <li class="search">
                        <?php get_search_form(); ?>
                    </li>
                    <li>
                        <a href="/">
                            Home
                            <i class="fa fa-angle-right fa-lg icon-right"></i>
                        </a>
                    </li>
                    <li>
                        <a href="/">
                            Link
                            <i class="fa fa-angle-right fa-lg icon-right"></i>
                        </a>
                    </li>
                    <li>
                        <a href="/">
                            Work
                            <i class="fa fa-angle-right fa-lg icon-right"></i>
                        </a>
                    </li>
                    <li>
                        <a href="/">
                            Blog
                            <i class="fa fa-angle-right fa-lg icon-right"></i>
                        </a>
                    </li>
                    <li>
                        <span>Theme <div class="kaga">Kaga</div> By Rika</span>
                    </li>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <header>
        <div class="head-image-wrapper">
            <div class="head-image"></div>
        </div>
    </header>
    <div class="component">
        <button class="cn-button" id="cn-button">+</button>
        <div class="cn-wrapper" id="cn-wrapper">
            <ul>
                <li><a href="#"><span class="fa fa-home"></span></a></li>
                <li><a href="#"><span class="fa fa-headphones"></span></a></li>
                <li><a href="#"><span class="fa fa-desktop"></span></a></li>
                <li><a href="#"><span class="fa fa-file"></span></a></li>
                <li><a href="#"><span class="fa fa-cog"></span></a></li>
            </ul>
        </div>
        <div id="cn-overlay" class="cn-overlay"></div>
    </div>
    <div class="blog-title main-content">
        <figure class="avatar-wrapper animate">
            <a class="user-avatar" style="background-image: url(<?php bloginfo('template_url'); ?>/images/avatar.png)" href="/">
            </a>
        </figure>
        <div class="title-group animate">
            <h1>
                <a href=" <?php echo home_url(); ?> "><?php bloginfo('name'); ?></a>
            </h1>
            <span class="description" style="color: rgba(68, 68, 68, 0.7);"> Akiba Rika's site </span>
        </div>
    </div>
<?php }?>