<section class="page">


    <form class="page__filter" action="<?=SITE?>Events" method="get">
        <div class="page__filter__item">
            <select class="page__filter__item__select" name="">
                <option selected disabled>Місто</option>
                <option value="1">1</option>
            </select>
        </div>
        <div class="page__filter__item">
            <select class="page__filter__item__select" name="">
                <option selected disabled>Місяць</option>
                <option value="1">1</option>
            </select>
        </div>
        <div class="page__filter__item">
            <select class="page__filter__item__select" name="organizer">
                <?php foreach ($organizationList as $key => $org) { ?>
                    <option value="<?=$org->getObjectId();?>"><?=$org->get("name");?></option>
                <?php } ?>
            </select>
        </div>
        <div class="page__filter__item">
            <select class="page__filter__item__select" name="">
                <option selected disabled>15</option>
                <option value="1">1</option>
            </select>
        </div>

        <div class="page__filter__item page__filter__item--search">
            <input class="btn btn--blue btn-search" value="Пошук" type="submit"/>
        </div>
    </form>


    <div class="page__events">

        <?php foreach ($data as $key => $event) { ?>
            <div class="page__events__item">
                <div class="page__events__item__pic">
                    <img class="page__events__item__pic__img" src="<?=$event->get('photo');?>" alt="event-img"/>
                </div>
                <div class="page__events__item__info">
                    <h4 class="page__events__item__info__title">
                        <a href="<?=SITE?>Events/show?id=<?=$event->getObjectId();?>">
                            <?=$event->get('title');?>
                        </a>
                    </h4>
                    <p class="page__events__item__info__text"><?=$event->get('about');?></p>
                    <div class="page__events__item__info__filter">
                        <div class="page__events__item__info__filter__item"></div>
                        <div class="page__events__item__info__filter__item"></div>
                        <div class="page__events__item__info__filter__item"></div>
                        <div class="page__events__item__info__filter__item"></div>
                    </div>
                    <p class="page__events__item__info__organizator">
                        Організатор:
                        <a class="page__events__item__info__organizator__link" href="<?=SITE?>User/show?id=<?=$event->idAuthor;?>">
                            <?=$event->nameAuthor?>
                        </a>
                    </p>
                </div>
                <div class="page__events__item__meta">
                    <time class="page__events__item__meta__date">
                        <?=$event->date ?> <?php if ($event->finishDate) echo "- ".$event->finishDate; ?>
                        <?=$event->time?>
                    </time>
                    <p class="page__events__item__meta__adress js-location" data-lat="<?=$event->location->getLatitude()?>"
                        data-lon="<?=$event->location->getLongitude()?>">
                        <i class="i-location"></i>
                        <span class="js-location-text"></span>
                    </p>
                    <p class="page__events__item__meta__user">
                        <i class="i-user"></i>
                        12
                    </p>
                    <?php if (!$balon) { ?>
                        <a class="btn btn--blue btn--full page__events__item__meta__btn"
                           href="<?=SITE."Events/addToMyList?id=".$event->getObjectId();?>">Хочу допомогти</a>
                    <?php } else {?>
                        <a class="btn btn--blue btn--full page__events__item__meta__btn"
                           href="<?=SITE."Events/deleteFromMyList?id=".$event->getObjectId();?>">Відлучитись</a>
                    <?php } ?>
                </div>
            </div>
        <?php } ?>

    </div>


</section>
