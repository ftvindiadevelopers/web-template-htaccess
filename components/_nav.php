<?php include_once "_link.php"?>
<header class="custom__header">
    <nav class="navbar navbar-dark navbar-expand-xl">
        <a class="navbar-brand d-xl-none" href="/" title="">
            <img src="assets/img/logo.svg" alt="FTV Apparels" class="img-fluid headerLogo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"><span class="d-none">Menu</span></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto mr-auto">
                <!-- Link(href, text, title, data-hover) -->
                <?php new Link("/", "Home", "Home", "Home");?>
                <?php new Link("/michel-adam", "Michel&nbsp;Adam", "Michel Adam", "Michel&nbsp;Adam");?>
                <?php new Link("/kashiff-khan", "Kashiff&nbsp;Khan", "Kashiff Khan", "Kashiff&nbsp;Khan");?>
                <?php new Link("/fashiontv", "FashionTV", "FashionTV", "FashionTV");?>
                <?php new Link("/channels", "Channels", "Channels", "Channels");?>
                <?php new Link("/ftv-product", "FTV&nbsp;Product", "FTV Product", "FTV&nbsp;Product");?>
                <?php new Link("/ftv-product", "Features", "Features", "Features");?>
                <?php new Link("/license", "License", "License", "License");?>
            </ul>
        </div>
    </nav>
</header>