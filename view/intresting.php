
<section class="register__bg">

    <!-- SECTION HEADER -->

    <section class="register__header">
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
    </section>




    <!-- SECTION REGISTRATION -->

    <section class="registration">

        <div class="registration__box">

            <!-- BOX HEAD -->

            <h3 class="registration__title">Мої інтереси</h3>

            <!-- REGISTRATION FORM -->

            <form class="registration__form" action ="<?=SITE?>User/addUser" method="get">

                <div class="skills">

                    <div class="skills__item">
                        <input type="checkbox" name="ambulance" id="ambulance"/>
                        <label class="skills__item__label" for="ambulance">
                            <img src="/lib/pic/interesting/ambulance.png" alt="skills-image"/>
                        </label>
                    </div>

                    <div class="skills__item">
                        <input type="checkbox" name="art" id="art"/>
                        <label class="skills__item__label" for="art">
                            <img src="/lib/pic/interesting/art.png" alt="skills-image"/>
                        </label>
                    </div>

                    <div class="skills__item">
                        <input type="checkbox" name="animal" id="animal"/>
                        <label class="skills__item__label" for="animal">
                            <img src="/lib/pic/interesting/animal.png" alt="skills-image"/>
                        </label>
                    </div>

                    <div class="skills__item">
                        <input type="checkbox" name="comunication" id="comunication"/>
                        <label class="skills__item__label" for="comunication">
                            <img src="/lib/pic/interesting/comunication.png" alt="skills-image"/>
                        </label>
                    </div>

                    <div class="skills__item">
                        <input type="checkbox" name="cook" id="cook"/>
                        <label class="skills__item__label" for="cook">
                            <img src="/lib/pic/interesting/cook.png" alt="skills-image"/>
                        </label>
                    </div>

                    <div class="skills__item">
                        <input type="checkbox" name="social" id="social"/>
                        <label class="skills__item__label" for="social">
                            <img src="/lib/pic/interesting/social.png" alt="skills-image"/>
                        </label>
                    </div>

                    <div class="skills__item">
                        <input type="checkbox" name="education" id="education"/>
                        <label class="skills__item__label" for="education">
                            <img src="/lib/pic/interesting/education.png" alt="skills-image"/>
                        </label>
                    </div>

                    <div class="skills__item">
                        <input type="checkbox" name="fix" id="fix"/>
                        <label class="skills__item__label" for="fix">
                            <img src="/lib/pic/interesting/fix.png" alt="skills-image"/>
                        </label>
                    </div>

                    <div class="skills__item">
                        <input type="checkbox" name="it" id="it"/>
                        <label class="skills__item__label" for="it">
                            <img src="/lib/pic/interesting/it.png" alt="skills-image"/>
                        </label>
                    </div>


                </div>

                <div class="registration__bottom">
                  <p><input type="submit" class="btn btn--blue--regist" value="Продовжити"/></p>
                  <p><input type="reset" class="btn" value="відмінити"/></p>
                </div>
            </form>
        </div>
    </section>



    <!-- BOTTOM SECTION -->

    <section class="register__footer">
        <div class="footer__items">
            <span>&copy;Vimexy 2015</span>
            <a href=""><i class="i-fb-white"/></a>
            <a href=""><i class="i-vk-white"/></a>
        </div>
    </section>

</section>