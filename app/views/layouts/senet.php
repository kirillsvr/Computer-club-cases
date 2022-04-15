<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
    <link href="public/images/favicon.ico" rel="icon" />
    <?=$this->getMeta();?>
    <meta name="robots" content="noindex" />



    <!-- Stylesheet
    ============================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="public/vendor/bootstrap/css/bootstrap.min.css" />
    <!-- Font Awesome Icon -->
    <link rel="stylesheet" type="text/css" href="public/vendor/font-awesome/css/all.min.css" />
    <!-- Owl Carousel -->
    <link rel="stylesheet" type="text/css" href="public/vendor/owl.carousel/assets/owl.carousel.min.css" />
    <!-- Magnific Popup -->
    <link rel="stylesheet" type="text/css" href="public/vendor/magnific-popup/magnific-popup.min.css" />
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" type="text/css" href="public/css/stylesheet.css" />
    <!-- Colors Css -->
    <link id="color-switcher" type="text/css" rel="stylesheet" href="public/#" />
</head>

<body class="side-header" data-spy="scroll" data-target=".navbar" data-offset="1">

<!-- Preloader -->
<div class="preloader">
    <div class="lds-ellipsis">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<!-- Preloader End -->

<!-- Document Wrapper
=============================== -->

<?=$content;?>


<!-- Document Wrapper end -->

<!-- Back to Top
============================================= -->
<a id="back-to-top" class="rounded-circle" data-toggle="tooltip" title="Вверх" href="public/javascript:void(0)"><i class="fa fa-chevron-up"></i></a>

<!-- Terms & Policy Modal
================================== -->
<div id="terms-policy" class="modal fade" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Ошибка</h5>
                <button type="button" class="close font-weight-400" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
            </div>
            <div class="modal-body p-4">
                <p></p>
            </div>
        </div>
    </div>
</div>
<!-- Terms & Policy Modal End -->

<!-- Disclaimer Modal
================================== -->
<div id="disclaimer" class="modal fade" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Счет пополнен</h5>
                <button type="button" class="close font-weight-400" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
            </div>
            <div class="modal-body p-4">
                <p>Пополнение прошло успешно. Деньги зачислены на счет клиента.</p>
            </div>
        </div>
    </div>
</div>
<!-- Disclaimer Modal End -->


<!-- JavaScript -->
<script src="public/vendor/jquery/jquery.min.js"></script>
<script src="public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Easing -->
<script src="public/vendor/jquery.easing/jquery.easing.min.js"></script>
<!-- Appear -->
<script src="public/vendor/jquery.appear/jquery.appear.min.js"></script>
<!-- Counter -->
<script src="public/vendor/jquery.countTo/jquery.countTo.min.js"></script>
<!-- Parallax Bg -->
<script src="public/vendor/parallaxie/parallaxie.min.js"></script>
<!-- Typed -->
<script src="public/vendor/typed/typed.min.js"></script>
<!-- Owl Carousel -->
<script src="public/vendor/owl.carousel/owl.carousel.min.js"></script>
<!-- isotope Portfolio Filter -->
<script src="public/vendor/isotope/isotope.pkgd.min.js"></script>
<!-- Magnific Popup -->
<script src="public/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
<!-- Style Switcher -->
<script src="public/js/switcher.min.js"></script>
<!-- Custom Script -->
<script src="public/js/theme.js"></script>
</body>
</html>