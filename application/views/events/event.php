<div class="row">
    <h2><a target="_blank" href="http://facebook.com/events/<?= $id?>"><?= $name ?><?= ($location) ? ' at ' . $location : '' ?></a></h2>
    <p><small><?= $start_time ?> <? ($end_time) ? $end_time : ''?></small></p>
    <p><?= $description ?></p>
</div>