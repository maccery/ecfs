<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="fashion show, edinburgh charity fashion show, edinburgh university, charity fashion show,
    ecfs, ecfs 2014, ecfs 2015, uni fashion show, students, universities, fashion"/>
    <link rel="stylesheet" type="text/css" href="/assets/css/site.css?v=2">
    <meta name="copyright" content="Copyright Maccery.com 2014">
    <meta name="author" content="Maccery.com">
    <meta name="email" content="t.macmichael@edinburghcharityfashionshow.org">
    <meta name="Rating" content="General">
    <meta name="Revisit-after" content="1 Days">
    <meta name="ROBOTS" content="INDEX, FOLLOW">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:image" content="/assets/img/ecfs-fb.jpg">
    <meta property="og:title" content="<?= $title ?>">
    <meta property="og:description" content="<?= $description ?>">
    <script src="//use.typekit.net/xic2vkh.js"></script>
    <script>try{Typekit.load();}catch(e){}</script>
    <script src="//maps.google.com/maps/api/js?libraries=geometry,places&sensor=false" type="text/javascript"></script>
    <script type="text/javascript" src="/assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="/assets/js/site.js"></script>
    <link rel='shortcut icon' type='image/x-icon' href="/assets/img/favicon.ico">
    <meta name="description" content="<?= $description ?>"/>
    <title><?= $title ?></title>
</head>
<body>
<?php
    $this->load->library('mobile_detect');
    $detect = new Mobile_Detect();
    if (!($detect->isMobile() || $detect->isTablet())):
        ?>
        <video loop poster="/assets/video/background.jpg" id="background" muted="true">
            <source src="/assets/video/background.mp4" type="video/mp4">
            <source src="/assets/video/background.webm" type="video/webm">
        </video>
    <? endif ?>
<div class="container">
    <div id="info" class="text-center info" style="display: none;">
        <h3>ECFS is coming.</h3>

        <p>In a world where a selfie says more than a sentence and creativity is no more than a few clicks away, ECFS
            has decided that it’s time to go somewhere new. Our vision is based on the brave, the beautiful and the
            bold: a sense of escapism, second-star-to-the-right style, recalling childlike dreams and evoking your
            favourite old fantasy.</p>
        <p>The Edinburgh Charity Fashion Show is in motion once again. We bring you the most successful student run
            charity fashion show for its seventeenth year so join us in our campaign for the 2015 show. We are really
            excited to be working with the new team and are in the process of finalising our charities. We are dotted
            around the world this summer so expect a more international twist from the blog in September and look out
            for ECFS around campus during Freshers Week. </p>
        <p>For any queries, please get in touch with us at
            <a href="mailto:hello@edinburghcharityfashionshow.org">hello@edinburghcharityfashionshow.org</a>
            ECFS is coming. It’s nearly time to escape.</p>

        <p>Louisa and Georgie x</P>
    </div>
    <div id="splash" class="row text-center">
        <p><img width="190" src="/assets/img/ecfs-logo.png"></p>

        <h1 style="font-family: 'jaf-bernino-sans-condensed';">ECFS 2015</h1>

        <h2>It's coming.</h2>
        <small><a href="#" id="more-info">More information</a></small>
    </div>
</div>
