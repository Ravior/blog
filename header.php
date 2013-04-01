<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8"0>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php echo get_bloginfo("template_url")?>/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo get_bloginfo("template_url")?>/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo get_bloginfo("template_url")?>/css/flexslider.css">
	<link rel="stylesheet" href="<?php echo get_bloginfo("template_url")?>/style.css">
	<link href="<?php echo get_bloginfo("template_url")?>/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
	<title></title>
</head>
<body>
<header>
  <div class="container">
    <div class="row">
      <div class="span6">
        <div class="logo">
          <h1><a href="<?php echo home_url();?>">Nguyen Sy <span class="color">Thanh Son</span></a></h1>
          <div class="hmeta">Silence is golden!</div>
        </div>
      </div>
      <div class="span6">
        <div class="form">
          <form method="get" id="searchform" action="#" class="form-search">
            <input type="text" value="" name="s" id="s" class="input-medium">
            <button type="submit" class="btn">Search</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</header>
<div class="navbar">
   <div class="navbar-inner">
	 <div class="container">
	   <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
		 <span>Menu</span>
	   </a>
	   <div class="nav-collapse collapse">
		<?php
		$defaults = array(
			'theme_location'  => '',
			'menu'            => '',
			'container'       => 'div',
			'container_class' => '',
			'container_id'    => '',
			'menu_class'      => 'nav',
			'menu_id'         => '',
			'echo'            => true,
			'fallback_cb'     => 'wp_page_menu',
			'before'          => '',
			'after'           => '',
			'link_before'     => '',
			'link_after'      => '',
			'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
			'depth'           => 0,
			'walker'          => ''
		);

		wp_nav_menu( $defaults );

		?>

	   </div>
	  </div>
   </div>
</div>
