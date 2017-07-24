<?php
/* Smarty version 3.1.29, created on 2017-06-21 13:04:21
  from "/var/www/html/whmcs/templates/nrghost/homepage.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_594a60c523e679_96427528',
  'file_dependency' => 
  array (
    '5d1cfaeb8473f23b085f016ec1255c2ebd7f9937' => 
    array (
      0 => '/var/www/html/whmcs/templates/nrghost/homepage.tpl',
      1 => 1498046655,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_594a60c523e679_96427528 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once '/var/www/html/whmcs/vendor/smarty/smarty/libs/plugins/modifier.truncate.php';
?>
<section id="content-wrapper">

     <!-- BLOCK "TYPE 10" -->
            <div class="block type-10 block-system-slider">
                <div class="main-banner-height">
                <img class="center-image" src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/images/host.jpg" />
                    <div class="swiper-container" data-autoplay="0" data-loop="0" data-speed="500" data-center="0" data-slides-per-view="1">
                        <div class="swiper-wrapper">

                            <div class="swiper-slide">
                                <div class="container container-slide">
                                    <div class="slide-container">
                                        <div class="slide-block nopadding col-sm-6">
                                            <div class="vertical-align">
                                                <div class="content">
                                                    <img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/images/slide1.jpg" alt="" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="slide-block nopadding col-sm-6">
                                            <div class="vertical-align">
                                                <div class="content text-entry">
                                                    <h3 class="title">Domain Registration</h3>
                                                    <div class="text"><b>we source and register domain @ low and affordable prices.</b></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="container container-slide">
                                    <div class="slide-container">
                                        <div class="slide-block nopadding col-sm-6">
                                            <div class="vertical-align">
                                                <div class="content">
                                                    <img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/images/ds.png" alt="" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="slide-block nopadding col-sm-6">
                                            <div class="vertical-align">
                                                <div class="content text-entry">
                                                    <h3 class="title">Website hosting</h3>
                                                    <div class="text"><b>we offer cheap and reliable Website hosting @ #3000/year.</b></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="container container-slide">
                                    <div class="slide-container">
                                        <div class="slide-block nopadding col-sm-6">
                                            <div class="vertical-align">
                                                <div class="content">
                                                    <img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/images/web21.jpg" alt="" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="slide-block nopadding col-sm-6">
                                            <div class="vertical-align">
                                                <div class="content text-entry">
                                                    <h3 class="title">Website designing</h3>
                                                    <div class="text"><b>we create, host and update websites with the latest technology.</b></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="container container-slide">
                                    <div class="slide-container">
                                        <div class="slide-block nopadding col-sm-6 col-sm-push-6">
                                            <div class="vertical-align">
                                                <div class="content">
                                                    <img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/images/ssl.png" alt="" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="slide-block nopadding col-sm-6 col-sm-pull-6">
                                            <div class="vertical-align">
                                                <div class="content text-entry">
                                                    <h3 class="title">SSL Certifications</h3>
                                                    <div class="text"><b>we offer secure transactions and customer data with ssl while shoping on your website.</b></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="pagination"></div>
                    </div>
                </div>
                <div class="banner-tabs">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="tab-entry active col-md-3">
                                <div class="title">Domain Registration</div>
                                <div class="text">we source and register domain @ low and affordable prices.</div>
                            </div>
                            <div class="tab-entry col-md-3">
                               <div class="title">Website hosting</div>
                                <div class="text">we offer cheap and reliable Website hosting @ #3000/year.</div>
                            </div>
                            <div class="tab-entry col-md-3">
                                <div class="title">Website designing</div>
                                <div class="text">we create, host and update websites with the latest technology.</div>
                            </div>
                            <div class="tab-entry col-md-3">
                               <div class="title">SSL Certifications</div>
                                <div class="text">we offer secure transactions and customer data with ssl while shoping on your website.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             <div class="block type-8">
                <div class="container container-form">
                    <div class="row">
                        <div class="form-description col-md-12">
                            <h1 class="title tille_mod"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domaincheckerchoosedomain'];?>
</h1>
                            <p class="text text-center"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domaincheckerenterdomain'];?>
</p>
                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['condlinks']->value['domainreg'] || $_smarty_tpl->tpl_vars['condlinks']->value['domaintrans'] || $_smarty_tpl->tpl_vars['condlinks']->value['domainown']) {?>
                        <div class="well well-form text-center margin-top">
                            <form method="post" action="domainchecker.php">
                                <div class="row form-group">
                                    <div class="col-md-10 col-md-offset-1">
                                        <input class="form-control input-lg" name="domain" type="text" value="" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['domaincheckerdomainexample'];?>
">
                                    </div>
                                </div>
                  <!--           <?php if ($_smarty_tpl->tpl_vars['capatacha']->value) {?>
                                <div class="row">
                                    <div class="col-md-6 col-md-offset-3">
                                        <div class="panel panel-default main-panel">
                                            <div class="panel-body">
                                                <p><small><?php echo $_smarty_tpl->tpl_vars['LANG']->value['captchaverify'];?>
</small></p>
                                        <?php if ($_smarty_tpl->tpl_vars['capatacha']->value == "recaptcha") {?>
                                                <p><?php echo $_smarty_tpl->tpl_vars['recapatchahtml']->value;?>
</p>
                                        <?php } else { ?>
                                                <div class="col-sm-3 col-sm-offset-3  col-xs-6 text-right ">
                                                    <input id="cap-input" type="text" name="code" class="form-control input-sm" maxlength="5">
                                                </div>
                                                <div class="col-sm-6  col-xs-6  text-left">
                                                    <img src="includes/verifyimage.php" alt="captcha" style="margin-bottom: 20px;">
                                                </div>
                                        <?php }?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php }?> -->
                                <div>
                                    <?php if ($_smarty_tpl->tpl_vars['condlinks']->value['domainreg']) {?><input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['checkavailability'];?>
" class="btn main-btn btn-primary btn-lg"><?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['condlinks']->value['domaintrans']) {?><input type="submit" name="transfer" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainstransfer'];?>
" class="btn main-btn  btn-success btn-lg"><?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['condlinks']->value['domainown']) {?><input type="submit" name="hosting" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['domaincheckerhostingonly'];?>
" class="btn  main-btn btn-default btn-lg"><?php }?>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <?php }?>

<!-- BLOCK "TYPE 1" -->
            <div class="block type-1">
                <div class="container">

                    <div class="row wow fadeInDown">
                        <div class="block-header col-md-6 col-md-offset-3 col-sm-12 col-sm-offset-0">
                            <h2 class="title">Our Products & Services</h2>
                            <div class="text">We offer updated, reliable and well equiped web hosting services at cheap and afforded prices. </div>
                        </div>
                    </div>

                    <div class="row wow fadeInUp">
                        <div class="icon-entry col-xs-12 col-sm-6 col-md-4">
                            <img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/images/sliders/domain.png" alt=""/>
                            <div class="content">
                                <h3 class="title">Domain Registration</h3>
                                <div class="text">SmartWeb is the premier registrar of domain names, offering traditional as well as the latest TLDs. We offer domain services....<button class="btn btn-success"><a href="">Buy now</a></button></div>
                            </div>
                        </div>
                        <div class="icon-entry col-xs-12 col-sm-6  col-md-4">
                            <img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/images/sliders/server/hosting1.jpg" alt=""/>
                            <div class="content">
                                <h3 class="title">Web Hosting</h3>
                                <div class="text">Looking for Web hosting that is reliable? Take charge with industry-standard cPanel or Parallels Plesk control panels, free 24/7 support..<button class="btn btn-success"><a href="">Buy now</a></button></div>
                            </div>
                        </div>
                        <div class="icon-entry col-xs-12 col-sm-6  col-md-4">
                            <img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/images/sliders/server/sel.png" alt=""/>
                            <div class="content">
                                <h3 class="title">Reseller Hosting</h3>
                                <div class="text">Become a Web Hosting reseller and let us do the heavy lifting. Access all the tools to easily create your own business....<button class="btn btn-success"><a href="">Buy now</a></button></div>
                            </div>
                        </div>
                        <div class="icon-entry col-xs-12 col-sm-6  col-md-4">
                            <img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/images/sliders/server/index.png" alt=""/>
                            <div class="content">
                                <h3 class="title">Platinum Dedicated Servers</h3>
                                <div class="text">SmartWeb Server is a fully managed solution designed to take your business to the next level, providing great opportunities for...<button class="btn btn-success"><a href="">Buy now</a></button></div>
                            </div>
                        </div>
                        <div class="icon-entry col-xs-12 col-sm-6  col-md-4">
                            <img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/images/sliders/server/slider-1.png" alt=""/>
                            <div class="content">
                                <h3 class="title">Web Designing</h3>
                                <div class="text">A well designed website can be a great asset to your company by providing insight into who you are and the services you offer..<button class="btn btn-success"><a href="">Buy now</a></button> </div>
                            </div>
                        </div>
                        <div class="icon-entry col-xs-12 col-sm-6  col-md-4">
                            <img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/images/sliders/server/tech3.png" alt=""/>
                            <div class="content">
                                <h3 class="title">Technical Service</h3>
                                <div class="text">Our Dedicated support team are always ready to provide the neccessary domain and website assistance needed to succeed and excel..<button class="btn btn-success"><a href="">Details</a></button></div>
                            </div>
                        </div>
                        <div class="icon-entry col-xs-12 col-sm-6  col-md-4">
                            <img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/images/sliders/server/ssl.png" alt=""/>
                            <div class="content">
                                <h3 class="title">SSL</h3>
                                <div class="text">SSL Certificates, or Secure Sockets Layer Certificates, authenticate your website to assure customers that your website is secure..<button class="btn btn-success"><a href="">Buy now</a></button></div>
                            </div>
                        </div>
                        <div class="icon-entry col-xs-12 col-sm-6  col-md-4">
                            <img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/images/sliders/server/codeguard-logo.png" alt=""/>
                            <div class="content">
                                <h3 class="title">Code Guard</h3>
                                <div class="text">CodeGuard is a solution that automatically backs up your website and database. It monitors your website and database security..<button class="btn btn-success"><a href="">Buy now</a></button></div>
                            </div>
                        </div>
                        <div class="icon-entry col-xs-12 col-sm-6  col-md-4">
                            <img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/images/sliders/server/site.jpg" alt=""/>
                            <div class="content">
                                <h3 class="title">Site Lock</h3>
                                <div class="text">SiteLock is a simple and effective cloud-based security solution built specially for Small & Medium scale Businesses...<button class="btn btn-success"><a href="">Buy now</a></button> </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- BLOCK "TYPE 5" -->
            <div class="block type-5">
                <div class="container">

                    <div class="row wow fadeInDown">
                        <div class="block-header col-md-6 col-md-offset-3 col-sm-12 col-sm-offset-0">
                            <div class="title">Our Esteem Clients</div>
                            <div class="text"> whose extraordinary perceptions remain our reality for growth and effective customer satisfaction</div>
                        </div>
                    </div>

                    <div class="wow fadeInUp">
                        <div class="swiper-container" data-autoplay="0" data-loop="0" data-speed="500" data-center="0" data-slides-per-view="responsive" data-xs-slides="1" data-sm-slides="3" data-md-slides="5" data-lg-slides="6">
                            <div class="swiper-wrapper">
                              
                                <div class="swiper-slide"> 
                                    <img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/images/clients/client-logo1.png" alt="" />
                                </div>
                                <div class="swiper-slide"> 
                                    <img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/images/clients/client-logo2.png" alt="" />
                                </div>
                                <div class="swiper-slide"> 
                                    <img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/images/clients/client-logo3.png" alt="" />
                                </div>
                               <!--  <div class="swiper-slide"> 
                                    <img src="images/clients/Benue-state-logo.png" alt="" />
                                </div> -->
                                <div class="swiper-slide"> 
                                    <img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/images/clients/client-logo4.png" alt="" />
                                </div>
                                <div class="swiper-slide"> 
                                    <img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/images/clients/client-logo5.png" alt="" />
                                </div>
                                <div class="swiper-slide"> 
                                    <img src="
                                    templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/images/clients/client-logo6.png" alt="" />
                                </div>
                                <div class="swiper-slide"> 
                                    <img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/images/clients/client-logo7.png" alt="" />
                                </div>
                            </div>
                            <div class="pagination"></div>
                        </div>
                    </div>

                </div>
            </div>
        <br>

        <div class="container container-serv">
            <div class="row">
                <div class="col-md-6 col-info">
                    <img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/images/cart.jpg" alt="img" style="height: 80px; width: 80px;">
                    <h2 class="main-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['navservicesorder'];?>
</h2>
                    <p class="main-text"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareahomeorder'];?>
</p>
                    <div class="text-center">
                        <a href="cart.php" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareahomeorderbtn'];?>
" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareahomeorderbtn'];?>
</a>
                    </div>
                </div>
                <div class="col-md-6 col-info">
                    <img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/images/profile.png" alt="img" style="height: 80px; width: 80px;">
                    <h2 class="main-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['manageyouraccount'];?>
</h2>
                    <p class="main-text"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareahomelogin'];?>
</p>
                    <div class="text-center">
                        <a href="clientarea.php" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareahomeloginbtn'];?>
" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareahomeloginbtn'];?>
</a>
                    </div>
                </div>
            </div>

<!--             <?php if ($_smarty_tpl->tpl_vars['twitterusername']->value) {?>
            <div class="page-header">
                <h2><?php echo $_smarty_tpl->tpl_vars['LANG']->value['twitterlatesttweets'];?>
</h2>
            </div>
            <div id="twitterfeed">
                <p><img src="images/loading.gif" alt="loading..."></p>
            </div>
            
            <?php echo '<script'; ?>
 type="text/javascript">
                jQuery(document).ready(function(){jQuery.post("announcements.php",{action:"twitterfeed",numtweets:3},function(data){jQuery("#twitterfeed").html(data);});});
            <?php echo '</script'; ?>
>
            
            <?php } elseif ($_smarty_tpl->tpl_vars['announcements']->value) {?>
            <h2><?php echo $_smarty_tpl->tpl_vars['LANG']->value['latestannouncements'];?>
</h2>
                <?php
$_from = $_smarty_tpl->tpl_vars['announcements']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_announcement_0_saved_item = isset($_smarty_tpl->tpl_vars['announcement']) ? $_smarty_tpl->tpl_vars['announcement'] : false;
$_smarty_tpl->tpl_vars['announcement'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['announcement']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['announcement']->value) {
$_smarty_tpl->tpl_vars['announcement']->_loop = true;
$__foreach_announcement_0_saved_local_item = $_smarty_tpl->tpl_vars['announcement'];
?>
            <p><?php echo $_smarty_tpl->tpl_vars['announcement']->value['date'];?>
 - <a href="<?php if ($_smarty_tpl->tpl_vars['seofriendlyurls']->value) {?>announcements/<?php echo $_smarty_tpl->tpl_vars['announcement']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['announcement']->value['urlfriendlytitle'];?>
.html<?php } else { ?>announcements.php?id=<?php echo $_smarty_tpl->tpl_vars['announcement']->value['id'];
}?>"><b><?php echo $_smarty_tpl->tpl_vars['announcement']->value['title'];?>
</b></a><br><?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['announcement']->value['text']),100,"...");?>
</p>
                <?php
$_smarty_tpl->tpl_vars['announcement'] = $__foreach_announcement_0_saved_local_item;
}
if ($__foreach_announcement_0_saved_item) {
$_smarty_tpl->tpl_vars['announcement'] = $__foreach_announcement_0_saved_item;
}
?>
            <?php }?> -->
       </div>
</section>
<?php }
}
