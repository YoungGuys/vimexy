
<section class="register__bg">

    <!-- SECTION HEADER -->

    <section class="register__header">
        <header>
            <div class="header__login">





                <!-- Form itself -->

                <form class="header__login" action="<?=SITE?>User/checkUser" method="get"">

                    <a href="" class="header__landing-link">Більше про нас</a>

                    <!-- Link to landing page -->

                    <input class="header__login__email" type="email" placeholder="  e-mail" name="email"/>

                    <input class="header__login__password" type="password" placeholder="  пароль" name="pass"/>

                    <input type="submit"  class="header__login__submit" value="Увійти"/>

                </form>
            </div>
        </header>
    </section>




    <!-- SECTION REGISTRATION -->

    <section class="registration">

        <div class="registration__box">

            <!-- BOX HEAD -->

            <h3 class="registration__title">Реєстрація</h3>

            <!-- REGISTRATION FORM -->

            <form class="registration__form" action ="<?=SITE?>User/addUser" method="get">
                <div class="registration__form--left">
                    <p class="registration__item">

                        <label for="name">Ім'я</label>

                        <input class="registration__input" name="name" id="name" type="text" placeholder="Тарас">
                    </p>

                    <p class="registration__item">
                        <label for="password">Пароль</label>

                        <input type="password" class="registration__input" name="password" id="password"
                               placeholder="бажано 8 символів"/>
                    </p>

                    <!-- DATE MONTH YEAR

                    identify class???
                    -->

                    <p class="registration__item">
                        <label for="email">e-mail</label>

                        <input type="email" class="registration__input" name="email" id="email"
                                placeholder="t.shevch@vimexy.com"/>
                    </p>

                    <p class="registration__item">
                        <label>Дата народження</label>

                        <select name="day" class="registration__input--select">
                            <option value="8">8</option>
                        </select>

                        <select name="month" class="registration__input--select">
                            <option value="02">02</option>
                        </select>

                        <select name="year" class="registration__input--select">
                            <option value="1994">1994</option>
                        </select>
                    </p>

                </div>

                <div class="registration__form--right">
                    <p class="registration__item">
                        <label for="lastname">Прізвище</label>

                        <input type="text" class="registration__input" name="lastname" id="lastname" placeholder="Шевченко"/>
                    </p>

                    <p class="registration__item">
                        <label for="confirm">Перевірка паролю</label>

                        <input type="password" class="registration__input" name="confirm" id="confirm" placeholder="бажано 8 символів"/>
                    </p>

                    <p class="registration__item">
                        <label for="city">Місто</label>

                        <input type="text" class="registration__input" name="city" id="city" placeholder="Київ"/>
                    </p>

                    <p class="registration__item">
                        <label>Стать</label>

                        <input type="radio" name="sex" id="man" value="man"/>
                        <label for="man" class="labelsex">Чоловіча</label>
                        <input type="radio" name="sex" id="woman" value="girl"/>
                        <label for="woman" class="labelsex">Жіноча</label>
                    </p>
                </div>

                <!-- BOX BOTTOM -->

                <div class="registration__bottom">
                    <?php if (!empty($_GET['error'])) {?>
                        <div class="password__incorrect password__incorrec--active"><p>Паролі не співпадають</p></div>
                    <?php } ?>
                  <p><input type="submit" class="btn btn--blue--regist" value="Продовжити"/></p>
                  <p><input type="reset" class="btn" value="відмінити"/></p>
                </div>
            </form>
        </div>
    </section>



    <!-- BOTTOM SECTION -->


    <footer class="register__footer">
        <div class="row">
            <span>&copy;Vimexy 2015</span>
            <a href=""><i class="i-fb-white"></i></a>
            <a href=""><i class="i-vk-white"></i></a>
        </div>
    </footer>

</section>