<div class="spacer">
</div>
<div class="row">
    <p>ECFS committee is made up of 70 students in Edinburgh. The committee is split into 10 teams and below are the
        area heads. For more information on how to be involved in ECFS in years to come, please email
        hello@edinburghcharityfashionshow.org</p>
</div>
<div class="row" id="team-photos">
    <div class="col-sm-6"><img src="/assets/img/team/futong.jpg" class="img-responsive"></div>
    <div class="col-sm-6"><img src="/assets/img/team/louisa.jpg" class="img-responsive"></div>
</div>
<hr>
<div class="row" id="team-photos">
    <? foreach ($team as $name): ?>
        <div class="col-sm-6"><img src="/assets/img/team/<?= $name ?>.jpg" class="img-responsive"></div>
    <? endforeach ?>
</div>