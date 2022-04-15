<section class="preview section">
    <div class="header">
        <div class="cont">
            <div class="logo">
                <a href="/case"><img src="/public/images/case/logo.png" alt="Checkpoint"></a>
            </div>
            <div class="stats">
                <div class="stat">
                    <div class="img">
                        <img src="/public/images/case/i1.png" alt="">
                    </div>
                    <div class="text">
                        <span>365</span>
                        Кейсов открыто
                    </div>
                </div>
                <div class="stat">
                    <div class="img">
                        <img src="/public/images/case/i2.png" alt="">
                    </div>
                    <div class="text">
                        <span>3 000 руб.</span>
                        Самый крупный выигрыш
                    </div>
                </div>
            </div>
            <?php if(isset($user)):?>
                <div class="yes-aut balance">
                    <div class="bal">
                        <div class="ln">
                            ID: <?=$user?>
                        </div>
                        <div class="coins">
                            <?=$sum?> Р
                        </div>
                    </div>
                    <div class="photo">
                        <img src="/public/images/case/avatar.png" alt="Hazcker">
                    </div>
                </div>
            <?php else:?>
                <div class="non-auth balance">
                    <div class="auth-alias">
                        Пройти авторизацию
                    </div>
                    <div class="photo">
                        <img src="/public/images/case/avatar.png" alt="Hazcker">
                    </div>
                </div>
            <?php endif;?>
        </div>
    </div>

    <div class="pastprize">
        <?php if(!empty($lastPrizes)):?>
            <?php foreach($lastPrizes as $case):?>
                <div class="case <?=$case['color_name']?>-color">
                    <div class="img">
                        <img src="/public/images/case/<?=$case['image']?>.png" alt="">
                    </div>
                    <div class="info-case">
                        <div class="name"><?=$case['prize']?> <?php if ($case['type'] == 'money') echo 'руб.'?></div>
                        <?php if($case['type'] == 'money'):?>
                            <div class="desc">На игровой счет</div>
                        <?php else:?>
                            <div class="desc">Подзарядка</div>
                        <?php endif;?>
                    </div>
                </div>
            <?php endforeach;?>
        <?php endif;?>
    </div>

    <div class="zag">
        <div class="cont">
            <div class="back">
                <img src="/public/images/case/bg.png" alt="" class="background">
            </div>
            <div class="back1" id="back1">
                <img src="/public/images/case/back-1.png" alt="" class="" data-depth="0.3">
            </div>
            <div class="back2" id="back2">
                <img src="/public/images/case/back-2.png" alt="" class="" data-depth="0.7">
            </div>
            <div class="main-cont">
                <div class="podzag">
                    Пополни игровой баланс на 350 рублей
                </div>
                <h1 class="casezag">
                    Открой кейсы <br>с <span>гарантированными <br>призами</span> до 3000 рублей <br>на игровой счет
                </h1>
                <ul class="zag-list">
                    <li>Более 100 призов</li>
                    <li>Напитки и шоколадные батончики</li>
                    <li>Моментальная выдача призов</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="form-cont" id="form">
        <img src="/public/images/case/jager.png" alt="" class="jager">
        <div class="proverka">
            Проверить <br>
            последний чек
        </div>
        <form action="" id="phone-form">
            <label>
                <i class="icon ion-phone placeholder-icon"></i>
                <input class="phone" type="text" placeholder="Телефон">
            </label>
            <button id="button-form">Пополнить баланс</button>
        </form>
    </div>
    <div class="over-cases"></div>
    <div class="cases">
        <div class="cont">
            <div class="preview-case">
                <div class="zagolovok-block">
                    Популярные кейсы
                </div>
                <div class="cases-items">
                    <div class="item" data-case="first">
                        <div class="image-case">
                            <div class="show show-purple"></div>
                            <img src="/public/images/case/case-3.png" alt="">
                        </div>
                        <div class="case-name">
                            Кейс Checkpoint
                        </div>
                        <div class="price">
                            350
                        </div>
                    </div>
                    <div class="item" data-case="second">
                        <div class="image-case">
                            <div class="show show-yellow"></div>
                            <img src="/public/images/case/case-2.png" alt="">
                        </div>
                        <div class="case-name">
                            Кейс подзарядки
                        </div>
                        <div class="price">
                            450
                        </div>
                    </div>
                    <div class="item" data-case="third">
                        <div class="image-case">
                            <div class="show show-blue"></div>
                            <img src="/public/images/case/case-1.png" alt="">
                        </div>
                        <div class="case-name">
                            Премиум кейс
                        </div>
                        <div class="price">
                            550
                        </div>
                    </div>
                </div>
            </div>

            <div class="open-cases first-cases" style="display: none">
                <div class="close-block"></div>
                <div class="roulette-cases">
                    <div class="preview__container cont">
                        <div class="pev">
                            <div class="image">
                                <div class="inside case-one"></div>
                            </div>

                            <?php if(!isset($user)):?>
                                <div class="auth">
                                    <div class="text-block">Чтобы открыть кейс пополните баланс на сумму более 350 рублей и авторизуйтесь по номеру телефона</div>
                                    <div class="button scroll">Проверить последнее пополнение</div>
                                </div>
                            <?php elseif(isset($sum) && isset($user) && $sum < FIRST_CASE_PRICE):?>
                                <div class="waring">
                                    <div class="text-block">
                                        <div class="zagolovok">Не хватает <?=FIRST_CASE_PRICE - $sum?> Р</div>
                                        У вас недостаточно средств для открытия кейса
                                    </div>
                                </div>
                            <?php else:?>
                                <div class="block-text">
                                    <div class="text-block">Кейс Checkpoint - 350 Р</div>
                                    <button class="button roul" data-case="first">Открыть кейс</button>
                                </div>
                            <?php endif;?>
                        </div>
                        <div class="fon"></div>
                        <div class="win-case">
                            <div class="prize-item win-case-prize-item prize-item--teal blue-color">
                                <div class="img">
                                    <img src="/public/images/case/30.png" alt="">
                                </div>
                                <div class="info-case">
                                    <div class="name">30</div>
                                    <div class="desc">Близкая опасность</div>
                                </div>
                            </div>
                        </div>
                        <div class="preview__roulette first-roulette roulette">
                            <?php for ($i = 0; $i < 7; $i++):?>
                                <div class="prize-item prize-item--teal <?=$first[$i]['color_name']?>-color">
                                    <div class="img">
                                        <img src="/public/images/case/<?=$first[$i]['image']?>.png" alt="">
                                    </div>
                                    <div class="info-case">
                                        <div class="name"><?=$first[$i]['prize']?> <?php if ($first[$i]['type'] == 'money') echo 'руб.'?></div>
                                        <?php if($first[$i]['type'] == 'money'):?>
                                            <div class="desc">На игровой счет</div>
                                        <?php else:?>
                                            <div class="desc">Подзарядка</div>
                                        <?php endif;?>
                                    </div>
                                </div>
                            <?php endfor;?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="open-cases second-cases" style="display: none">
                <div class="close-block"></div>
                <div class="roulette-cases">
                    <div class="preview__container cont">
                        <div class="pev">
                            <div class="image">
                                <div class="inside case-two"></div>
                            </div>

                            <?php if(!isset($user)):?>
                                <div class="auth">
                                    <div class="text-block">Чтобы открыть кейс пополните баланс на сумму более 350 рублей и авторизуйтесь по номеру телефона</div>
                                    <div class="button scroll">Проверить последнее пополнение</div>
                                </div>
                            <?php elseif(isset($sum) && isset($user) && $sum < SECOND_CASE_PRICE):?>
                                <div class="waring">
                                    <div class="text-block">
                                        <div class="zagolovok">Не хватает <?=SECOND_CASE_PRICE - $sum?> Р</div>
                                        У вас недостаточно средств для открытия кейса
                                    </div>
                                </div>
                            <?php else:?>
                                <div class="block-text">
                                    <div class="text-block">Кейс подзарядки - 450 Р</div>
                                    <button class="button roul" data-case="second">Открыть кейс</button>
                                </div>
                            <?php endif;?>
                        </div>
                        <div class="fon"></div>
                        <div class="win-case">
                            <div class="prize-item win-case-prize-item prize-item--teal blue-color">
                                <div class="img">
                                    <img src="/public/images/case/30.png" alt="">
                                </div>
                                <div class="info-case">
                                    <div class="name">30</div>
                                    <div class="desc">Близкая опасность</div>
                                </div>
                            </div>
                        </div>
                        <div class="preview__roulette second-roulette roulette">
                            <?php for ($i = 0; $i < 7; $i++):?>
                                <div class="prize-item prize-item--teal <?=$second[$i]['color_name']?>-color">
                                    <div class="img">
                                        <img src="/public/images/case/<?=$second[$i]['image']?>.png" alt="">
                                    </div>
                                    <div class="info-case">
                                        <div class="name"><?=$second[$i]['prize']?> <?php if ($second[$i]['type'] == 'money') echo 'руб.'?></div>
                                        <?php if($second[$i]['type'] == 'money'):?>
                                            <div class="desc">На игровой счет</div>
                                        <?php else:?>
                                            <div class="desc">Подзарядка</div>
                                        <?php endif;?>
                                    </div>
                                </div>
                            <?php endfor;?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="open-cases third-cases" style="display: none">
                <div class="close-block"></div>
                <div class="roulette-cases">
                    <div class="preview__container cont">
                        <div class="pev">
                            <div class="image">
                                <div class="inside case-three"></div>
                            </div>

                            <?php if(!isset($user)):?>
                                <div class="auth">
                                    <div class="text-block">Чтобы открыть кейс пополните баланс на сумму более 350 рублей и авторизуйтесь по номеру телефона</div>
                                    <div class="button scroll">Проверить последнее пополнение</div>
                                </div>
                            <?php elseif(isset($sum) && isset($user) && $sum < THIRD_CASE_PRICE):?>
                                <div class="waring">
                                    <div class="text-block">
                                        <div class="zagolovok">Не хватает <?=THIRD_CASE_PRICE - $sum?> Р</div>
                                        У вас недостаточно средств для открытия кейса
                                    </div>
                                </div>
                            <?php else:?>
                                <div class="block-text">
                                    <div class="text-block">Премиум кейс - 550 Р</div>
                                    <button class="button roul" data-case="third">Открыть кейс</button>
                                </div>
                            <?php endif;?>
                        </div>
                        <div class="fon"></div>
                        <div class="win-case">
                            <div class="prize-item win-case-prize-item prize-item--teal blue-color">
                                <div class="img">
                                    <img src="/public/images/case/30.png" alt="">
                                </div>
                                <div class="info-case">
                                    <div class="name">30</div>
                                    <div class="desc">Близкая опасность</div>
                                </div>
                            </div>
                        </div>
                        <div class="preview__roulette third-roulette roulette">
                            <?php for ($i = 0; $i < 7; $i++):?>
                                <div class="prize-item prize-item--teal <?=$third[$i]['color_name']?>-color">
                                    <div class="img">
                                        <img src="/public/images/case/<?=$third[$i]['image']?>.png" alt="">
                                    </div>
                                    <div class="info-case">
                                        <div class="name"><?=$third[$i]['prize']?> <?php if ($third[$i]['type'] == 'money') echo 'руб.'?></div>
                                        <?php if($third[$i]['type'] == 'money'):?>
                                            <div class="desc">На игровой счет</div>
                                        <?php else:?>
                                            <div class="desc">Подзарядка</div>
                                        <?php endif;?>
                                    </div>
                                </div>
                            <?php endfor;?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="inside-case default">
        <div class="cont">
            <div class="zagolovok-block">
                Содержимое кейсов
            </div>
            <div class="inside">
                <?php foreach($first as $case):?>
                    <div class="case <?=$case['color_name']?>-color">
                        <div class="img">
                            <img src="/public/images/case/<?=$case['image']?>.png" alt="">
                        </div>
                        <div class="info-case">
                            <div class="name"><?=$case['prize']?> <?php if ($case['type'] == 'money') echo 'руб.'?></div>
                            <?php if($case['type'] == 'money'):?>
                                <div class="desc">На игровой счет</div>
                            <?php else:?>
                                <div class="desc">Подзарядка</div>
                            <?php endif;?>
                        </div>
                    </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>

    <div class="inside-case" id="first" style="display: none">
        <div class="cont">
            <div class="zagolovok-block">
                Содержимое кейса Checkpoint
            </div>
            <div class="inside">
                <?php foreach($first as $case):?>
                    <div class="case <?=$case['color_name']?>-color">
                        <div class="img">
                            <img src="/public/images/case/<?=$case['image']?>.png" alt="">
                        </div>
                        <div class="info-case">
                            <div class="name"><?=$case['prize']?> <?php if ($case['type'] == 'money') echo 'руб.'?></div>
                            <?php if($case['type'] == 'money'):?>
                                <div class="desc">На игровой счет</div>
                            <?php else:?>
                                <div class="desc">Подзарядка</div>
                            <?php endif;?>
                        </div>
                    </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>

    <div class="inside-case" id="second" style="display: none">
        <div class="cont">
            <div class="zagolovok-block">
                Содержимое кейса подзарядки
            </div>
            <div class="inside">
                <?php foreach($second as $case):?>
                    <div class="case <?=$case['color_name']?>-color">
                        <div class="img">
                            <img src="/public/images/case/<?=$case['image']?>.png" alt="">
                        </div>
                        <div class="info-case">
                            <div class="name"><?=$case['prize']?> <?php if ($case['type'] == 'money') echo 'руб.'?></div>
                            <?php if($case['type'] == 'money'):?>
                                <div class="desc">На игровой счет</div>
                            <?php else:?>
                                <div class="desc">Подзарядка</div>
                            <?php endif;?>
                        </div>
                    </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>

    <div class="inside-case" id="third" style="display: none">
        <div class="cont">
            <div class="zagolovok-block">
                Содержимое премиум кейса
            </div>
            <div class="inside">
                <?php foreach($third as $case):?>
                    <div class="case <?=$case['color_name']?>-color">
                        <div class="img">
                            <img src="/public/images/case/<?=$case['image']?>.png" alt="">
                        </div>
                        <div class="info-case">
                            <div class="name"><?=$case['prize']?> <?php if ($case['type'] == 'money') echo 'руб.'?></div>
                            <?php if($case['type'] == 'money'):?>
                                <div class="desc">На игровой счет</div>
                            <?php else:?>
                                <div class="desc">Подзарядка</div>
                            <?php endif;?>
                        </div>
                    </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>


    <div class="popup">
        <div class="main-popup">
            <div class="head">
                <div class="header-popup">Ошибка</div>
                <div class="close-popup"></div>
            </div>
            <div class="text">Такого пользователя не существует</div>
        </div>
    </div>


    <div class="input-block">
        <input id="input-acc" class="input-range" min="10" max="1000" value="220" type="hidden">
        <input id="input-fps" class="input-range" value="50" min="20" max="240" type="hidden">
        <input id="input-prize" class="input-range" min="0" max="19" value="5" type="hidden">
        <input id="input-tracks" class="input-range" min="0" max="20" value="4" type="hidden">
        <input id="input-seconds" class="input-range" min="0" max="60" value="0" type="hidden">
        <input id="input-random" class="input-checkbox" type="hidden">
    </div>
</section>
