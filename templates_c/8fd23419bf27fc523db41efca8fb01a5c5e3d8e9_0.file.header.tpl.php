<?php
/* Smarty version 3.1.29, created on 2017-06-21 10:33:40
  from "/var/www/html/whmcs/templates/nrghost/header.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_594a3d74d2ed06_65442099',
  'file_dependency' => 
  array (
    '8fd23419bf27fc523db41efca8fb01a5c5e3d8e9' => 
    array (
      0 => '/var/www/html/whmcs/templates/nrghost/header.tpl',
      1 => 1498037618,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_594a3d74d2ed06_65442099 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php echo $_smarty_tpl->tpl_vars['charset']->value;?>
" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php if ($_smarty_tpl->tpl_vars['kbarticle']->value['title']) {
echo $_smarty_tpl->tpl_vars['kbarticle']->value['title'];?>
 - <?php }
echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['companyname']->value;?>
</title>

    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>


    <?php echo $_smarty_tpl->tpl_vars['headoutput']->value;?>


</head>
<body>

    <?php echo $_smarty_tpl->tpl_vars['headeroutput']->value;?>


    <header class="header">
    <div  id="header1">
        <div class="container">
                <div class="header-left1">
                </div>
                <div class="header-right">
                       <div class="header-inline-entry">
                            <a class="link" href="#">24/7 Sales &amp; Support Call 070090009000, 08035905422, 08051897087 |</a>
                        </div>
                    <?php if (!$_smarty_tpl->tpl_vars['loggedin']->value) {?>
                        <div class="header-inline-entry">
                            <a class="link" href="clientarea.php">login |</a>
                        </div>
                        <div class="header-inline-entry">
                            <a class="link" href="register.php">Register |</a>
                        </div>
                         <div class="header-inline-entry">
                            <a class="link" href="clientarea.php">Submit Ticket |</a>
                        </div>
                        <div class="header-inline-entry">
                            <a class="link" href="register.php">Place Order</a>
                        </div>
                    <?php } else { ?>
                        <div class="header-inline-entry">
                            <a class="link" href="logout.php">Logout</a>
                        </div>
                    <?php }?>
                </div>
        </div>
    </div>
        <div class="container">
            <div id="logo-wrapper">
                <div class="cell-view"><a id="logo" href="index.php"><img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/images/logo.png" alt="" /></a></div>
            </div>
            <div class="open-icon">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="header-container">
                <div class="scrollable-container">
                    <div class="header-left">
                        <nav>
                            <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('navbar'=>$_smarty_tpl->tpl_vars['primaryNavbar']->value), 0, true);
?>

                            <?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?>
                                <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('navbar'=>$_smarty_tpl->tpl_vars['secondaryNavbar']->value), 0, true);
?>

                            <?php }?>
                        </nav>
                    </div>
            <!--         <div class="header-right">
                        <?php if (!$_smarty_tpl->tpl_vars['loggedin']->value) {?>
                            <div class="header-inline-entry">
                                <a class="link" href="clientarea.php">login</a>
                            </div>
                            <div class="header-inline-entry">
                                <a class="link" href="register.php">Register</a>
                            </div>
                        <?php } else { ?>
                            <div class="header-inline-entry">
                                <a class="link" href="logout.php">Logout</a>
                            </div>
                        <?php }?>
                    </div> -->
                </div>
            </div>
        </div>
    </header>

<section id="main-body" class="containere">

    <div class="row">
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

            <?php }
}
}
