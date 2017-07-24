<?php
/* Smarty version 3.1.29, created on 2017-06-15 15:24:05
  from "/var/www/html/whmcs/templates/test/header.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_594298856e77c5_68285867',
  'file_dependency' => 
  array (
    '34eefb420ed63961d1343b412c95be0445f00fbf' => 
    array (
      0 => '/var/www/html/whmcs/templates/test/header.tpl',
      1 => 1497536643,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_594298856e77c5_68285867 ($_smarty_tpl) {
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
          <?php if (!$_smarty_tpl->tpl_vars['loggedin']->value) {?>
          <li class="lineright"><a href="clientarea.php">Login</a></li>
          <li class="lineright"><a href="register.php">Register</a></li>
          <?php } else { ?>
          <li class="lineright"><a href="logout.php">Logout</a></li>
          <?php }?>
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

        <?php if ($_smarty_tpl->tpl_vars['assetLogoPath']->value) {?>
	          <a href="index.html" class="navbar-brand"><img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/images/logo/logo.png" alt=""></a>
        <?php } else { ?>
             <a href="index.html" class="navbar-brand"><img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/images/logo/logo.png" alt=""><?php echo $_smarty_tpl->tpl_vars['companyname']->value;?>
</a>
        <?php }?>
            </div>

	        <div id="navbar-collapse-grid" class="navbar-collapse collapse pull-right">
	          <ul class="nav navbar-nav">
	              <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('navbar'=>$_smarty_tpl->tpl_vars['primaryNavbar']->value), 0, true);
?>

                            <?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?>
                                <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('navbar'=>$_smarty_tpl->tpl_vars['secondaryNavbar']->value), 0, true);
?>

                            <?php }?>
	          </ul>
	        </div>
	      </div>
	    </div>
	  </div>
	  <!--end menu-->
    </div>
    <!--end menu-->
        <?php if (!$_smarty_tpl->tpl_vars['inShoppingCart']->value && ($_smarty_tpl->tpl_vars['primarySidebar']->value->hasChildren() || $_smarty_tpl->tpl_vars['secondarySidebar']->value->hasChildren())) {?>
            <?php if ($_smarty_tpl->tpl_vars['primarySidebar']->value->hasChildren()) {?>
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
            <?php if (!$_smarty_tpl->tpl_vars['primarySidebar']->value->hasChildren() && !$_smarty_tpl->tpl_vars['showingLoginPage']->value && !$_smarty_tpl->tpl_vars['inShoppingCart']->value && $_smarty_tpl->tpl_vars['templatefile']->value != 'homepage') {?>
                <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/pageheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['displayTitle']->value,'desc'=>$_smarty_tpl->tpl_vars['tagline']->value,'showbreadcrumb'=>true), 0, true);
?>

            <?php }?>



<?php }
}
