<section class="page">


    <form class="page__filter"></form>



    <div class="page__my_events">

        <script>
            <?php foreach ($data as $key => $event) { if ($event->location) { ?>
            /*href = <?=SITE?>Events/show?id=<?=$event->getObjectId();?>*/
            /*title = <?=$event->get('title');?>*/
            /*photo = <?=$event->get('photo');?>*/
            /*description = <?=$event->get('about');?>*/
            /*date time = <?=$event->date ?> <?php if ($event->finishDate) echo "- ".$event->finishDate; ?>
                        <?=$event->time?>*/
                gMap(<?=$event->location->getLatitude()?>, <?=$event->location->getLongitude()?>);
            <?php } } ?>
        </script>

        <div id="map" class="g-maps"></div>

    </div>

</section>
