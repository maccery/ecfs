<div class="row" id="team-photos">
    <div class="col-sm-6"><img src="/assets/img/team/futong.jpg" class="img-responsive"></div>
    <div class="col-sm-6"><img src="/assets/img/team/louisa.jpg" class="img-responsive"></div>
</div>
<div class="row" id="team-photos">
    <? foreach($team as $name): ?>
    <div class="col-sm-6"><img src="/assets/img/team/<?= $name ?>.jpg" class="img-responsive"></div>
    <? endforeach ?>
</div>