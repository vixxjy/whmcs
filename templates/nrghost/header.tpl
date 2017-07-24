<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="{$charset}" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{if $kbarticle.title}{$kbarticle.title} - {/if}{$pagetitle} - {$companyname}</title>

    {include file="$template/includes/head.tpl"}

    {$headoutput}

</head>
<body>

    {$headeroutput}

    <header class="header">
    <div  id="header1">
        <div class="container">
                <div class="header-left1">
                </div>
                <div class="header-right">
                       <div class="header-inline-entry">
                            <a class="link" href="#">24/7 Sales &amp; Support Call 070090009000, 08035905422, 08051897087 |</a>
                        </div>
                    {if !$loggedin}
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
                    {else}
                        <div class="header-inline-entry">
                            <a class="link" href="logout.php">Logout</a>
                        </div>
                    {/if}
                </div>
        </div>
    </div>
        <div class="container">
            <div id="logo-wrapper">
                <div class="cell-view"><a id="logo" href="index.php"><img src="templates/{$template}/images/logo.png" alt="" /></a></div>
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
                            {include file="$template/includes/navbar.tpl" navbar=$primaryNavbar}
                            {if $loggedin}
                                {include file="$template/includes/navbar.tpl" navbar=$secondaryNavbar}
                            {/if}
                        </nav>
                    </div>
            <!--         <div class="header-right">
                        {if !$loggedin}
                            <div class="header-inline-entry">
                                <a class="link" href="clientarea.php">login</a>
                            </div>
                            <div class="header-inline-entry">
                                <a class="link" href="register.php">Register</a>
                            </div>
                        {else}
                            <div class="header-inline-entry">
                                <a class="link" href="logout.php">Logout</a>
                            </div>
                        {/if}
                    </div> -->
                </div>
            </div>
        </div>
    </header>

<section id="main-body" class="containere">

    <div class="row">
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
