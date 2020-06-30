<!DOCTYPE html>
<html>
<head>
<?= $this->getMeta(); ?>
<base href="/">
<!-- Template Basic Images Start -->
<link rel="shortcut icon" href="images/favicon/favicon.ico">
<link rel="apple-touch-icon" sizes="180x180" href="image/favicon/apple-touch-icon-180x180.jpg">
<!-- Template Basic Images End -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/bootstrap.css.map" rel="stylesheet" type="text/css" media="all" />

<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700" rel="stylesheet">  
<!--theme-style-->
<link rel="stylesheet" href="css/slick.css" type="text/css" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />  
<!--//theme-style-->
<link href="css/font-awesome.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/memenu.css" rel="stylesheet" type="text/css" media="all" />
          

</head>
<body> 
    <!--top-header-->
    <div class="top-header">
        <div class="container">
            <div class="top-header-main bg-head row">
                <div class="col-sm-6 top-header-left">
                    <div class="drop">
                        <?php if (!empty($_SESSION['user'])): ?>
                        <div class="dropdown">
                          <button class="dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            <i class="fa fa-user-circle" aria-hidden="true"></i>
                            <?= $_SESSION['user']['name'] ?>
                            <span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <li><a href="user/logout">Выход</a></li>
                          </ul>
                        </div>
                        <?php else: ?>
                        <a href="user/login">Вход</a>
                        <a href="user/signup">Регистрация</a>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-sm-6 top-header-left">
                    <div class="cart box_1">
                        <a href="cart/show" id="cartclick">
                            <div class="total">
                                <?php if(!empty($_SESSION['cart'])): ?>
                                    <span class="simpleCart_total totalprice">&#8381; <?=$_SESSION['cart.sum'];?></span>
                                <?php else: ?>
                                    <span class="simpleCart_total">Корзина пуста</span>
                                <?php endif; ?>
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                            </div>
                        </a>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!--top-header-->
    <!--bottom-header-->
    <div class="header-bottom">
        <div class="container">
            <div class="header row row-flex">
                <div class="col-sm-12 col-xs-12 col-md-12 col-lg-9">
                    <div class="menu-container">
                        <a class="logo" href="<?= PATH; ?>"><h1>'Юлиана</h1></a>
                        <div class="menu">
                            <?php new \app\widgets\menu\Menu([
                                'tpl' => WWW . '/menu/menu.php',
                                'cacheKey' => 'ishop_menu',
                                'prepend' => '<li><a href="' . PATH . '">Главная</a></li>',
                                'append' => '<li><a href="'. PATH .'/about">О компании</a></li><li><a href="'. PATH .'/cantacts">Контакты</a></li>'
                            ]); ?>

                        </div> 
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="col-sm-12 col-xs-12 col-md-12 col-lg-3 clearfix search-bar-wrap"> 
                    <div class="search-bar">
                        <form action="search" method="get" autocomplete="off">
                            <input type="text" class="typeahead" id="typeahead" name="s" placeholder="Поиск">
                            <input type="submit" value="">
                        </form>
                        <!-- <input type="text" value="Поиск" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Поиск';}">
                        <input type="submit" value=""> -->
                    </div>
                </div>
            <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!--bottom-header-->
    <?php if (isset($_SESSION['error'])): ?>
        <div class="alert alert-danger">
            <div class="container">
                <?php echo $_SESSION['error']; unset($_SESSION['error']); ?>
            </div>
        </div>
    <?php endif; ?>
    <?php if (isset($_SESSION['success'])): ?>
        <div class="alert alert-success">
            <div class="container">
                <?php echo $_SESSION['success']; unset($_SESSION['success']); ?>    
            </div>
        </div>
    <?php endif; ?>

    <div class="content">
        <?= $content; ?>
    </div>

    <footer>
        <div class="footer-top">
            <div class="container">
                <div class="menu-footer">
                    <div class="row row-flex">
                        <div class="col-xs-6 col-md-4 menu-footer-box menu-footer-box__about">
                            <h4>О нас</h4>
                            <p>Если вам нужно приобрести косметику по доступным ценам, 'Юлиана - это то, что вам нужно! Здесь вы найдете широкий ассортимент известных брендов. Наша миссия - доставить каждой женщине кусочек красоты, чтобы сделать ее счастливой и подчеркнуть ее красоту и индивидуальность.</p>   
                        </div>
                        <div class="col-xs-6 col-md-4 col-md-push-4 menu-footer-box">
                            <h4>Контакты</h4>
                            <div class="footer-contact">
                                <ul>
                                    <li>
                                        <div class="footer-contact__logo">
                                            <i class="fa fa-phone" aria-hidden="true"></i>
                                        </div>8-913-289-01-51
                                    </li>
                                    <li>
                                        <div class="footer-contact__logo">
                                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                        </div>yuliana42@inf.ru
                                    </li>
                                    <li>
                                        <div class="footer-contact__logo">
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                        </div>г Кемерово, ул Центральная, дом 16
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xs-6 col-md-2 menu-footer-box col-md-pull-2  menu-footer-box-nav">
                            <h4>Навигация</h4>
                            <?php new \app\widgets\menu\Menu([
                            'tpl' => WWW . '/menu/menu_footer.php',
                            'cacheKey' => 'ishop_menu_footer',
                            'prepend' => '<li><a href="' . PATH . '">Главная</a></li>',
                            'append' => '<li><a href="'. PATH .'/about">О компании</a></li><li><a href="'. PATH .'/cantacts">Контакты</a></li>'
                            ]); ?>
                        </div>
                        <div class="col-xs-6 col-md-2 menu-footer-box col-md-pull-6 menu-footer-box-nav">
                            <h4>Каталог</h4>
                            <?php new \app\widgets\menu\Menu([
                            'tpl' => WWW . '/menu/menu_catalog.php',
                            'cacheKey' => 'ishop_menu_cat',
                            'prepend' => '',
                            'append' => ''
                            ]); ?>
                        </div>
                        
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <p>Copyrights <?php echo date ( 'Y' ) ; ?> - “Юлиана”. Все права защищены</p>
            </div>
        </div>
    </footer>
    <!--footer-end--> 

<!-- Modal -->
<div class="modal fade" id="cart" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Корзина</h4>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" class="w-m-100  btn btn-default" data-dismiss="modal">Продолжить покупки</button>
                <a href="cart/view" type="button" class="w-m-100  btn btn-primary">Оформить заказ</a>
                <button type="button" class="w-m-100  btn btn-danger" id="cartclear">Очистить корзину</button>
            </div>
        </div>
    </div>
</div>

<div class="preloader"><img src="images/ring.svg" alt=""></div>


<script>
    var path = '<?= PATH; ?>';

</script>
<script src="js/jquery-1.11.0.min.js"></script>
<script src="js/bootstrap.min.js"> </script>
<script src="js/validator.min.js"> </script>
<script src="js/typeahead.bundle.js"> </script>
<!-- <script src="js/simpleCart.min.js"> </script> -->
<script src="js/megamenu.js"> </script>
<script src="js/jquery.maskedinput.min.js"></script>
<!-- <script type="text/javascript" src="js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script> 
<script src="js/jquery.easydropdown.js"></script>  -->
<!--Slider-Starts-Here-->
<script src="js/slick.min.js"></script>
<script>
// You can also use "$(window).load(function() {"
$(function () {
  $('.main-slider').slick({
        dots: false,
        infinite: true,
        speed: 600,
        slidesToShow: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        prevArrow: '<button type="button" class="slick-prev"><i class="fa fa-angle-left" aria-hidden="true"></i></button>',
        nextArrow: '<button type="button" class="slick-next"><i class="fa fa-angle-right" aria-hidden="true"></i></button>'
    });


$('.team-slider').slick({
  dots: false,
  infinite: true,
  speed: 300,
  slidesToShow: 3,
  arrows: false,
  slidesToScroll: 1,
  adaptiveHeight: true,
  responsive: [
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        dots: true
      }
    },
    {
      breakpoint: 530,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
  $("input[name=phone]").mask("8 (999) 999-99-99");
});
</script>
<!--End-slider-script-->

<script src="js/bootstrap-colequalizer.js"></script>
<script>
 $('.col-eq').colequalizer();
</script>
<script src="js/main.js"></script>  

</body>
</html>