<!-- Document Wrapper
=============================== -->
<div id="main-wrapper" class="log">
    <!-- Header
    ============================ -->
    <header id="header" class="sticky-top">
        <!-- Navbar -->
        <nav class="primary-menu login navbar navbar-expand-lg navbar-text-light border-bottom-0">
            <div class="container-fluid position-relative h-100 flex-lg-column pl-3 px-lg-3 pt-lg-3 pb-lg-2">

                <!-- Logo -->
                <a href="/" class="mb-lg-auto mt-lg-4 logo">
                    <!--			<span class="bg-dark-2 rounded-pill p-2 mb-lg-1 d-none d-lg-inline-block">-->
                    <img class="img-fluid rounded-pill d-block" src="public/images/logobig.png" title="Checkpoint" alt="">
                    <!--			</span>-->
                </a>
                <!-- Logo End -->

                <div id="header-nav" class="w-100 my-lg-auto">
                    <div class="txt col-xl-9 mx-auto">
                        <div class="zag my-lg-auto">Войдите в свой аккаунт</div>
                        <div class="podzag">Введите данные от своего аккаунта.</div>
                    </div>
                    <div class="col-xl-9 mx-auto">
                        <form class="auth" action="/login/auth" method="post">
                            <div class="form-group">
                                <!--                <label for="login">Email address</label>-->
                                <input name="login" id="login" class="form-control" placeholder="Введите логин">
                            </div>
                            <div class="form-group">
                                <!--                <label for="password">Email address</label>-->
                                <input name="password" id="password" type="password" class="form-control" placeholder="Введите пароль">
                            </div>
                            <p class="text-center mt-4 mb-0">
                                <button class="btn btn-primary rounded-pill d-inline-flex" type="submit">Войти</button>
                            </p>
                        </form>
                    </div>
                </div>
        </nav>
        <!-- Navbar End -->
    </header>
    <!-- Header End -->

    <!-- Content
    ============================================= -->
    <div id="content" role="main">


        <section id="home">
            <div class="hero-wrap">
                <div class="hero-bg parallax" style="background-image: url(public/images/check.jpg);"></div>
                <div class="hero-content section d-flex fullscreen">
                    <div class="container my-auto">
                    </div>
                </div>
        </section>



    </div>
    <!-- Content end -->


</div>