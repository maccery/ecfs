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
<div id="splash" class="row text-center vertical-center">
    <p><a href="/home"><img width="400" border="0" src="/assets/img/ecfs-logo.png"></a></p>
</div>

<div id="coverflow">
    <!-- these children will be part of the coverflow -->
    <div class="something_fancy"></div>
    <img src=".." />
    <picture><source .. /></picture>
</div>

<!-- put this in your html header -->
<link rel="stylesheet" type="text/css" href="coverflow.css" />
<script src="jquery.min.js"></script>

<!-- include coverflow after all dependencies-->
<script src="coverflow.min.js"></script>
<script>
    $(function() {
        // and kick off
        $('#coverflow').coverflow();
    });
</script>