<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/phone.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="shortcut icon" href="img/favicon.png" type="image/png">
    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <title>Grand Line Воронеж</title>
</head>
<body>
    <div class="form__phone">
        <form action="form.php" class="phone__callback" method="POST">
            <div class="form__phone-close">
                <i class="fa fa-times close" aria-hidden="true"></i>
                <div class="form__phone-send">
                    <p>Введите Имя:</p><br/>
                    <input type="text" name="name" placeholder="Введите имя" required>
                    <p>Введите телефон</p><br/>
                    <input type="text" name="phone" placeholder="Введите телефон" required>
                    <button type=submit name='sendMail'>заказать звонок</button>
                </div>
            </div>
        </form>
    </div>
    
    <i class="Phone is-animating" id="btn"></i>
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="header__phone">
                    <a href="tel:84732606760" class="header__phone-number">8 (473) 260-67-60 <i class="fa fa-phone-square" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="header__body">
                <a href="/" class="header__logo"><img src="img/logo.svg" alt=""></a>
                <div class="header__burger">
                    <span></span>
                </div>
                <nav class="header__menu">
                    <ul class="header__list">
                        <li>
                            <a href="catalog.php" class="header__link"><i class="fa fa-bars" aria-hidden="true"></i>каталог</a>
                        </li>
                        <li>
                            <a href="about.php" class="header__link">о компании</a>
                        </li>
                        <li>
                            <a href="price.php" class="header__link">цены</a>
                        </li>
                        <li>
                            <a href="map.php" class="header__link">где купить</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <main>
        <div class="wrapper__main wow bounceInDown">
            <div class="container">
                <h1>О компании</h1>
                <p>Компания «Теплокровля» является официальным дистрибьютором всей продукции Grand Line и уже более 10 лет присутствует на рынке кровельных, теплоизоляционных и сопутствующих материалов, занимает лидирующие позиции по объёмам продаж в Центральном Черноземье.</p>
                <p>Высокое качество выпускаемой продукции – один из приоритетов компании. Новейшие разработки и материалы, используемые при создании всех товаров, постоянный контроль качества сырья и готовых изделий в собственной лаборатории качества позволяет предоставлять клиентам письменную гарантию до 50 лет.</p>
                <p>Grand Line - одна из немногих компаний на европейском и российском рынке, производящая как металлические профилированные изделия, так и изделия из ПВХ. Динамика развития говорит сама за себя.</p>
                
                <h2>Направление деятельности</h2>
                <div class="main__activity">
                    <ul class="main__activity-left">
                        <li><span>Металлочерепица</span></li>
                        <li><span>Фальцевая кровля</span></li>
                        <li><span>Кровля</span></li>
                        <li><span>Композитная металлочерепица</span></li>
                        <li><span>Профнастил</span></li>
                        <li><span>металлический сайдинг</span></li>
                    </ul>
                    <ul class="main__activity-right">
                        <li><span>Виниловый сайдинг и софиты</span></li>
                        <li><span>Фасадные панели</span></li>
                        <li><span>Водосточные системы</span></li>
                        <li><span>Системы ограждений</span></li>
                        <li><span>Элементы безопасности кровли</span></li>
                        <li><span>сопутствующие товары</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="container">
            <div class="footer__service">
                <h5>Сервис</h5>
                <div class="footer__service-block">
                    <div class="service__block-item wow fadeInUpBig">
                        <div class="footer__service-wrapper">
                            <div class="service__wrapper-icon">
                                <img src="img/calk.svg" alt="">
                            </div>
                            <span>Расчёт</span>
                            <p>Это может быть не просто. Мы поможем сделать быстро и без ошибок.</p>
                        </div>
                    </div>
                    <div class="service__block-item wow fadeInUpBig">
                        <div class="footer__service-wrapper">
                            <div class="service__wrapper-icon">
                                <img src="img/card.svg" alt="">
                            </div>
                            <span>Оплата по карте</span>
                            <p>Оплата наличными или по карте в нашем офисе.</p>
                        </div>
                    </div>
                    <div class="service__block-item wow fadeInUpBig">
                        <div class="footer__service-wrapper">
                            <div class="service__wrapper-icon">
                                <img src="img/delivery.svg" alt="">
                            </div>
                            <span>Доставка</span>
                            <p>Бесплатная доставка нашим транспортом по Воронежу и ближайшим населённыи пунктам.</p>
                        </div>
                    </div>
                    <div class="service__block-item wow fadeInUpBig">
                        <div class="footer__service-wrapper">
                            <div class="service__wrapper-icon">
                                <img src="img/garant.svg" alt="">
                            </div>
                            <span>Официальный дилер</span>
                            <p>Наша компания является официальным дилером всей продукции Grand Line.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__bottom-phone">
            <div class="container">
                <div class="bootom__phone">
                    <a href="tel:84732606760" class="bottom__phone-item">8(473)260-67-60</a>
                    <a href="mailto:sigov@tkrov.ru" class="bottom__email-item">sigov@tkrov.ru</a>
                    <span>Воронеж, проспект Патриотов 55б, оф. 1</span>
                </div>
            </div>
        </div>
        <div class="footer__bottom-security">
            <div class="container">
                <div class="bottom__security">
                    <p>Политика защиты и обработки персональных данных</p>
                </div>
            </div>
        </div>
    </footer>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/js.js"></script>
</body>
</html>