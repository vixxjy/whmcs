<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>{if $kbarticle.title}{$kbarticle.title} - {/if}{$pagetitle} - {$companyname}</title>
<meta name="keywords" content="" />
<meta name="description" content="Host Linea HTML5 Template">
<meta name="author" content="">

<!-- Mobile view -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Skin stylesheet -->
{include file="$template/includes/head.tpl"}
{$headoutput}
<body class="loading">
{$headeroutput}


<div class="preloader-wrap"></div>

<!-- Page template --> 

<!-- Preloader icon -->

<div class="wrapper-boxed">
  <div class="site-wrapper" style="position: relative;">
    <div class="topbar topbar-padding">
      <div class="container">
        <ul class="toplist text-blue-gray toppadding">
          <li>Customer Care</li>
          <li class="lineright ">(888) 123-4567</li>
          {if !$loggedin}
          <li class="lineright"><a href="clientarea.php">Login</a></li>
          <li class="lineright"><a href="register.php">Register</a></li>
          {else}
          <li class="lineright"><a href="logout.php">Logout</a></li>
          {/if}
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
          <li class="last"><a href="#"><i class="fa fa-linkedin"></i></a></li>
        </ul>
      </div>
    </div>
    <div class="clearfix"></div>
    
    <!--end topbar-->
    <div class="divider-line solid blue-gray"></div>
    <div class="col-md-12 nopadding">
      <div id="header">
	    <div class="container">
	      <div class="navbar brown-2 navbar-default yamm">
	        <div class="navbar-header">
	          <button type="button" data-toggle="collapse" data-target="#navbar-collapse-grid" class="navbar-toggle two three"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>

        {if $assetLogoPath}
	          <a href="index.html" class="navbar-brand"><img src="templates/{$template}/images/logo/logo.png" alt=""></a>
        {else}
             <a href="index.html" class="navbar-brand"><img src="templates/{$template}/images/logo/logo.png" alt="">{$companyname}</a>
        {/if}
            </div>

	        <div id="navbar-collapse-grid" class="navbar-collapse collapse pull-right">
	          <ul class="nav navbar-nav">
	              {include file="$template/includes/navbar.tpl" navbar=$primaryNavbar}
                            {if $loggedin}
                                {include file="$template/includes/navbar.tpl" navbar=$secondaryNavbar}
                            {/if}
	          </ul>
	        </div>
	      </div>
	    </div>
	  </div>
	  <!--end menu-->
    </div>
    <!--end menu-->
        {if !$inShoppingCart && ($primarySidebar->hasChildren() || $secondarySidebar->hasChildren())}
            {if $primarySidebar->hasChildren()}
                <div class="col-md-9 pull-md-right">
                    {include file="$template/includes/pageheader.tpl" title=$displayTitle desc=$tagline showbreadcrumb=true}
                </div>
            {/if}
            <div class="col-md-3 pull-md-left sidebar">
                {include file="$template/includes/sidebar.tpl" sidebar=$primarySidebar}
            </div>
        {/if}

         <!-- Container for main page display content -->
        <div class="{if !$inShoppingCart && ($primarySidebar->hasChildren() || $secondarySidebar->hasChildren())}col-md-9 pull-md-right{else}col-xs-12{/if} main-content">
            {if !$primarySidebar->hasChildren() && !$showingLoginPage && !$inShoppingCart && $templatefile != 'homepage'}
                {include file="$template/includes/pageheader.tpl" title=$displayTitle desc=$tagline showbreadcrumb=true}
            {/if}



