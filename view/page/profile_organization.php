<section class="page">

    <div class="event__header">
        <h2 class="event__header__title">Хакатон ВПО</h2>
            <span class="event__header__users">
                <i class="i-user"> </i> 4690
            </span>
    </div>

    <article class="event__col-1">

        <div class="event_info">
            <p class="c-blue">
                Дитячий фонд ООН (ЮНІСЕФ)
                <br/>
                Київ, з 1997 року
            </p>
            <p>
                Сайт: <span class="c-blue">www.unicef.org.ukraine.ukr</span>
            </p>
        </div>

        <div class="event__descr">
            <div class="event__descr__title">Опис</div>
            <div class="event__descr__text">
                Національний хакатон допомоги переселенцям із Донбасу

                До участі приймаються IT-рішення, що мають на меті допомогти постраждалим у зоні АТО
            </div>
        </div>

        <ul class="profile__info profile__info--margin">
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

        <div class="profile__gallery sum-up">
            <h5 class="profile__title">Оцінити</h5>
            <ul class="circle__list js-sum_up" data-num="8">
                <li class="circle"> </li>
                <li class="circle"> </li>
                <li class="circle"> </li>
                <li class="circle"> </li>
                <li class="circle"> </li>
                <li class="circle"> </li>
                <li class="circle"> </li>
                <li class="circle"> </li>
                <li class="circle"> </li>
                <li class="circle"> </li>
            </ul>
        </div>

        <div class="profile__comment">
            <h6 class="profile__comment__title">Відгуки</h6>

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

            <a class="btn btn--blue" href="#">Написати</a>

        </div>

    </article>

    <div class="event__col-2">

        <img class="organization-avatar" src="http://i.kinja-img.com/gawker-media/image/upload/flhfczsxt5metxltus25.jpg" alt=""/>

        <nav class="clearfix">
            <button class="btn btn--two btn--blue">Повідомлення</button>
            <button class="btn btn--two btn--yellow">Вступити</button>
        </nav>

        <nav class="history history--top">
            <h4 class="history__title">Історія активностей</h4>

            <ul class="history__list">
                <li class="history__list__item is-active">
                    <a href="#">
                        <time class="history__list__item__date">07.02.15</time>
                        <p class="history__list__item__title">«Помощь малоимущим детям», Фонд Виктора Пинчука</p>
                    </a>
                </li>
                <li class="history__list__item is-active">
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


            <h5 class="profile__title">Новини</h5>
            <ul class="news">
                <li class="news__item">
                    Діти знаходяться під загрозою через поновлення насильства на сході України
                    <a href="#" class="news__item__link">Читати</a>
                </li>
                <li class="news__item">
                    Діти знаходяться під загрозою через поновлення насильства на сході України
                    <a href="#" class="news__item__link">Читати</a>
                </li>
            </ul>


        </nav>

    </div>

</section>