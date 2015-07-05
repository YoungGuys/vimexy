<section class="page">


    <form class="page__filter"></form>



    <article class="page__my_events">

        <?php foreach ($data as $key => $event) { ?>
            <a href="<?=SITE?>Events/show?id=<?=$event->getObjectId();?>"
               class="page__my_events__item">
                <img class="page__my_events__item__img"
                     src="<?=$event->get('photo');?>" alt="event-photo"/>
                <p class="page__my_events__item__title">
                    <?=$event->get('title');?>
                </p>
            </a>
        <?php } ?>

    </article>

</section>
