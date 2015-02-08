
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
                        <input type="checkbox" name="doctor" id="doctor"/>
                        <label class="skills__item__label" for="doctor">
                            <img src="/lib/pic/skills/doctor.png" alt="skills-image"/>
                        </label>
                    </div>

                    <div class="skills__item">
                        <input type="checkbox" name="environment" id="environment"/>
                        <label class="skills__item__label" for="environment">
                            <img src="/lib/pic/skills/environment.png" alt="skills-image"/>
                        </label>
                    </div>

                    <div class="skills__item">
                        <input type="checkbox" name="animal" id="animal"/>
                        <label class="skills__item__label" for="animal">
                            <img src="/lib/pic/skills/animal.png" alt="skills-image"/>
                        </label>
                    </div>

                    <div class="skills__item">
                        <input type="checkbox" name="help" id="help"/>
                        <label class="skills__item__label" for="help">
                            <img src="/lib/pic/skills/help.png" alt="skills-image"/>
                        </label>
                    </div>

                    <div class="skills__item">
                        <input type="checkbox" name="home" id="home"/>
                        <label class="skills__item__label" for="home">
                            <img src="/lib/pic/skills/home.png" alt="skills-image"/>
                        </label>
                    </div>

                    <div class="skills__item">
                        <input type="checkbox" name="social" id="social"/>
                        <label class="skills__item__label" for="social">
                            <img src="/lib/pic/skills/social.png" alt="skills-image"/>
                        </label>
                    </div>

                    <div class="skills__item">
                        <input type="checkbox" name="education" id="education"/>
                        <label class="skills__item__label" for="education">
                            <img src="/lib/pic/skills/education.png" alt="skills-image"/>
                        </label>
                    </div>

                    <div class="skills__item">
                        <input type="checkbox" name="comunication" id="comunication"/>
                        <label class="skills__item__label" for="comunication">
                            <img src="/lib/pic/skills/comunication.png" alt="skills-image"/>
                        </label>
                    </div>

                    <div class="skills__item">
                        <input type="checkbox" name="children" id="children"/>
                        <label class="skills__item__label" for="children">
                            <img src="/lib/pic/skills/children.png" alt="skills-image"/>
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


    <footer class="register__footer">
        <div class="row">
            <span>&copy;Vimexy 2015</span>
            <a href=""><i class="i-fb-white"></i></a>
            <a href=""><i class="i-vk-white"></i></a>
        </div>
    </footer>

</section>