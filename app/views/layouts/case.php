<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="/public/vendor/bootstrap/css/bootstrap.min.css" />
    <!-- Font Awesome Icon -->
    <link rel="stylesheet" type="text/css" href="/public/vendor/font-awesome/css/all.min.css" />
    <!-- Owl Carousel -->
    <link rel="stylesheet" type="text/css" href="/public/vendor/owl.carousel/assets/owl.carousel.min.css" />
    <!-- Magnific Popup -->
    <link rel="stylesheet" type="text/css" href="/public/vendor/magnific-popup/magnific-popup.min.css" />
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" type="text/css" href="/public/css/stylesheet.css" />
    <link href="/public/css/vanillaRoulette.css" rel="stylesheet">
    <link href="/public/css/case.css" rel="stylesheet">
</head>
<body>
    <?=$content?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.8/highlight.min.js"></script>
<script>hljs.initHighlightingOnLoad();</script>
    <script>
        const prizes = 30;
        const rouletteNode = document.querySelector(".roulette");
        const colors = ["green", "yellow", "pink", "purple", "teal"];
        //
        // for (let i = 0; i < prizes; ++i) {
        //     let el = document.createElement("div");
        //     el.classList.add("prize-item");
        //     el.classList.add(`prize-item--${colors[Math.floor(Math.random() * colors.length)]}`);
        //     el.innerText = i;
        //     rouletteNode.appendChild(el);
        // }

        const accRange = document.getElementById("input-acc");
        const fpsRange = document.getElementById("input-fps");
        const prizeRange = document.getElementById("input-prize");
        const tracksRange = document.getElementById("input-tracks");
        const secondsRange = document.getElementById("input-seconds");
        const ranges = [accRange, fpsRange, prizeRange, tracksRange, secondsRange];
        const randomCheck = document.getElementById("input-random");
        // prizeRange.max = prizes - 1;

        function updateRangeLabel(input) {
            input.parentNode.parentNode.querySelector("b").innerText = input.value;
        }

    </script>
<script src="/public/js/vanillaRoulette.js"></script>
<script src="/public/vendor/jquery/jquery.min.js"></script>
<script src="/public/js/animate.js"></script>
<script src="/public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/public/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="/public/js/paralax.js"></script>
<script src="/public/js/case.js"></script>
</body>
</html>