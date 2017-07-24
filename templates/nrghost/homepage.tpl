<section id="content-wrapper">

     <!-- BLOCK "TYPE 10" -->
            <div class="block type-10 block-system-slider">
                <div class="main-banner-height">
                <img class="center-image" src="templates/{$template}/images/host.jpg" />
                    <div class="swiper-container" data-autoplay="0" data-loop="0" data-speed="500" data-center="0" data-slides-per-view="1">
                        <div class="swiper-wrapper">

                            <div class="swiper-slide">
                                <div class="container container-slide">
                                    <div class="slide-container">
                                        <div class="slide-block nopadding col-sm-6">
                                            <div class="vertical-align">
                                                <div class="content">
                                                    <img src="templates/{$template}/images/slide1.jpg" alt="" />
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
                                                    <img src="templates/{$template}/images/ds.png" alt="" />
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
                                                    <img src="templates/{$template}/images/web21.jpg" alt="" />
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
                                                    <img src="templates/{$template}/images/ssl.png" alt="" />
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
                            <h1 class="title tille_mod">{$LANG.domaincheckerchoosedomain}</h1>
                            <p class="text text-center">{$LANG.domaincheckerenterdomain}</p>
                        </div>
                        {if $condlinks.domainreg || $condlinks.domaintrans || $condlinks.domainown}
                        <div class="well well-form text-center margin-top">
                            <form method="post" action="domainchecker.php">
                                <div class="row form-group">
                                    <div class="col-md-10 col-md-offset-1">
                                        <input class="form-control input-lg" name="domain" type="text" value="" placeholder="{$LANG.domaincheckerdomainexample}">
                                    </div>
                                </div>
                  <!--           {if $capatacha}
                                <div class="row">
                                    <div class="col-md-6 col-md-offset-3">
                                        <div class="panel panel-default main-panel">
                                            <div class="panel-body">
                                                <p><small>{$LANG.captchaverify}</small></p>
                                        {if $capatacha eq "recaptcha"}
                                                <p>{$recapatchahtml}</p>
                                        {else}
                                                <div class="col-sm-3 col-sm-offset-3  col-xs-6 text-right ">
                                                    <input id="cap-input" type="text" name="code" class="form-control input-sm" maxlength="5">
                                                </div>
                                                <div class="col-sm-6  col-xs-6  text-left">
                                                    <img src="includes/verifyimage.php" alt="captcha" style="margin-bottom: 20px;">
                                                </div>
                                        {/if}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            {/if} -->
                                <div>
                                    {if $condlinks.domainreg}<input type="submit" value="{$LANG.checkavailability}" class="btn main-btn btn-primary btn-lg">{/if}
                                    {if $condlinks.domaintrans}<input type="submit" name="transfer" value="{$LANG.domainstransfer}" class="btn main-btn  btn-success btn-lg">{/if}
                                    {if $condlinks.domainown}<input type="submit" name="hosting" value="{$LANG.domaincheckerhostingonly}" class="btn  main-btn btn-default btn-lg">{/if}
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        {/if}

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
                            <img src="templates/{$template}/images/sliders/domain.png" alt=""/>
                            <div class="content">
                                <h3 class="title">Domain Registration</h3>
                                <div class="text">SmartWeb is the premier registrar of domain names, offering traditional as well as the latest TLDs. We offer domain services....<button class="btn btn-success"><a href="">Buy now</a></button></div>
                            </div>
                        </div>
                        <div class="icon-entry col-xs-12 col-sm-6  col-md-4">
                            <img src="templates/{$template}/images/sliders/server/hosting1.jpg" alt=""/>
                            <div class="content">
                                <h3 class="title">Web Hosting</h3>
                                <div class="text">Looking for Web hosting that is reliable? Take charge with industry-standard cPanel or Parallels Plesk control panels, free 24/7 support..<button class="btn btn-success"><a href="">Buy now</a></button></div>
                            </div>
                        </div>
                        <div class="icon-entry col-xs-12 col-sm-6  col-md-4">
                            <img src="templates/{$template}/images/sliders/server/sel.png" alt=""/>
                            <div class="content">
                                <h3 class="title">Reseller Hosting</h3>
                                <div class="text">Become a Web Hosting reseller and let us do the heavy lifting. Access all the tools to easily create your own business....<button class="btn btn-success"><a href="">Buy now</a></button></div>
                            </div>
                        </div>
                        <div class="icon-entry col-xs-12 col-sm-6  col-md-4">
                            <img src="templates/{$template}/images/sliders/server/index.png" alt=""/>
                            <div class="content">
                                <h3 class="title">Platinum Dedicated Servers</h3>
                                <div class="text">SmartWeb Server is a fully managed solution designed to take your business to the next level, providing great opportunities for...<button class="btn btn-success"><a href="">Buy now</a></button></div>
                            </div>
                        </div>
                        <div class="icon-entry col-xs-12 col-sm-6  col-md-4">
                            <img src="templates/{$template}/images/sliders/server/slider-1.png" alt=""/>
                            <div class="content">
                                <h3 class="title">Web Designing</h3>
                                <div class="text">A well designed website can be a great asset to your company by providing insight into who you are and the services you offer..<button class="btn btn-success"><a href="">Buy now</a></button> </div>
                            </div>
                        </div>
                        <div class="icon-entry col-xs-12 col-sm-6  col-md-4">
                            <img src="templates/{$template}/images/sliders/server/tech3.png" alt=""/>
                            <div class="content">
                                <h3 class="title">Technical Service</h3>
                                <div class="text">Our Dedicated support team are always ready to provide the neccessary domain and website assistance needed to succeed and excel..<button class="btn btn-success"><a href="">Details</a></button></div>
                            </div>
                        </div>
                        <div class="icon-entry col-xs-12 col-sm-6  col-md-4">
                            <img src="templates/{$template}/images/sliders/server/ssl.png" alt=""/>
                            <div class="content">
                                <h3 class="title">SSL</h3>
                                <div class="text">SSL Certificates, or Secure Sockets Layer Certificates, authenticate your website to assure customers that your website is secure..<button class="btn btn-success"><a href="">Buy now</a></button></div>
                            </div>
                        </div>
                        <div class="icon-entry col-xs-12 col-sm-6  col-md-4">
                            <img src="templates/{$template}/images/sliders/server/codeguard-logo.png" alt=""/>
                            <div class="content">
                                <h3 class="title">Code Guard</h3>
                                <div class="text">CodeGuard is a solution that automatically backs up your website and database. It monitors your website and database security..<button class="btn btn-success"><a href="">Buy now</a></button></div>
                            </div>
                        </div>
                        <div class="icon-entry col-xs-12 col-sm-6  col-md-4">
                            <img src="templates/{$template}/images/sliders/server/site.jpg" alt=""/>
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
                                    <img src="templates/{$template}/images/clients/client-logo1.png" alt="" />
                                </div>
                                <div class="swiper-slide"> 
                                    <img src="templates/{$template}/images/clients/client-logo2.png" alt="" />
                                </div>
                                <div class="swiper-slide"> 
                                    <img src="templates/{$template}/images/clients/client-logo3.png" alt="" />
                                </div>
                               <!--  <div class="swiper-slide"> 
                                    <img src="images/clients/Benue-state-logo.png" alt="" />
                                </div> -->
                                <div class="swiper-slide"> 
                                    <img src="templates/{$template}/images/clients/client-logo4.png" alt="" />
                                </div>
                                <div class="swiper-slide"> 
                                    <img src="templates/{$template}/images/clients/client-logo5.png" alt="" />
                                </div>
                                <div class="swiper-slide"> 
                                    <img src="
                                    templates/{$template}/images/clients/client-logo6.png" alt="" />
                                </div>
                                <div class="swiper-slide"> 
                                    <img src="templates/{$template}/images/clients/client-logo7.png" alt="" />
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
                    <img src="templates/{$template}/images/cart.jpg" alt="img" style="height: 80px; width: 80px;">
                    <h2 class="main-title">{$LANG.navservicesorder}</h2>
                    <p class="main-text">{$LANG.clientareahomeorder}</p>
                    <div class="text-center">
                        <a href="cart.php" title="{$LANG.clientareahomeorderbtn}" class="btn btn-primary">{$LANG.clientareahomeorderbtn}</a>
                    </div>
                </div>
                <div class="col-md-6 col-info">
                    <img src="templates/{$template}/images/profile.png" alt="img" style="height: 80px; width: 80px;">
                    <h2 class="main-title">{$LANG.manageyouraccount}</h2>
                    <p class="main-text">{$LANG.clientareahomelogin}</p>
                    <div class="text-center">
                        <a href="clientarea.php" title="{$LANG.clientareahomeloginbtn}" class="btn btn-primary">{$LANG.clientareahomeloginbtn}</a>
                    </div>
                </div>
            </div>

<!--             {if $twitterusername}
            <div class="page-header">
                <h2>{$LANG.twitterlatesttweets}</h2>
            </div>
            <div id="twitterfeed">
                <p><img src="images/loading.gif" alt="loading..."></p>
            </div>
            {literal}
            <script type="text/javascript">
                jQuery(document).ready(function(){jQuery.post("announcements.php",{action:"twitterfeed",numtweets:3},function(data){jQuery("#twitterfeed").html(data);});});
            </script>
            {/literal}
            {elseif $announcements}
            <h2>{$LANG.latestannouncements}</h2>
                {foreach from=$announcements item=announcement}
            <p>{$announcement.date} - <a href="{if $seofriendlyurls}announcements/{$announcement.id}/{$announcement.urlfriendlytitle}.html{else}announcements.php?id={$announcement.id}{/if}"><b>{$announcement.title}</b></a><br>{$announcement.text|strip_tags|truncate:100:"..."}</p>
                {/foreach}
            {/if} -->
       </div>
</section>
