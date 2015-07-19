<section class="page">


    <div class="profile">
        <h2 class="profile__title"><?=$data['firstName']?> <?=$data['lastName']?></h2>


        <div class="profile__col-1">

            <div class="profile__user">
                <img class="profile__avatar" src="<?=$data['photo']?>" alt="avatar-img"/>
                <button class="btn btn--full btn--blue">В проекті</button>
                <p class="profile__user__adress">
                    <i class="i-user"></i>
                    <?=$data['city']?> / <?=$data['birthday']?>
                </p>

                <div class="profile__user__tel">
                    <i class="i-tel-blue "></i>
                    <!--<p class="profile__user__tel__item"><?/*=$data['phone']*/?></p>-->
                </div>
            </div>

            <nav class="history">
                <h4 class="history__title">Історія активностей</h4>
                <ul class="history__list">
                    <li class="history__list__item">
                        <a href="#">
                            <time class="history__list__item__date">07.02.15</time>
                            <p class="history__list__item__title">«Помощь малоимущим детям», Фонд Виктора Пинчука</p>
                        </a>
                    </li>
                    <li class="history__list__item">
                        <a href="#">
                            <time class="history__list__item__date">07.02.15</time>
                            <p class="history__list__item__title">«Сохраним городской зоопарк»</p>
                        </a>
                    </li>
                    <li class="history__list__item">
                        <a href="#">
                            <time class="history__list__item__date">07.02.15</time>
                            <p class="history__list__item__title">Сбор средств для помощи АТО</p>
                        </a>
                    </li>
                    <li class="history__list__item">
                        <a href="#">
                            <time class="history__list__item__date">07.02.15</time>
                            <p class="history__list__item__title">TEDx Kyiv волонтёр</p>
                        </a>
                    </li>
                    <li class="history__list__item">
                        <a href="#">
                            <time class="history__list__item__date">07.02.15</time>
                            <p class="history__list__item__title">Помощь по дому</p>
                        </a>
                    </li>
                    <li class="history__list__item">
                        <a href="#">
                            <time class="history__list__item__date">07.02.15</time>
                            <p class="history__list__item__title">Помощь по дому</p>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>


        <div class="profile__col-2">

            <div class="profile__info">
                <ul class="profile__info">
                    <li class="profile__info__item">
                        <p class="profile__info__item__title">Рейтинг</p>
                        <i data-num="56" class="rating js-rating"><span></span></i>
                    </li>
                    <li class="profile__info__item">
                        <p class="profile__info__item__title">Соціально активних годин:</p>
                        <span class="profile__info__item__num">248</span>
                    </li>
                    <li class="profile__info__item">
                        <p class="profile__info__item__title">Кількість годин:</p>
                        <span class="profile__info__item__num">9</span>
                    </li>
                </ul>
            </div>

            <div class="profile__gallery">
                <h5 class="profile__title">Галерея проектів</h5>
                <ul class="profile__gallery__list">
                    <?php foreach ($events as $key => $event) { ?>
                        <li class="profile__gallery__list__item">
                            <a href="<?=SITE?>Events/show?id=<?=$event->getObjectId();?>">
                                <img src="<?=$event->get('photo');?>" alt=""/>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>

            <div class="profile__filters">

                <div class="profile__filters__skill">
                    <h6 class="profile__title">Інтереси</h6>
                    <div class="profile__filters__skill__item"></div>
                    <div class="profile__filters__skill__item"></div>
                    <div class="profile__filters__skill__item"></div>
                    <div class="profile__filters__skill__item"></div>
                    <div class="profile__filters__skill__item"></div>
                    <div class="profile__filters__skill__item"></div>
                    <div class="profile__filters__skill__item"></div>
                    <div class="profile__filters__skill__item"></div>
                </div>

                <div class="profile__filters__skill">
                    <h6 class="profile__title">Навички</h6>
                    <div class="profile__filters__skill__item"></div>
                    <div class="profile__filters__skill__item"></div>
                    <div class="profile__filters__skill__item"></div>
                    <div class="profile__filters__skill__item"></div>
                    <div class="profile__filters__skill__item"></div>
                    <div class="profile__filters__skill__item"></div>
                    <div class="profile__filters__skill__item"></div>
                    <div class="profile__filters__skill__item"></div>
                </div>

            </div>

            <!--<div class="profile__rating">-->
                <!--<h6 class="profile__rating__title">Мій рейтинг</h6>-->
                <!--<ul class="profile__rating__stars">-->
                    <!--<li class="profile__rating__stars__item"> </li>-->
                <!--</ul>-->
                <!--<div class="profile__rating__bar"></div>-->
                <!--<div class="profile__rating__bar"></div>-->
                <!--<div class="profile__rating__bar"></div>-->
            <!--</div>-->

            <div class="profile__comment">
                <h6 class="profile__comment__title">Відгуки про мене</h6>

                <ul class="profile__comment__list">
                    <li class="profile__comment__list__item">
                        <img class="profile__comment__list__item__avatar" src="" alt="avatar-user"/>
                        <div class="profile__comment__list__item__info">
                            <p class="profile__comment__list__item__name">Бред Пит</p>
                            <time class="profile__comment__list__item__date">07.02.15</time>
                            <p class="profile__comment__list__item__text">jkdfgfbfdgfdbghbgdfhj</p>
                        </div>
                    </li>
                    <li class="profile__comment__list__item">
                        <img class="profile__comment__list__item__avatar" src="" alt="avatar-user"/>
                        <div class="profile__comment__list__item__info">
                            <p class="profile__comment__list__item__name">Бред Пит</p>
                            <time class="profile__comment__list__item__date">07.02.15</time>
                            <p class="profile__comment__list__item__text">jkdfgfbfdgfdbghbgdfhj</p>
                        </div>
                    </li>
                </ul>

            </div>


        </div>

    </div>


</section>
