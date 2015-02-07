
<section class="register__bg">

    <!-- SECTION HEADER -->

    <section class="header">
        <header>
            <div class="header__login">

                <!-- Link to landing page -->

                <a href="" class="header__landing-link"><p>Більше про нас</p></a>

                <!-- Form itself -->

                <form class="header__login">

                    <input class="header__login__email" type="email" placeholder="e-mail"/>

                    <input class="header__login__password" type="password" placeholder="пароль"/>

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

            <form class="registration__form">
                <p class="registration__item">

                    <label for="name">Ім'я</label>

                    <input class="registration__input" name="name" type="text" placeholder="Тарас">
                </p>

                <p class="registration__item">
                    <label for="password">Прізвище</label>

                    <input type="password" class="registation__input" name="password" placeholder="бажано 8 символів"/>
                </p>

                <!-- DATE MONTH YEAR

                identify class???
                -->

                <p class="registration__item">
                    <label for="email">e-mail</label>

                    <input type="email" class="registration__input" name="email"/>
                </p>

                <p class="registration__item">
                    <label>Дата народження</label>

                    <select name="day">
                        <option value="8">8</option>
                    </select>

                    <select name="month">
                        <option value="лютий">лютий</option>
                    </select>

                    <select name="year">
                        <option value="1994">1994</option>
                    </select>
                </p>

                <p class="registration__item">
                    <label for="city">Місто</label>

                    <input type="text" class="registration__input" name="city" placeholder="Моринці"/>
                </p>

                <p class="registration__item">
                    <label for="lastname">Прізвище</label>

                    <input type="text" class="registration__input"/>
                </p>

                <p class="registration__item">
                    <label for="confirm">Прізвище</label>

                    <input type="password" class="registation__input" name="confirm" placeholder="бажано 8 символів"/>
                </p>

                <p class="registration_item">
                    <label>Стать</label>

                    <input type="radio" name="sex" value="Чоловіча"/>
                    <input type="radio" name="sex" value="Жіноча"/>
                </p>

                <!-- BOX BOTTOM -->

                <div class="registration__bottom">
                  <input type="submit" class="btn btn--blue" >
                  <input type="reset" class="btn"
                </div>

            </form>
        </div>
    </section>



    <!-- BOTTOM SECTION -->

    <section class="footer">
        <div class="footer__items">
            <p>&copy;Vimexy 2015</p>
            <a href=""><i class="i-fb"/></a>
            <a href=""><i class="i-vk"/></a>
        </div>
    </section>

</section>