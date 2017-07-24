<?php
/* Smarty version 3.1.29, created on 2017-06-20 11:34:11
  from "/var/www/html/whmcs/templates/nrghost/footer.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5948fa234eb3a1_02205893',
  'file_dependency' => 
  array (
    '498f1b7f0152615e8060299e64ba7af9ae9261ad' => 
    array (
      0 => '/var/www/html/whmcs/templates/nrghost/footer.tpl',
      1 => 1497954847,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5948fa234eb3a1_02205893 ($_smarty_tpl) {
?>

        </div><!-- /.main-content -->
        <?php if (!$_smarty_tpl->tpl_vars['inShoppingCart']->value && $_smarty_tpl->tpl_vars['secondarySidebar']->value->hasChildren()) {?>
            <div class="col-md-3 pull-md-left sidebar">
                <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('sidebar'=>$_smarty_tpl->tpl_vars['secondarySidebar']->value), 0, true);
?>

            </div>
        <?php }?>
    </div>
    <div class="clearfix"></div>
</section>


   <!-- FOOTER -->
    <footer class="footer">
        <div class="container ">
            <div class="row">
                <div class="footer-entry col-md-3">
                    <h3 class="title">Smart Web</h3>
                    <div class="text">SmartWeb was founded in 2004 to give people an easy, affordable way to get their ideas online. We provide domain registration, web hosting and cloud services to over 100,000 sites, blogs and applications, and supports over 5,000 web designers, developers, content creators, small businesses and entrepreneurs with the power of the Open Source Software..... </div>
                </div>
                <div class="footer-entry col-md-2 col-sm-3 col-xs-6">
                    <h3 class="title">Products</h3>
                    <ul>
                        <li><a href="hosting.html">Web Hosting</a></li>
                        <li><a href="hosting.html">Reseller Hosting</a></li>
                        <li><a href="host-vps.html">VPS Hosting</a></li>
                        <li><a href="host-dedicated.html">Dedicated Hosting</a></li>
                        <li><a href="hosting.html">Application Hosting</a></li>
                        <li><a href="hosting.html">Windows Hosting</a></li>
                    </ul>
                </div>
                <div class="footer-entry col-md-2 col-sm-3 col-xs-6">
                    <h3 class="title">Company</h3>
                    <ul>
                        <li><a href="host-about.html">About SmartWeb</a></li>
                        <li><a href="host-testimonials.html">Awards &amp; Reviews</a></li>
                        <!-- <li><a href="host-about.html">Press &amp; Media</a></li>
                        <li><a href="blog.html">Company Blog</a></li> -->
                        <li><a href="contact.html">Contact Us</a></li>
                        <li><a href="host-about.html">Careers</a></li>
                    </ul>
                </div>
                <div class="footer-entry col-md-5 col-sm-6 col-xs-12">
                    <h3 class="title">Our Vision</h3>
                    <div class="text">It's our goal to be the first in the market to bring innovative products at competitive price without compromising strength and reliability. we started as pioneers in the Information Technology Industry.</div>
                    <hr>
                    <h3 class="title">Our Mission</h3>
                    <div class="text">It's our goal to be the first in the market to bring innovative products at competitive price without compromising strength and reliability. we started as pioneers in the Information Technology Industry.</div>
                  <!--   <div class="subscription-form">
                        <form>
                            <input type="email" required value="" placeholder="Your Email..."/>
                            <input type="submit" value="" />
                        </form>
                    </div> -->
                </div>
            </div>
            <div class="row nopadding social-icons-wrapper">
                <div class="col-xs-3 nopadding">
                    <a class="social-icon" href="https://www.facebook.com/" target="_blank" style="background-color: #3b5998;">
                        <img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/nrghosts/img/icon-17.png" alt="" />
                    </a>
                </div>
                <div class="col-xs-3 nopadding">
                    <a class="social-icon" href="https://plus.google.com" target="_blank" style="background-color: #e02f2f;">
                        <img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/nrghosts/img/icon-18.png" alt="" />
                    </a>
                </div>
                <div class="col-xs-3 nopadding">
                    <a class="social-icon" href="https://twitter.com/" target="_blank" style="background-color: #55acee;">
                        <img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/nrghosts/img/icon-19.png" alt="" />
                    </a>
                </div>
                <div class="col-xs-3 nopadding">
                    <a class="social-icon" href="https://www.linkedin.com/" target="_blank" style="background-color: #007bb5;">
                        <img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/nrghosts/img/icon-20.png" alt="" />
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                      <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('navbar'=>$_smarty_tpl->tpl_vars['primaryNavbar']->value), 0, true);
?>

                        <?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?>
                            <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('navbar'=>$_smarty_tpl->tpl_vars['secondaryNavbar']->value), 0, true);
?>

                        <?php }?>
                </div>
                <div class="col-md-4">
                    <div class="copyright">&copy; <?php echo $_smarty_tpl->tpl_vars['date_year']->value;?>
 All rights reserved. <?php echo $_smarty_tpl->tpl_vars['companyname']->value;?>
</div>
                </div>
            </div>
        </div>
        <div class="footer-line">
            <div class="container">
                <div class="row">
                    <div class="footer-line-entry col-md-2 col-sm-6 col-xs-12">
                         <img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/images/payment/111.png" alt=""/>
                    </div>
                    <div class="footer-line-entry col-md-2 col-sm-6 col-xs-12">
                         <img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/images/payment/22.png" alt=""/>
                    </div>
                    <div class="footer-line-entry col-md-2 col-sm-6 col-xs-12">
                         <img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/images/payment/33.png" alt=""/>
                    </div>
                    <div class="footer-line-entry col-md-2 col-sm-6 col-xs-12">
                         <img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/images/payment/44.png" alt=""/>
                    </div>
                    <div class="footer-line-entry col-md-2 col-sm-6 col-xs-12">
                        <img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/images/payment/55.png" alt=""/>
                    </div>
                    <div class="footer-line-entry col-md-2 col-sm-6 col-xs-12">
                        <img src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/images/payment/chat1.png" alt=""/>
                        <div class="content">
                            <div class="cell-view"><a href="#">Live Chat</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_JS']->value;?>
/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_JS']->value;?>
/jquery-ui.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
    var csrfToken = '<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
';
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/js/whmcs.js"><?php echo '</script'; ?>
>

<?php echo $_smarty_tpl->tpl_vars['footeroutput']->value;?>


    <?php echo '<script'; ?>
 src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/nrghosts/js/idangerous.swiper.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/nrghosts/js/global.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/assets/nrghosts/js/wow.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        var wow = new WOW(
            {
                boxClass:     'wow',      // animated element css class (default is wow)
                animateClass: 'animated', // animation css class (default is animated)
                offset:       100,          // distance to the element when triggering the animation (default is 0)
                mobile:       true,       // trigger animations on mobile devices (default is true)
                live:         true,       // act on asynchronously loaded content (default is true)
                callback:     function(box) {
                  // the callback is fired every time an animation is started
                  // the argument that is passed in is the DOM node being animated
                }
            }
        );
        wow.init();
    <?php echo '</script'; ?>
>

    <?php echo $_smarty_tpl->tpl_vars['footeroutput']->value;?>


</body>
</html>
<?php }
}
