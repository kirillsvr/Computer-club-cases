<div id="main-wrapper">
<!-- Header
============================ -->
<header id="header" class="sticky-top">
    <!-- Navbar -->
    <nav class="primary-menu navbar navbar-expand-lg navbar-text-light border-bottom-0">
        <div class="container-fluid position-relative h-100 flex-lg-column pl-3 px-lg-3 pt-lg-3 pb-lg-2">

            <!-- Logo -->
            <a href="/" class="mb-lg-auto mt-lg-4 logo">
                <!--			<span class="bg-dark-2 rounded-pill p-2 mb-lg-1 d-none d-lg-inline-block">-->
                <img class="img-fluid rounded-pill d-block" src="images/logo.png" title="Checkpoint" alt="">
                <!--			</span>-->
            </a>
            <!-- Logo End -->

            <div id="header-nav" class="collapse navbar-collapse w-100 my-lg-auto">
                <ul class="navbar-nav text-lg-left my-lg-auto py-lg-3">
                    <li class="nav-item">
                        <a class="nav-link smooth-scroll active" href="#double"><span>01</span>Удвоение при первом пополнении</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link smooth-scroll active" href="#twohours"><span>02</span>2 часа при первом посещении</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link smooth-scroll active" href="#taxi"><span>03</span>Такси</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link smooth-scroll active" href="#card"><span>04</span>6-ое посещение</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link smooth-scroll active" href="#friends"><span>05</span>С друзьями веселее</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link smooth-scroll active" href="#birthday"><span>06</span>30% на день рождения</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link smooth-scroll active" href="#tech"><span>07</span>Технические неполадки <br>или обновление</a>
                    </li>
                </ul>
            </div>
            <a class="nav-link reset" href="#">Выход</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#header-nav"><span></span><span></span><span></span></button>
        </div>
    </nav>
    <!-- Navbar End -->
</header>
<!-- Header End -->

<!-- Content
============================================= -->
<div id="content" role="main">


    <!-- About
    ============================================= -->
    <section id="double" class="section">
        <div class="container px-lg-5">
            <!-- Heading -->
            <div class="position-relative d-flex text-center mb-5">
                <h2 class="text-24 text-light opacity-4 text-uppercase font-weight-600 w-100 mb-0">01</h2>
                <p class="text-9 text-dark font-weight-600 position-absolute w-100 align-self-center line-height-4 mb-0">Удвоение при первом пополнении<span class="heading-separator-line border-bottom border-3 border-primary position-abolute d-block mx-auto"></span> </p>
            </div>
            <!-- Heading end-->

            <div class="row">
                <div class="col-lg-7 text-center text-lg-left">
                    <h2 class="text-7 font-weight-700 mb-3">Условия применения акции:</h2>
                    <p>Действует только для новых клиентов при первом посещении, которые подписаны на группу Вконтакте.</p>
                    <h5>Как применить акцию:</h5>
                    <ul>
                        <li>Клиент вносит деньги на счет при первом посещении</li>
                        <li>Получает от администратора чек</li>
                        <li>Регистрируется в Senet</li>
                        <li>После регистрации вы вводите его номер телефона в поле справа</li>
                        <li>У клиента автоматически удваивается баланс</li>
                    </ul>
                </div>
                <div class="col-lg-5 mt-5 mt-lg-0">
                    <h2 class="mb-3 text-5 text-center text-md-left">Пополнить аккаунт</h2>
                    <form class="sale" action="/sale/double" method="post">
                        <div class="form-group">
                            <input name="phone" class="form-control" placeholder="Введите телефон пользователя">
                        </div>
                        <p class="text-center mt-4 mb-0">
                            <button class="btn btn-primary rounded-pill d-inline-flex" type="submit">Пополнить</button>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- About end -->

    <!-- About
    ============================================= -->
    <section id="twohours" class="section">
        <div class="container px-lg-5">
            <!-- Heading -->
            <div class="position-relative d-flex text-center mb-5">
                <h2 class="text-24 text-light opacity-4 text-uppercase font-weight-600 w-100 mb-0">02</h2>
                <p class="text-9 text-dark font-weight-600 position-absolute w-100 align-self-center line-height-4 mb-0">2 часа при первом посещении<span class="heading-separator-line border-bottom border-3 border-primary position-abolute d-block mx-auto"></span> </p>
            </div>
            <!-- Heading end-->

            <div class="row">
                <div class="col-lg-7 text-center text-lg-left">
                    <h2 class="text-7 font-weight-700 mb-3">Условия применения акции:</h2>
                    <p>Действует только для новых клиентов при предъявлении листовк.</p>
                    <h5>Как применить акцию:</h5>
                    <ul>
                        <li>Клиенту выдается чек на 1 руб.</li>
                        <li>Клиенту регистрируется в Senet</li>
                        <li>После регистрации вы вводите его номер телефона в поле справа</li>
                        <li>У клиента автоматически пояляется на счету 200 руб.</li>
                    </ul>
                </div>
                <div class="col-lg-5 mt-5 mt-lg-0">
                    <h2 class="mb-3 text-5 text-center text-md-left">Пополнить аккаунт</h2>
                    <form class="sale" action="/sale/twohours" method="post">
                        <div class="form-group">
                            <input name="phone" class="form-control" placeholder="Введите телефон пользователя">
                        </div>
                        <p class="text-center mt-4 mb-0">
                            <button class="btn btn-primary rounded-pill d-inline-flex" type="submit">Пополнить</button>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- About end -->

    <!-- About
    ============================================= -->
    <section id="taxi" class="section">
        <div class="container px-lg-5">
            <!-- Heading -->
            <div class="position-relative d-flex text-center mb-5">
                <h2 class="text-24 text-light opacity-4 text-uppercase font-weight-600 w-100 mb-0">03</h2>
                <p class="text-9 text-dark font-weight-600 position-absolute w-100 align-self-center line-height-4 mb-0">Вернем деньги за такси на игровой счет<span class="heading-separator-line border-bottom border-3 border-primary position-abolute d-block mx-auto"></span> </p>
            </div>
            <!-- Heading end-->

            <div class="row">
                <div class="col-lg-7 text-center text-lg-left">
                    <h2 class="text-7 font-weight-700 mb-3">Условия применения акции:</h2>
                    <p>Клиент должен пополнить игровой баланс на сумму 200 руб. или более и  показать в приложении такси оплату в течение 15-ти минут после совершения поездки до компьютерного клуба. Данная акция с другими акциями не суммируется.</p>
                    <h5>Как применить акцию:</h5>
                    <ul>
                        <li>Клиент пополняет игровой баланс на 200 руб. или более</li>
                        <li>Фотографируйте данные о поездке (Фотографию отправляете в чат вместе с отчетом после смены)</li>
                        <li>После пополнения вы вводите его номер телефона и сумму поездки в поля справа</li>
                        <li>Клиенту на баланс зачисляются деньги за поездку</li>
                    </ul>
                </div>
                <div class="col-lg-5 mt-5 mt-lg-0">
                    <h2 class="mb-3 text-5 text-center text-md-left">Пополнить аккаунт</h2>
                    <form class="sale" action="/sale/taxi" method="post">
                        <div class="form-group">
                            <input name="phone" class="form-control" placeholder="Введите телефон пользователя">
                        </div>
                        <div class="form-group">
                            <input name="sum" class="form-control" placeholder="Введите стоимость поездки">
                        </div>
                        <p class="text-center mt-4 mb-0">
                            <button class="btn btn-primary rounded-pill d-inline-flex" type="submit">Пополнить</button>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- About end -->

    <!-- About
    ============================================= -->
    <section id="card" class="section">
        <div class="container px-lg-5">
            <!-- Heading -->
            <div class="position-relative d-flex text-center mb-5">
                <h2 class="text-24 text-light opacity-4 text-uppercase font-weight-600 w-100 mb-0">04</h2>
                <p class="text-9 text-dark font-weight-600 position-absolute w-100 align-self-center line-height-4 mb-0">6-ое посещение<span class="heading-separator-line border-bottom border-3 border-primary position-abolute d-block mx-auto"></span> </p>
            </div>
            <!-- Heading end-->

            <div class="row">
                <div class="col-lg-7 text-center text-lg-left">
                    <h2 class="text-7 font-weight-700 mb-3">Условия применения акции:</h2>
                    <p>Если клиент в течение месяца пополнил 5 раз баланс на сумму более 250 руб, то при 6-ом посещении он получает 250 руб. бонусами</p>
                    <ul>
                        <li>Пополнения с помощью других акций не засчитываются</li>
                        <li>Считаются операции только за последние 30 дней</li>
                        <li>Если в течение месяца уже были пополнеия с помощью этой акции, то считаются пополнения после последней акции</li>
                    </ul>
                    <h5>Как применить акцию:</h5>
                    <ul>
                        <li>Клиент передает вам карточку с 5-ю печатями</li>
                        <li>Вы вводите его номер телефона в поле справа</li>
                        <li>Если клиент выполнил условия акции, то ему на счет зачисляется 250 руб.</li>
                    </ul>
                </div>
                <div class="col-lg-5 mt-5 mt-lg-0">
                    <h2 class="mb-3 text-5 text-center text-md-left">Пополнить аккаунт</h2>
                    <form class="sale" action="/sale/card" method="post">
                        <div class="form-group">
                            <input name="phone" class="form-control" placeholder="Введите телефон пользователя">
                        </div>
                        <p class="text-center mt-4 mb-0">
                            <button class="btn btn-primary rounded-pill d-inline-flex" type="submit">Пополнить</button>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- About end -->

    <!-- About
    ============================================= -->
    <section id="friends" class="section">
        <div class="container px-lg-5">
            <!-- Heading -->
            <div class="position-relative d-flex text-center mb-5">
                <h2 class="text-24 text-light opacity-4 text-uppercase font-weight-600 w-100 mb-0">05</h2>
                <p class="text-9 text-dark font-weight-600 position-absolute w-100 align-self-center line-height-4 mb-0">С друзьями веселее<span class="heading-separator-line border-bottom border-3 border-primary position-abolute d-block mx-auto"></span> </p>
            </div>
            <!-- Heading end-->

            <div class="row">
                <div class="col-lg-7 text-center text-lg-left">
                    <h2 class="text-7 font-weight-700 mb-3">Условия применения акции:</h2>
                    <p>Если клиент приводит друга, не зарегистрированного в системе, то друг получает 200 руб. на игровой счет, а клиент, который его привел, получает 100 руб. на свой счет.</p>
                    <h5>Как применить акцию:</h5>
                    <ul>
                        <li>Клиент приводит друга, которые не зарегистрирован в системе</li>
                        <li>Вы выдаете новому клиенту чек на 1 руб.</li>
                        <li>Новый клиент проходит регистрацию</li>
                        <li>Вы вводите номера телефонов двух клиентов в поля справа</li>
                        <li>Новому клиенту зачисляется 200 руб. А тому, кто его привел - 100 руб.</li>
                    </ul>
                </div>
                <div class="col-lg-5 mt-5 mt-lg-0">
                    <h2 class="mb-3 text-5 text-center text-md-left">Пополнить аккаунты</h2>
                    <form class="sale" action="/sale/friends" method="post">
                        <div class="form-group">
                            <input name="phone" class="form-control" placeholder="Телефон постоянного пользователя">
                        </div>
                        <div class="form-group">
                            <input name="phonefriend" class="form-control" placeholder="Телефон новичка">
                        </div>
                        <p class="text-center mt-4 mb-0">
                            <button class="btn btn-primary rounded-pill d-inline-flex" type="submit">Пополнить</button>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- About end -->

    <!-- About
    ============================================= -->
    <section id="birthday" class="section">
        <div class="container px-lg-5">
            <!-- Heading -->
            <div class="position-relative d-flex text-center mb-5">
                <h2 class="text-24 text-light opacity-4 text-uppercase font-weight-600 w-100 mb-0">06</h2>
                <p class="text-9 text-dark font-weight-600 position-absolute w-100 align-self-center line-height-4 mb-0">День рождения<span class="heading-separator-line border-bottom border-3 border-primary position-abolute d-block mx-auto"></span> </p>
            </div>
            <!-- Heading end-->

            <div class="row">
                <div class="col-lg-7 text-center text-lg-left">
                    <h2 class="text-7 font-weight-700 mb-3">Условия применения акции:</h2>
                    <p>Действует только для именинника один раз в 360 дней. Воспользоваться можно по паспорту. Скидка действительна за 2 дня до и 2 дня после дня рождения</p>
                    <h5>Как применить акцию:</h5>
                    <ul>
                        <li>Клиент показывает паспорт</li>
                        <li>Пополняет игровой счет</li>
                        <li>Вы вводите номера телефона клиента в поле справа</li>
                        <li>Клиенту зачисляется 30% от его последнего пополнения</li>
                    </ul>
                </div>
                <div class="col-lg-5 mt-5 mt-lg-0">
                    <h2 class="mb-3 text-5 text-center text-md-left">Пополнить аккаунты</h2>
                    <form class="sale" action="/sale/birthday" method="post">
                        <div class="form-group">
                            <input name="phone" class="form-control" placeholder="Введите номер телефона">
                        </div>
                        <p class="text-center mt-4 mb-0">
                            <button class="btn btn-primary rounded-pill d-inline-flex" type="submit">Пополнить</button>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- About end -->

    <!-- About
    ============================================= -->
    <section id="tech" class="section">
        <div class="container px-lg-5">
            <!-- Heading -->
            <div class="position-relative d-flex text-center mb-5">
                <h2 class="text-24 text-light opacity-4 text-uppercase font-weight-600 w-100 mb-0">07</h2>
                <p class="text-9 text-dark font-weight-600 position-absolute w-100 align-self-center line-height-4 mb-0">Технические неполадки или обновление<span class="heading-separator-line border-bottom border-3 border-primary position-abolute d-block mx-auto"></span> </p>
            </div>
            <!-- Heading end-->

            <div class="row">
                <div class="col-lg-7 text-center text-lg-left">
                    <h2 class="text-7 font-weight-700 mb-3">Условия применения:</h2>
                    <p>Если клиент вынужден прервать игру или ждать ее начала по нашей вине, то мы можем зачислить ему на баланс средства в качестве компенсации (Не более 20 рублей 1 раз в 12 часов):</p>
                    <ul>
                        <li>Проблемы с интернетом</li>
                        <li>Обновление игры</li>
                        <li>Проблемы с компьютером или периферией</li>
                    </ul>
                    <h5>Как применить акцию:</h5>
                    <ul>
                        <li>Вы вводите номера телефона клиента и сумму поплнения в поля справа</li>
                        <li>Клиенту зачисляется деньги на счет</li>
                    </ul>
                </div>
                <div class="col-lg-5 mt-5 mt-lg-0">
                    <h2 class="mb-3 text-5 text-center text-md-left">Пополнить аккаунты</h2>
                    <form class="sale" action="/sale/tech" method="post">
                        <div class="form-group">
                            <input name="phone" class="form-control" placeholder="Введите номер телефона">
                        </div>
                        <div class="form-group">
                            <input name="sum" class="form-control" placeholder="Введите сумму">
                        </div>
                        <div class="form-group">
                            <input name="info" class="form-control" placeholder="Введите причину пополнения">
                        </div>
                        <p class="text-center mt-4 mb-0">
                            <button class="btn btn-primary rounded-pill d-inline-flex" type="submit">Пополнить</button>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- About end -->



</div>
<!-- Content end -->

<!-- Footer
============================================= -->
<footer id="footer" class="section">
    <div class="container px-lg-5">
        <div class="row">
            <div class="col-lg-6 text-center text-lg-left">
                <p class="mb-3 mb-lg-0">© Checkpoint 2021</p>
            </div>
        </div>
    </div>
</footer>
<!-- Footer end -->
</div>