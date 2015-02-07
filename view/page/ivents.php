<section class="page">


    <form class="page__filter">
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
            <select class="page__filter__item__select" name="">
                <option selected disabled>Організація</option>
                <option value="1">1</option>
            </select>
        </div>
        <div class="page__filter__item">
            <select class="page__filter__item__select" name="">
                <option selected disabled>15</option>
                <option value="1">1</option>
            </select>
        </div>

        <div class="page__filter__item page__filter__item--search">
            <input type="search" name="Пошук"/>
        </div>
    </form>


    <div class="page__events">

        <?php foreach ($data as $key => $event) { ?>
            <div class="page__events__item">
                <div class="page__events__item__pic">
                    <img class="page__events__item__pic__img" src="<?=$event->get('photo');?>" alt="event-img"/>
                </div>
                <div class="page__events__item__info">
                    <h4 class="page__events__item__info__title"><?=$event->get('title');?></h4>
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
                    <time class="page__events__item__meta__date">4 лютого 2015 р. - 6 лютого 2015 р.</time>
                    <p class="page__events__item__meta__adress">
                        <i class="i-location-mini"></i>
                        Київ, вул. Мілютенко 38
                    </p>
                    <p class="page__events__item__meta__user">
                        <i class="i-user-mini"></i>
                        12
                    </p>
                    <a class="btn page__events__item__meta__btn" href="#">Хочу допомогти</a>
                </div>
            </div>
        <?php } ?>

    </div>


</section>
