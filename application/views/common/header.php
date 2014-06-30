<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="fashion show, edinburgh charity fashion show, edinburgh university, charity fashion show,
    ecfs, ecfs 2014, ecfs 2015, uni fashion show, students, universities, fashion" />
    <link rel="stylesheet" type="text/css" href="/assets/css/site.css?v=2">
    <script type="text/javascript" src="//use.typekit.net/lwo8cgl.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
    <script src="//maps.google.com/maps/api/js?libraries=geometry,places&sensor=false" type="text/javascript"></script>
    <meta name="copyright" content="Copyright Maccery.com 2014">
    <meta name="author" content="Maccery.com">
    <meta name="email" content="t.macmichael@edinburghcharityfashionshow.org">
    <meta name="Rating" content="General">
    <meta name="Revisit-after" content="1 Days">
    <meta name="ROBOTS" content="INDEX, FOLLOW">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:image" content="/assets/img/ecfs-fb.png">
    <meta property="og:title" content="<?= $title ?>">
    <meta property="og:description" content="<?= $description ?>">
    <link rel='shortcut icon' type='image/x-icon' href="/assets/img/favicon.ico">
    <meta name="description" content="<?= $description ?>" />

    <title><?= $title ?></title>
</head>
<body>
<?php
    $this->load->library('mobile_detect');
    $detect = new Mobile_Detect();
    if (!($detect->isMobile() || $detect->isTablet())):
?>
    <video autoplay loop poster="/assets/video/background.jpg" id="background" muted="true">
        <source src="/assets/video/background.mp4" type="video/mp4">
        <source src="/assets/video/background.webm" type="video/webm">
    </video>
<? endif ?>
    <div class="container">
        <div class="row text-center">
            <p><img  width="190" src="/assets/img/ecfs-logo.png"></p>
            <h1>ECFS 2015</h1>
            <h2>It's coming.</h2>
            <small>Enquires to <a href="mailto:info@edinburghcharityfashionshow.org">info@edinburghcharityfashionshow.org</a></small>
        </div>
    </div>
