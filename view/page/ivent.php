<section class="page">


    <div class="event">
        <div class="event__header">
            <h2 class="event__header__title"><?=$data->get('title');?></h2>
            <span class="event__header__users">
                <i class="i-user"></i>
                0
            </span>
        </div>

        <div class="event__col-1">
            <img class="event__pic" src="<?=$data->get('photo');    ?>" alt="event-img"/>

            <a class="btn btn--green event__btn_add" href=""></a>

            <div class="event__descr">
                <div class="event__descr__title">Опис</div>
                <div class="event__descr__text">
                    <?=$data->get('about');?>
                </div>
            </div>

            <div class="page__events__item__info__filter">
                <div class="page__events__item__info__filter__title">
                    Необхідні навички
                </div>
                <div class="page__events__item__info__filter__item"></div>
                <div class="page__events__item__info__filter__item"></div>
                <div class="page__events__item__info__filter__item"></div>
                <div class="page__events__item__info__filter__item"></div>
            </div>
        </div>


        <div class="event__col-2">

            <div class="event__geo">
                <div id="map" class="event__geo__map"></div>
                <div class="btn btn--blue btn--full event__geo__btn js-location"
                     data-lat="<?=$event->location->getLatitude()?>"
                     data-lon="<?=$event->location->getLongitude()?>">
                    <i class="i-location"></i>
                    <span class="js-location-text"></span>
                </div>
            </div>

            <div class="event__date">
                <time class="event__date__title"><?=$data->date;?></time>
                <i class="i-calendar event__date__calendar"></i>

                <div class="event__date__info">
                    <p>
                        <span class="c-blue">з:</span> <?=$data->time_s;?>
                    </p>

                    <p>
                        <span class="c-blue">до:</span> <?=$data->time_f;?>
                    </p>
                </div>
            </div>

            <div class="event__contact">
                <div class="event__contact__title">Контакти</div>
                <img class="event__contact__img" src="<?=$user->get('photo');?>" alt="user-img"/>
                <div class="event__contact__info">
                    <p>
                        <i class="i-tel-blue"></i>
                        <?php if ($user->get('phone')) echo $user->get('phone'); ?>
                    </p>

                    <p>
                        <i class="i-fb-blue"></i>
                        <?php if ($user->get('website')) echo $user->get('sebsite') ?>
                    </p>

                    <p>
                        <?php if ($user->get('email')) echo $user->get('email');?>
                    </p>
                </div>
                <a class="event__contact__link-avtor" href="">
                    <?php if ($user->get('firstName')) echo $user->get('firstName'); else echo $user->get('name');?>
                </a>
            </div>
        </div>


        <div class="profile__comment">
            <h6 class="profile__comment__title">Відгуки про мене</h6>
            <ul class="profile__comment__list">
                <?php foreach ($comments as $key => $comment) { ?>
                <li class="profile__comment__list__item">
                    <img class="profile__comment__list__item__avatar"
                         src="<?=$commentsUser[$comment->get(" authorID")->getObjectId()]->get("photo");?>"
                    alt="avatar-user"/>
                    <div class="profile__comment__list__item__info">
                        <p class="profile__comment__list__item__name">
                            <?=$commentsUser[$comment->get("authorID")->getObjectId()]->get("firstName")."
                            ".$commentsUser[$comment->get("authorID")->getObjectId()]->get("lastName");?>
                        </p>
                        <time class="profile__comment__list__item__date"><?=$comment->date;?></time>
                        <p class="profile__comment__list__item__text"><?=$comment->get('text')?></p>
                    </div>
                </li>
                <?php } ?>
            </ul>

        </div>


    </div>


</section>
