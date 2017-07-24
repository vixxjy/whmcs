<?php
/* Smarty version 3.1.29, created on 2017-06-14 13:19:55
  from "/var/www/html/whmcs/templates/smart/header.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_594129ebe43982_84720728',
  'file_dependency' => 
  array (
    'e281e9cd17888bb1fb2e0864cf43f9a32814ba05' => 
    array (
      0 => '/var/www/html/whmcs/templates/smart/header.tpl',
      1 => 1497442696,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_594129ebe43982_84720728 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php if ($_smarty_tpl->tpl_vars['kbarticle']->value['title']) {
echo $_smarty_tpl->tpl_vars['kbarticle']->value['title'];?>
 - <?php }
echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['companyname']->value;?>
</title>
<meta name="keywords" content="" />
<meta name="description" content="Host Linea HTML5 Template">
<meta name="author" content="">

<!-- Mobile view -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Favicon -->
<link rel="shortcut icon" href="smart/images/favicon.ico">
<link rel="stylesheet" type="text/css" href="smart/js/bootstrap/css/bootstrap.min.css">

<!-- Google fonts - witch you want to use - (rest you can just remove) -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>

<!-- Template's stylesheets -->
<link rel="stylesheet" href="smart/js/template-custom/css/template-custom.css">
<link rel="stylesheet" href="smart/css/theme-default.css" type="text/css">
<link rel="stylesheet" href="smart/css/theme.css" type="text/css">
<link rel="stylesheet" href="smart/js/mainmenu/menu.css" type="text/css" />
<link rel="stylesheet" href="smart/fonts/font-awesome/css/font-awesome.min.css" type="text/css">
<link rel="stylesheet" type="text/css" href="smart/fonts/Simple-Line-Icons-Webfont/simple-line-icons.css" media="screen" />
<link rel="stylesheet" href="smart/fonts/et-line-font/et-line-font.css">
<link rel="stylesheet" href="smart/js/masterslider/style/masterslider.css"/>
<link href="smart/js/masterslider/skins/default/style.css" rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="smart/js/masterslider/style/style.css">
<link href="smart/js/masterslider/staffcarousel/ms-staff-style.css" rel='stylesheet' type='text/css'>
<link href="smart/js/owl-carousel/owl.carousel.css" rel="stylesheet">
<link href="smart/js/owl-carousel/owl.theme.css" rel="stylesheet">
<link href="smart/js/tabs/css/responsive-tabs.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="smart/css/theme-responsive.css">

<!-- Template's stylesheets END -->

<!--[if lt IE 9]>
<?php echo '<script'; ?>
 src="http://html5shim.googlecode.com/svn/trunk/html5.js"><?php echo '</script'; ?>
>
<![endif]-->

<!-- Style Customizer's stylesheets -->
<link rel="stylesheet/less" type="text/css" href="smart/less/skin.less">

<!-- Style Customizer's stylesheets END -->

<!-- Skin stylesheet -->
   <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>


    <?php echo $_smarty_tpl->tpl_vars['headoutput']->value;?>


<body class="loading">
<?php echo $_smarty_tpl->tpl_vars['headeroutput']->value;?>



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
          <li class="lineright"><a href="#">Login</a></li>
          <li class="lineright"><a href="#">Register</a></li>
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
              <a href="index.html" class="navbar-brand"><img src="images/logo/logo.png" alt=""></a> </div>
            <div id="navbar-collapse-grid" class="navbar-collapse collapse pull-right">
              <ul class="nav navbar-nav">
                <li> <a href="index.html" class="dropdown-toggle active">Home</a></li>
                
                <li class="dropdown"> <a href="index.html" class="dropdown-toggle">Layouts</a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="http://codelayers.net/templates/hostlinea/creative/index.html">Creative</a> </li>
                <li><a href="http://codelayers.net/templates/hostlinea/creative-2/index.html">Creative 2</a> </li>
                <li><a href="http://codelayers.net/templates/hostlinea/classic/index.html">Classic</a> </li>
              </ul>
            </li>
                <li> <a href="domain-search.html" class="dropdown-toggle">Domains</a></li>
                
                <li> <a href="web-hosting.html" class="dropdown-toggle">Hosting</a></li>
                
                <li class="dropdown yamm-fw"> <a href="about2.html" class="dropdown-toggle">Pages</a>
              <ul class="dropdown-menu">
                <li> 
                  <!-- Content container to add padding -->
                  <div class="yamm-content">
                    <div class="row">
                      <ul class="col-sm-6 col-md-3 list-unstyled ">
                        <li>
                          <p> Pages 1 </p>
                        </li>
                        <li><a href="about.html"><i class="fa fa-angle-right"></i> &nbsp; About Style 1</a></li>
                        <li><a href="about-2.html"><i class="fa fa-angle-right"></i> &nbsp; About Style 2</a></li>
                        <li><a href="about-3.html"><i class="fa fa-angle-right"></i> &nbsp; About Style 3</a></li>
                        <li><a href="website-builder.html"><i class="fa fa-angle-right"></i> &nbsp; Website Builder</a></li>
                        <li><a href="affiliates.html"><i class="fa fa-angle-right"></i> &nbsp; Affiliates</a></li>
                        <li><a href="left-nav.html"><i class="fa fa-angle-right"></i> &nbsp; Left Navigation</a></li>
                      </ul>
                      <ul class="col-sm-6 col-md-3 list-unstyled ">
                        <li>
                          <p> Pages 2 </p>
                        </li>
                        <li><a href="services.html"><i class="fa fa-angle-right"></i> &nbsp; Services Style 1</a></li>
                        <li><a href="services-2.html"><i class="fa fa-angle-right"></i> &nbsp; Services Style 2</a></li>
                        <li><a href="services-3.html"><i class="fa fa-angle-right"></i> &nbsp; Services Style 3</a></li>
                        <li><a href="whois.html"><i class="fa fa-angle-right"></i> &nbsp; Search Whois</a></li>
                        <li><a href="team.html"><i class="fa fa-angle-right"></i> &nbsp; Team</a></li>
                        <li><a href="faq.html"><i class="fa fa-angle-right"></i> &nbsp; FAQ</a></li>
                      </ul>
                      <ul class="col-sm-6 col-md-3 list-unstyled ">
                        <li>
                          <p> Pages 3 </p>
                        </li>
                        <li><a href="full-width.html"><i class="fa fa-angle-right"></i> &nbsp; Full Width Page</a></li>
                        <li><a href="left-sidebar.html"><i class="fa fa-angle-right"></i> &nbsp; Left Sidebar Page</a></li>
                        <li><a href="right-sidebar.html"><i class="fa fa-angle-right"></i> &nbsp; Right Sidebar Page</a></li>
                        <li><a href="packages.html"><i class="fa fa-angle-right"></i> &nbsp; Package Plans</a></li>
                        <li><a href="careers.html"><i class="fa fa-angle-right"></i> &nbsp; Careers</a></li>
                        <li><a href="coming-soon.html"><i class="fa fa-angle-right"></i> &nbsp; Coming Soon</a></li>
                      </ul>
                      <ul class="col-sm-6 col-md-3 list-unstyled ">
                        <li>
                          <p> Pages 4 </p>
                        </li>
                        <li><a href="login.html"><i class="fa fa-angle-right"></i> &nbsp; Login Form</a></li>
                        <li><a href="register.html"><i class="fa fa-angle-right"></i> &nbsp; Registration Form</a></li>
                        <li><a href="sitemap.html"><i class="fa fa-angle-right"></i> &nbsp; Sitemap</a></li>
                        <li><a href="maintenance.html"><i class="fa fa-angle-right"></i> &nbsp; Maintenance</a></li>
                        <li><a href="404.html"><i class="fa fa-angle-right"></i> &nbsp; 404 Error Page</a></li>
                        <li><a href="404-2.html"><i class="fa fa-angle-right"></i> &nbsp; 404 Error Page2</a></li>
                      </ul>
                    </div>
                  </div>
                </li>
              </ul>
            </li>
            
                <li class="dropdown"> <a href="portfolio-three.html" class="dropdown-toggle">Portfolio</a>
              <ul class="dropdown-menu" role="menu">
                <li> <a href="portfolio-one.html">Single Item</a> </li>
                <li> <a href="portfolio-two.html">Portfolio Columns 2</a> </li>
                <li> <a href="portfolio-three.html">Portfolio Columns 3</a> </li>
                <li> <a href="portfolio-four.html">Portfolio Columns 4</a> </li>
                <li> <a href="portfolio-five.html">Portfolio + Sidebar</a> </li>
                <li> <a href="portfolio-six.html">Portfolio Masonry</a> </li>
                <li> <a href="portfolio-seven.html">Slider Projects</a> </li>
                <li class="dropdown-submenu mul"> <a tabindex="-1" href="#">Sub Menu + </a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Menu Item 1</a></li>
                    <li><a href="#">Menu Item 2</a></li>
                    <li><a href="#">Menu Item 3</a></li>
                  </ul>
                </li>
              </ul>
            </li>
                <li class="dropdown"> <a href="blog.html" class="dropdown-toggle">Blog</a>
              <ul class="dropdown-menu three" role="menu">
                <li> <a href="blog.html">Blog Full Width</a> </li>
                <li> <a href="blog-2.html">Blog 3Columns</a> </li>
                <li> <a href="blog-3.html">Blog Standard</a> </li>
                <li> <a href="blog-post.html">Single Post</a> </li>
              </ul>
            </li>
            
            <li class="dropdown"> <a href="contact.html" class="dropdown-toggle align-1">Contact</a>
              <ul class="dropdown-menu align-1 two" role="menu">
                <li> <a href="contact.html">Contact Variation 1</a> </li>
                <li> <a href="contact-2.html">Contact Variation 2</a> </li>
                <li> <a href="contact-3.html">Contact Variation 3</a> </li>
              </ul>
            </li>
            
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!--end menu-->
    </div>
    <!--end menu-->
    


<section id="header">
    <div class="container">
        <ul class="top-nav">
            <?php if ($_smarty_tpl->tpl_vars['languagechangeenabled']->value && count($_smarty_tpl->tpl_vars['locales']->value) > 1) {?>
                <li>
                    <a href="#" class="choose-language" data-toggle="popover" id="languageChooser">
                        <?php echo $_smarty_tpl->tpl_vars['activeLocale']->value['localisedName'];?>

                        <b class="caret"></b>
                    </a>
                    <div id="languageChooserContent" class="hidden">
                        <ul>
                            <?php
$_from = $_smarty_tpl->tpl_vars['locales']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_locale_0_saved_item = isset($_smarty_tpl->tpl_vars['locale']) ? $_smarty_tpl->tpl_vars['locale'] : false;
$_smarty_tpl->tpl_vars['locale'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['locale']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['locale']->value) {
$_smarty_tpl->tpl_vars['locale']->_loop = true;
$__foreach_locale_0_saved_local_item = $_smarty_tpl->tpl_vars['locale'];
?>
                                <li>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['currentpagelinkback']->value;?>
language=<?php echo $_smarty_tpl->tpl_vars['locale']->value['language'];?>
"><?php echo $_smarty_tpl->tpl_vars['locale']->value['localisedName'];?>
</a>
                                </li>
                            <?php
$_smarty_tpl->tpl_vars['locale'] = $__foreach_locale_0_saved_local_item;
}
if ($__foreach_locale_0_saved_item) {
$_smarty_tpl->tpl_vars['locale'] = $__foreach_locale_0_saved_item;
}
?>
                        </ul>
                    </div>
                </li>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?>
                <li>
                    <a href="#" data-toggle="popover" id="accountNotifications" data-placement="bottom">
                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['notifications'];?>

                        <?php if (count($_smarty_tpl->tpl_vars['clientAlerts']->value) > 0) {?><span class="label label-info">NEW</span><?php }?>
                        <b class="caret"></b>
                    </a>
                    <div id="accountNotificationsContent" class="hidden">
                        <ul class="client-alerts">
                        <?php
$_from = $_smarty_tpl->tpl_vars['clientAlerts']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_alert_1_saved_item = isset($_smarty_tpl->tpl_vars['alert']) ? $_smarty_tpl->tpl_vars['alert'] : false;
$_smarty_tpl->tpl_vars['alert'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['alert']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['alert']->value) {
$_smarty_tpl->tpl_vars['alert']->_loop = true;
$__foreach_alert_1_saved_local_item = $_smarty_tpl->tpl_vars['alert'];
?>
                            <li>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['alert']->value->getLink();?>
">
                                    <i class="fa fa-fw fa-<?php if ($_smarty_tpl->tpl_vars['alert']->value->getSeverity() == 'danger') {?>exclamation-circle<?php } elseif ($_smarty_tpl->tpl_vars['alert']->value->getSeverity() == 'warning') {?>warning<?php } elseif ($_smarty_tpl->tpl_vars['alert']->value->getSeverity() == 'info') {?>info-circle<?php } else { ?>check-circle<?php }?>"></i>
                                    <div class="message"><?php echo $_smarty_tpl->tpl_vars['alert']->value->getMessage();?>
</div>
                                </a>
                            </li>
                        <?php
$_smarty_tpl->tpl_vars['alert'] = $__foreach_alert_1_saved_local_item;
}
if (!$_smarty_tpl->tpl_vars['alert']->_loop) {
?>
                            <li class="none">
                                <?php echo $_smarty_tpl->tpl_vars['LANG']->value['notificationsnone'];?>

                            </li>
                        <?php
}
if ($__foreach_alert_1_saved_item) {
$_smarty_tpl->tpl_vars['alert'] = $__foreach_alert_1_saved_item;
}
?>
                        </ul>
                    </div>
                </li>
                <li class="primary-action">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/logout.php" class="btn btn-action">
                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareanavlogout'];?>

                    </a>
                </li>
            <?php } else { ?>
                <li>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/clientarea.php"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['login'];?>
</a>
                </li>
                <?php if ($_smarty_tpl->tpl_vars['condlinks']->value['allowClientRegistration']) {?>
                    <li>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/register.php"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['register'];?>
</a>
                    </li>
                <?php }?>
                <li class="primary-action">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/cart.php?a=view" class="btn btn-action">
                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['viewcart'];?>

                    </a>
                </li>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['adminMasqueradingAsClient']->value || $_smarty_tpl->tpl_vars['adminLoggedIn']->value) {?>
                <li>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/logout.php?returntoadmin=1" class="btn btn-logged-in-admin" data-toggle="tooltip" data-placement="bottom" title="<?php if ($_smarty_tpl->tpl_vars['adminMasqueradingAsClient']->value) {
echo $_smarty_tpl->tpl_vars['LANG']->value['adminmasqueradingasclient'];?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['logoutandreturntoadminarea'];
} else {
echo $_smarty_tpl->tpl_vars['LANG']->value['adminloggedin'];?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['returntoadminarea'];
}?>">
                        <i class="fa fa-sign-out"></i>
                    </a>
                </li>
            <?php }?>
        </ul>

        <?php if ($_smarty_tpl->tpl_vars['assetLogoPath']->value) {?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/index.php" class="logo"><img src="<?php echo $_smarty_tpl->tpl_vars['assetLogoPath']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['companyname']->value;?>
"></a>
        <?php } else { ?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/index.php" class="logo logo-text"><?php echo $_smarty_tpl->tpl_vars['companyname']->value;?>
</a>
        <?php }?>

    </div>
</section>

<section id="main-menu">

    <nav id="nav" class="navbar navbar-default navbar-main" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#primary-nav">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="primary-nav">

                <ul class="nav navbar-nav">

                    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('navbar'=>$_smarty_tpl->tpl_vars['primaryNavbar']->value), 0, true);
?>


                </ul>

                <ul class="nav navbar-nav navbar-right">

                    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('navbar'=>$_smarty_tpl->tpl_vars['secondaryNavbar']->value), 0, true);
?>


                </ul>

            </div><!-- /.navbar-collapse -->
        </div>
    </nav>

</section>

<?php if ($_smarty_tpl->tpl_vars['templatefile']->value == 'homepage') {?>
    <section id="home-banner">
        <div class="container text-center">
            <?php if ($_smarty_tpl->tpl_vars['registerdomainenabled']->value || $_smarty_tpl->tpl_vars['transferdomainenabled']->value) {?>
                <h2><?php echo $_smarty_tpl->tpl_vars['LANG']->value['homebegin'];?>
</h2>
                <form method="post" action="domainchecker.php">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                            <div class="input-group input-group-lg">
                                <input type="text" class="form-control" name="domain" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['exampledomain'];?>
" autocapitalize="none" />
                                <span class="input-group-btn">
                                    <?php if ($_smarty_tpl->tpl_vars['registerdomainenabled']->value) {?>
                                        <input type="submit" class="btn search" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['search'];?>
" />
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['transferdomainenabled']->value) {?>
                                        <input type="submit" name="transfer" class="btn transfer" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainstransfer'];?>
" />
                                    <?php }?>
                                </span>
                            </div>
                        </div>
                    </div>

                    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/captcha.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

                </form>
            <?php } else { ?>
                <h2><?php echo $_smarty_tpl->tpl_vars['LANG']->value['doToday'];?>
</h2>
            <?php }?>
        </div>
    </section>
    <div class="home-shortcuts">
        <div class="container">
            <div class="row">
                <div class="col-md-4 hidden-sm hidden-xs text-center">
                    <p class="lead">
                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['howcanwehelp'];?>

                    </p>
                </div>
                <div class="col-sm-12 col-md-8">
                    <ul>
                        <?php if ($_smarty_tpl->tpl_vars['registerdomainenabled']->value || $_smarty_tpl->tpl_vars['transferdomainenabled']->value) {?>
                            <li>
                                <a id="btnBuyADomain" href="domainchecker.php">
                                    <i class="fa fa-globe"></i>
                                    <p>
                                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['buyadomain'];?>
 <span>&raquo;</span>
                                    </p>
                                </a>
                            </li>
                        <?php }?>
                        <li>
                            <a id="btnOrderHosting" href="cart.php">
                                <i class="fa fa-hdd-o"></i>
                                <p>
                                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderhosting'];?>
 <span>&raquo;</span>
                                </p>
                            </a>
                        </li>
                        <li>
                            <a id="btnMakePayment" href="clientarea.php">
                                <i class="fa fa-credit-card"></i>
                                <p>
                                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['makepayment'];?>
 <span>&raquo;</span>
                                </p>
                            </a>
                        </li>
                        <li>
                            <a id="btnGetSupport" href="submitticket.php">
                                <i class="fa fa-envelope-o"></i>
                                <p>
                                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['getsupport'];?>
 <span>&raquo;</span>
                                </p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
<?php }?>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/verifyemail.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>


<section id="main-body">
    <div class="container<?php if ($_smarty_tpl->tpl_vars['skipMainBodyContainer']->value) {?>-fluid without-padding<?php }?>">
        <div class="row">

        <?php if (!$_smarty_tpl->tpl_vars['inShoppingCart']->value && ($_smarty_tpl->tpl_vars['primarySidebar']->value->hasChildren() || $_smarty_tpl->tpl_vars['secondarySidebar']->value->hasChildren())) {?>
            <?php if ($_smarty_tpl->tpl_vars['primarySidebar']->value->hasChildren() && !$_smarty_tpl->tpl_vars['skipMainBodyContainer']->value) {?>
                <div class="col-md-9 pull-md-right">
                    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/pageheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['displayTitle']->value,'desc'=>$_smarty_tpl->tpl_vars['tagline']->value,'showbreadcrumb'=>true), 0, true);
?>

                </div>
            <?php }?>
            <div class="col-md-3 pull-md-left sidebar">
                <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('sidebar'=>$_smarty_tpl->tpl_vars['primarySidebar']->value), 0, true);
?>

            </div>
        <?php }?>
        <!-- Container for main page display content -->
        <div class="<?php if (!$_smarty_tpl->tpl_vars['inShoppingCart']->value && ($_smarty_tpl->tpl_vars['primarySidebar']->value->hasChildren() || $_smarty_tpl->tpl_vars['secondarySidebar']->value->hasChildren())) {?>col-md-9 pull-md-right<?php } else { ?>col-xs-12<?php }?> main-content">
            <?php if (!$_smarty_tpl->tpl_vars['primarySidebar']->value->hasChildren() && !$_smarty_tpl->tpl_vars['showingLoginPage']->value && !$_smarty_tpl->tpl_vars['inShoppingCart']->value && $_smarty_tpl->tpl_vars['templatefile']->value != 'homepage' && !$_smarty_tpl->tpl_vars['skipMainBodyContainer']->value) {?>
                <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/pageheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['displayTitle']->value,'desc'=>$_smarty_tpl->tpl_vars['tagline']->value,'showbreadcrumb'=>true), 0, true);
?>

            <?php }
}
}
