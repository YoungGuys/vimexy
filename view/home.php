
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

        <div class="site">
            <h1 class="site__name">
                Vimexy
            </h1>
            <h3 class="site__slogo">Вирішуємо великі та маленькі проблеми!</h3>
            <h6 class="site__descrt">
                VIMEXY  -  волонтерська  соціальна  мережа,
                яка об`єднує добрих людей та добрі справи.
            </h6>
            <a class="btn btn--blue btn--big" href="#">Долучитись</a>
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