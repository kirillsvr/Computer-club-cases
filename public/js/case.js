var scene = document.getElementById('back1');
var parallaxInstance = new Parallax(scene);
var scene2 = document.getElementById('back2');
var parallaxInstance2 = new Parallax(scene2);

$(".scroll").on("click", function() {
    var target = $("#form").offset().top;
    $("html, body").animate({scrollTop: target-100}, 800);
    $("form").find('input').focus();
});

$(".auth-alias").on("click", function() {
    var target = $("#form").offset().top;
    $("html, body").animate({scrollTop: target-100}, 800);
    $("form").find('input').focus();
});

$(".item").on("click", function() {
    var caseNum = $(this).data('case');
    $('.preview-case').hide();
    $('.default').hide();
    $('.' + caseNum + '-cases').fadeIn(500);
    $('#' + caseNum).fadeIn(500);
});

$('.close-block').on("click", function() {
    $('.open-cases').hide();
    $('.inside-case').hide();
    $('.preview-case').fadeIn(500);
    $('.default').fadeIn(500);
});

function openPopup(header, text) {
    $(".header-popup").html(header);
    $(".popup").find(".text").html(text);
    $(".popup").fadeIn();
}

function closePopup() {
    $(".popup").fadeOut();
}
function checkPhone(phone) {
    let regex = /^(\+7|7)[0-9]{3,10}$/;
    if(!regex.test(phone)){
        return false;
    }else{
        return true;
    }
}


$('.close-popup').on('click', function (e) {
   e.preventDefault();
   closePopup();
});

$('.popup').on('click', function (e) {
    e.preventDefault();
    closePopup();
});

function inicialization(caseNum, url) {
    let options = {
        spacing: 14,
        selector: ":scope > *",
        stopCallback: function ({ detail: { prize } }) {
            $('.over-cases').fadeIn();
            $('.win-case').fadeIn();
            $('.fon').fadeIn();
            $('.win-case').animate('zoomIn', {
                "custom": {
                    "zoomIn": {
                        "easing": "ease-in-out",
                        "direction": "alternate",
                        "fillMode": "forwards",
                        "scale": 2
                    }
                }
            });
            $('.fon').animate('zoomIn', {
                "custom": {
                    "zoomIn": {
                        "repeat": 10,
                        "direction": "alternate-reverse",
                    }
                }
            });
            setTimeout(func1, 6000);

            function func1() {
                $(location).attr('href', url);
            }
            console.log("stop");
            console.log(`Selected prize index is: ${prize.index}`);


        },

        startCallback: () => console.log("start")
    };

    return new Roulette("." + caseNum + "-roulette", options);
}

function startRoulette(roulette){
    roulette.fps = fpsRange.value;
    roulette.acceleration = accRange.value;
    let options = { random: randomCheck.checked };
    if (Number(tracksRange.value))
        options.tracks = tracksRange.value;
    else
        options.time = secondsRange.value;
    roulette.rotateTo(prizeRange.value, options);
}

$('#phone-form').on('submit', function (e) {
    e.preventDefault();
    $("#button-form").prop("disabled", true);
    var phone = $('input.phone').val();

    if (!checkPhone(phone)){
        openPopup('Ошибка', 'Номер телефона должен начинатся с "+7" или "7" и далее содержать от 3 до 10 цифр');
        return false;
    }

    $.ajax({
        url: location.origin + '/case/auth',
        method: 'GET',
        dataType: 'json',
        data: {phone: phone},
        success: function(data){
            openPopup("Авторизация пройдена", "Пользователь успешно авторизован");

            setTimeout(func1, 2000);

            function func1() {
                $(location).attr('href', location.origin);
            }
            // $('.roulette').html(data.str);
            // $('#input-prize').val(data.number);
            // $('.preview__roulette').removeClass('preview__roulette');
            // let roulette = inicialization();
            // startRoulette(roulette);
        },
        error: function(data) {
            $("#button-form").prop("disabled", false);
            openPopup("Ошибка", data['responseJSON']);
        }
    })
});

(function ($) {
    $('.roul').on('click', function (e) {
        e.preventDefault();
        var th = $(this);
        th.prop("disabled", true);
        var caseNum = $(this).data('case');
        $.ajax({
            url: location.origin + '/case/run',
            method: 'GET',
            dataType: 'json',
            data: {case: caseNum},
            success: function(data){
                $('.' + caseNum + '-cases').find('.' + caseNum + '-roulette').html(data.str);
                $('.' + caseNum + '-cases').find('.fon').addClass(data.prize.color + '-fon');
                $('.' + caseNum + '-cases').find('.win-case').html(data.win);
                $('#input-prize').val(data.number);
                $('.' + caseNum + '-cases').find('.preview__roulette').removeClass('preview__roulette');
                $('.' + caseNum + '-cases').find('.inside').hide();
                let roulette = inicialization(caseNum, location.origin);
                startRoulette(roulette);
            },
            error: function(data) {
                th.prop("disabled", false);
                console.log(data);
                console.log(data['status']);
                openPopup("Ошибка", data['responseJSON']);
            }
        })



    })
})(jQuery);