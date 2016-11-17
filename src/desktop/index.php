<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link type="image/x-icon" href="favicon.ico" rel="shortcut icon">
        <style>
            <?php include('css/head.css');
            ?>
        </style>
        <link type="text/css" href="css/libs.css" rel="stylesheet">
        <link type="text/css" href="css/style.css" rel="stylesheet">
        <link type="text/css" href="css/media.css" rel="stylesheet">
        <link type="text/css" href="css/scripts.css" rel="stylesheet">
        <?php include('../track/head.php'); ?>
    </head>
    <body>
        <div class="wrapper-all">
            <div class="preloader">
                <div class="circ1"></div>
                <div class="circ2"></div>
                <div class="circ3"></div>
                <div class="circ4"></div>
            </div>
            <div class="content">
                <!-- HEADER -->
                <header class="header hidden-lg">
                    <div class="wrapper">
                        <div class="light-header">
                            <button class="menu-btn" data-body-class="menu-active" data-modal=".menu">
                                <span class="menu-btn__icon">
                                    <img src="img/header/light/menu-button.png" alt="pic">
                                    <img src="img/header/light/menu-button-hover.png" alt="pic">
                                </span>
                                Меню
                            </button>
                            <div class="logo" data-scroll="#s1">
                                <img class="logo" src="img/header/light/logo.png" alt="pic">
                            </div>
                            <div class="contacts">
                                <a class="big" href="tel:+79942422312">
                                    <span class="whatsapp-icon">
                                        <img src="img/header/light/whatsapp-button.png" alt="pic">
                                        <img src="img/header/light/whatsapp-button-hover.png" alt="pic">
                                    </span>
                                    +7 994 242 23 12
                                </a>
                                <a href="tel:84952235511">8 495 223 55 11</a>
                            </div>
                        </div>
                        <div class="dark-header">
                            <button class="menu-btn" data-body-class="menu-active" data-modal=".menu">
                                <span class="menu-btn__icon">
                                    <img src="img/header/dark/menu-button.png" alt="pic">
                                    <img class="menu-btn__icon_hover" src="img/header/dark/menu-button-hover.png" alt="pic">
                                </span>
                                Меню
                            </button>
                            <div class="logo" data-scroll="#s1">
                                <img class="logo" src="img/header/dark/logo.png" alt="pic">
                            </div>
                            <div class="contacts">
                                <a class="big" href="tel:+79942422312">
                                    <span class="whatsapp-icon">
                                        <img src="img/header/dark/whatsapp-button.png" alt="pic">
                                        <img src="img/header/dark/whatsapp-button-hover.png" alt="pic">
                                    </span>
                                    +7 994 242 23 12
                                </a>
                                <a href="tel:84952235511">8 495 223 55 11</a>
                            </div>
                        </div>
                    </div>
                </header>
                <header class="header show-lg">
                    <div class="wrapper">
                        <div class="light-header">
                            <button class="menu-btn" data-body-class="menu-active" data-modal=".menu">
                                <span class="menu-btn__icon">
                                    <img src="img/mobile/header/light/menu-button.png" alt="pic">
                                    <img src="img/mobile/header/light/menu-button-hover.png" alt="pic">
                                </span>
                                Меню
                            </button>
                            <div class="logo" data-scroll="#s1">
                                <img class="logo" src="img/header/light/logo.png" alt="pic">
                            </div>
                            <div class="contacts">
                                <a class="big" href="tel:+79942422312">
                                    <span class="whatsapp-icon">
                                        <img src="img/mobile/header/light/whatsapp-button.png" alt="pic">
                                        <img src="img/mobile/header/light/whatsapp-button-hover.png" alt="pic">
                                    </span>
                                    +7 994 242 23 12
                                </a>
                                <a href="tel:84952235511">8 495 223 55 11</a>
                            </div>
                        </div>
                        <div class="dark-header">
                            <button class="menu-btn" data-body-class="menu-active" data-modal=".menu">
                                <span class="menu-btn__icon">
                                    <img src="img/header/dark/menu-button.png" alt="pic">
                                    <img class="menu-btn__icon_hover" src="img/header/dark/menu-button-hover.png" alt="pic">
                                </span>
                                Меню
                            </button>
                            <div class="logo" data-scroll="#s1">
                                <img class="logo" src="img/header/dark/logo.png" alt="pic">
                            </div>
                            <div class="contacts">
                                <a class="big" href="tel:+79942422312">
                                    <span class="whatsapp-icon">
                                        <img src="img/header/dark/whatsapp-button.png" alt="pic">
                                        <img src="img/header/dark/whatsapp-button-hover.png" alt="pic">
                                    </span>
                                    +7 994 242 23 12
                                </a>
                                <a href="tel:84952235511">8 495 223 55 11</a>
                            </div>
                        </div>
                    </div>
                </header>
                <!-- SECTION 1 -->
                <section class="s1" id="s1">
                    <img class="dog" src="img/section1/dog.png" alt="pic">
                    <div class="wrapper">
                        <div class="container">
                            <h1 class="title_big">
                                Клуб питомников <br> йоркширских терьеров
                            </h1>
                            <p class="subtitle">
                                Родословная. Прививки по возрасту. Генетические
                            </p>
                            <div class="video">
                                <a class="play" href="afveZufjeW0">
                                    <img src="img/section1/play-button.png" alt="pic">
                                    <img src="img/section1/play-button-hover.png" alt="pic">
                                </a>
                                <div class="video-container"></div>
                            </div>
                            <button class="btn hidden-xs" data-scroll="#s2">
                                <img src="img/section1/btn.png" alt="pic">
                                <img src="img/section1/btn-hover.png" alt="pic">
                                <span class="btn-text">Узнать стоимость</span>
                            </button>
                            <button class="btn show-xs" data-scroll="#s2">
                                <img src="img/mobile/section1/btn.png" alt="pic">
                                <img src="img/mobile/section1/btn-hover.png" alt="pic">
                                <span class="btn-text">Узнать стоимость</span>
                            </button>
                        </div>
                    </div>
                </section>
                <!-- SECTION 2 -->
                <section class="s2" id="s2" data-block-color="dark-block">
                    <img class="dog" src="img/section2/dog.png" alt="pic">
                    <div class="wrapper">
                        <div class="container">
                            <div class="step step-1" data-step="0">
                                <h2 class="title">
                                    Ответьте на вопросы и узнайте <br> стоимость щенков
                                </h2>
                                <img class="line" src="img/section2/line.png" alt="pic">
                                <p class="subtitle">
                                    Выберите пол щенка
                                </p>
                                <span class="step-number">01.</span>
                                <div class="items">
                                    <div class="item" data-step-item="Мальчик">
                                        <img src="img/section2/step1/1.png" alt="pic">
                                        <img src="img/section2/step1/1-h.png" alt="pic">
                                        <div class="pic-wrap">
                                            <img src="img/section2/step1/icon-1.png" alt="pic">
                                            <img src="img/section2/step1/icon-1-hover.png" alt="pic">
                                        </div>
                                        <p class="text">
                                            Мальчик
                                        </p>
                                    </div>
                                    <div class="item" data-step-item="Девочка">
                                        <img src="img/section2/step1/2.png" alt="pic">
                                        <img src="img/section2/step1/2-h.png" alt="pic">
                                        <div class="pic-wrap">
                                            <img src="img/section2/step1/icon-2.png" alt="pic">
                                            <img src="img/section2/step1/icon-2-hover.png" alt="pic">
                                        </div>
                                        <p class="text">
                                            Девочка
                                        </p>
                                    </div>
                                    <div class="item" data-step-item="Выберу на месте">
                                        <img src="img/section2/step1/3.png" alt="pic">
                                        <img src="img/section2/step1/3-h.png" alt="pic">
                                        <div class="pic-wrap">
                                            <img src="img/section2/step1/icon-3.png" alt="pic">
                                            <img src="img/section2/step1/icon-3-hover.png" alt="pic">
                                        </div>
                                        <p class="text">
                                            Выберу <br> на месте
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="step step-2 hidden hidden-lg" data-step="1">
                                <h2 class="title">
                                    Ответьте на вопросы и узнайте <br> стоимость щенков
                                </h2>
                                <img class="line" src="img/section2/line.png" alt="pic">
                                <p class="subtitle">
                                    Планируете учавствовать в выставках?
                                </p>
                                <span class="step-number">02.</span>
                                <div class="items">
                                    <div class="item" data-step-item="Обязательно">
                                        <img src="img/section2/step2/1.png" alt="pic">
                                        <img src="img/section2/step2/1-h.png" alt="pic">
                                        <div class="pic-wrap">
                                            <img src="img/section2/step2/icon-1.png" alt="pic">
                                            <img src="img/section2/step2/icon-1-hover.png" alt="pic">
                                        </div>
                                        <p class="text">
                                            Обязательно
                                        </p>
                                    </div>
                                    <div class="item" data-step-item="Не планирую">
                                        <img src="img/section2/step2/2.png" alt="pic">
                                        <img src="img/section2/step2/2-h.png" alt="pic">
                                        <div class="pic-wrap">
                                            <img src="img/section2/step2/icon-2.png" alt="pic">
                                            <img src="img/section2/step2/icon-2-hover.png" alt="pic">
                                        </div>
                                        <p class="text">
                                            Не планирую
                                        </p>
                                    </div>
                                </div>
                                <div class="ctrl">
                                    <button class="btn btn-prev show-sm">
                                        <img src="img/section2/btn-big.png" alt="pic">
                                        <img src="img/section2/btn-big-hover.png" alt="pic">
                                        <span class="btn-text">Назад</span>
                                    </button>
                                    <button class="btn btn-prev hidden-sm">
                                        <img src="img/section2/btn-small.png" alt="pic">
                                        <img src="img/section2/btn-small-hover.png" alt="pic">
                                        <span class="btn-text">Назад</span>
                                    </button>
                                </div>
                            </div>
                            <div class="step step-2 hidden show-lg" data-step="1">
                                <h2 class="title">
                                    Ответьте на вопросы и узнайте <br> стоимость щенков
                                </h2>
                                <img class="line" src="img/section2/line.png" alt="pic">
                                <p class="subtitle">
                                    Планируете учавствовать в выставках?
                                </p>
                                <span class="step-number">02.</span>
                                <div class="items">
                                    <div class="item" data-step-item="Обязательно">
                                        <img src="img/mobile/section2/1.png" alt="pic">
                                        <img src="img/mobile/section2/1-h.png" alt="pic">
                                        <div class="pic-wrap">
                                            <img src="img/section2/step2/icon-1.png" alt="pic">
                                            <img src="img/section2/step2/icon-1-hover.png" alt="pic">
                                        </div>
                                        <p class="text">
                                            Обязательно
                                        </p>
                                    </div>
                                    <div class="item" data-step-item="Не планирую">
                                        <img src="img/mobile/section2/2.png" alt="pic">
                                        <img src="img/mobile/section2/2-h.png" alt="pic">
                                        <div class="pic-wrap">
                                            <img src="img/section2/step2/icon-2.png" alt="pic">
                                            <img src="img/section2/step2/icon-2-hover.png" alt="pic">
                                        </div>
                                        <p class="text">
                                            Не планирую
                                        </p>
                                    </div>
                                </div>
                                <div class="ctrl">
                                    <button class="btn btn-prev show-sm">
                                        <img src="img/section2/btn-big.png" alt="pic">
                                        <img src="img/section2/btn-big-hover.png" alt="pic">
                                        <span class="btn-text">Назад</span>
                                    </button>
                                    <button class="btn btn-prev hidden-sm">
                                        <img src="img/section2/btn-big.png" alt="pic">
                                        <img src="img/section2/btn-big-hover.png" alt="pic">
                                        <span class="btn-text">Назад</span>
                                    </button>
                                </div>
                            </div>
                            <div class="step step-3 hidden" data-step="2">
                                <h2 class="title">
                                    Введите свой телефон и мы пришлем Вам <br> на WhatsApp фото щенков, которые сейчас <br> в клубе их стоимость
                                </h2>
                                <span class="step-number">03.</span>
                                <form class="form" name="form1" action="ajax/mail.php" method="post">
                                    <input class="input" name="phone" data-required type="text" placeholder="Телефон">
                                    <input name="result" type="hidden">
                                    <input name="frmid" type="hidden">
                                    <button class="btn show-sm">
                                        <img src="img/section2/form/form-btn.png" alt="pic">
                                        <img src="img/section2/form/form-btn-hover.png" alt="pic">
                                        <span class="btn-text">Получить фото и стоимость</span>
                                    </button>
                                    <button class="btn hidden-sm">
                                        <img src="img/mobile/section2/btn.png" alt="pic">
                                        <img src="img/mobile/section2/btn-hover.png" alt="pic">
                                        <span class="btn-text">Получить фото и стоимость</span>
                                    </button>
                                </form>
                                <div class="ctrl">
                                    <button class="btn btn-prev show-sm">
                                        <img src="img/section2/btn-big.png" alt="pic">
                                        <img src="img/section2/btn-big-hover.png" alt="pic">
                                        <span class="btn-text">Назад</span>
                                    </button>
                                    <button class="btn btn-prev hidden-sm">
                                        <img src="img/section2/btn-big.png" alt="pic">
                                        <img src="img/section2/btn-big-hover.png" alt="pic">
                                        <span class="btn-text">Назад</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- SECTION 3 -->
                <section class="s3" id="s3">
                    <div class="wrapper">
                        <div class="container">
                            <h2 class="title_big">
                                Решили сэкономить на друге семьи?
                            </h2>
                            <div class="items">
                                <div class="item">
                                    <p class="item-heading">Ожидание</p>
                                    <div class="pic-wrap">
                                        <img class="pic active" src="img/section3/1.png" alt="pic">
                                        <img class="pic" src="img/section3/3.png" alt="pic">
                                        <img class="pic" src="img/section3/5.png" alt="pic">
                                    </div>
                                </div>
                                <div class="item">
                                    <p class="item-heading">Реальность</p>
                                    <div class="pic-wrap">
                                        <img class="pic active" src="img/section3/2.png" alt="pic">
                                        <img class="pic" src="img/section3/4.png" alt="pic">
                                        <img class="pic" src="img/section3/6.png" alt="pic">
                                    </div>
                                </div>
                            </div>
                            <p class="title">
                                Отличить породистого щенка может только <br> профессиональный кинолог!
                            </p>
                        </div>
                    </div>
                </section>
                <!-- SECTION 4 -->
                <section class="s4" id="s4">
                    <div class="wrapper">
                        <div class="container">
                            <h2 class="title">
                                Отзывы от наших счастливых <br> владельцев
                            </h2>
                            <div class="s4-slider">
                                <div class="slide">
                                    <div class="slide-container">
                                        <div class="video">
                                            <a class="play" href="afveZufjeW0">
                                                <img src="img/section1/play-button.png" alt="pic">
                                                <img src="img/section1/play-button-hover.png" alt="pic">
                                            </a>
                                            <div class="video-container"></div>
                                        </div>
                                        <div class="comment">
                                            <div class="head">
                                                <img class="avatar" src="img/section4/avatar.png" alt="pic">
                                                <div>
                                                    <p class="name">
                                                        Казимир Малевич
                                                    </p>
                                                    <span class="profession">
                                                        Художник
                                                    </span>
                                                </div>
                                            </div>
                                            <p class="text">
                                                Украинский и советский художник-авангардист польского происхождения, педагог, теоретик искусства, философ. Основоположник супрематизма — одного из ранних проявлений искусства.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div class="slide-container">
                                        <div class="video">
                                            <a class="play" href="afveZufjeW0">
                                                <img src="img/section1/play-button.png" alt="pic">
                                                <img src="img/section1/play-button-hover.png" alt="pic">
                                            </a>
                                            <div class="video-container"></div>
                                        </div>
                                        <div class="comment">
                                            <div class="head">
                                                <img class="avatar" src="img/section4/avatar.png" alt="pic">
                                                <div>
                                                    <p class="name">
                                                        Казимир Малевич
                                                    </p>
                                                    <span class="profession">
                                                        Художник
                                                    </span>
                                                </div>
                                            </div>
                                            <p class="text">
                                                Украинский и советский художник-авангардист польского происхождения, педагог, теоретик искусства, философ. Основоположник супрематизма — одного из ранних проявлений искусства.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- SECTION 5 -->
                <section class="s5" id="s5">
                    <div class="wrapper">
                        <div class="container">
                            <h2 class="title">
                                Щенки, которые на сегодняшний день в клубе
                            </h2>
                            <p class="subtitle">
                                Зарезервируйте своего щенка на 3 дня прямо сейчас!
                            </p>
                            <div class="s5-slider">
                                <div class="slide">
                                    <div class="video" data-bg-pic="img/section5/1.png">
                                        <a class="play" href="afveZufjeW0">
                                            <img src="img/section1/play-button.png" alt="pic">
                                            <img src="img/section1/play-button-hover.png" alt="pic">
                                        </a>
                                        <div class="video-container"></div>
                                        <div class="description hidden-lg">
                                            <p class="heading">
                                                Здесь будет заголовок
                                            </p>
                                            <p class="text">
                                                Родиной йоркширского терьера являются графства Йоркшир и Ланкашир в северной Англии. Его возможными предком называют уотерсайдского терьера. Эта порода была популярна
                                            </p>
                                        </div>
                                    </div>
                                    <div class="description show-lg">
                                        <p class="heading">
                                            Здесь будет заголовок
                                        </p>
                                        <p class="text">
                                            Родиной йоркширского терьера являются графства Йоркшир и Ланкашир в северной Англии. Его возможными предком называют уотерсайдского терьера. Эта порода была популярна
                                        </p>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div class="video" data-bg-pic="img/section5/1.png">
                                        <a class="play" href="afveZufjeW0">
                                            <img src="img/section1/play-button.png" alt="pic">
                                            <img src="img/section1/play-button-hover.png" alt="pic">
                                        </a>
                                        <div class="video-container"></div>
                                        <div class="description hidden-lg">
                                            <p class="heading">
                                                Здесь будет заголовок
                                            </p>
                                            <p class="text">
                                                Родиной йоркширского терьера являются графства Йоркшир и Ланкашир в северной Англии. Его возможными предком называют уотерсайдского терьера. Эта порода была популярна
                                            </p>
                                        </div>
                                    </div>
                                    <div class="description show-lg">
                                        <p class="heading">
                                            Здесь будет заголовок
                                        </p>
                                        <p class="text">
                                            Родиной йоркширского терьера являются графства Йоркшир и Ланкашир в северной Англии. Его возможными предком называют уотерсайдского терьера. Эта порода была популярна
                                        </p>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div class="video" data-bg-pic="img/section5/1.png">
                                        <a class="play" href="afveZufjeW0">
                                            <img src="img/section1/play-button.png" alt="pic">
                                            <img src="img/section1/play-button-hover.png" alt="pic">
                                        </a>
                                        <div class="video-container"></div>
                                        <div class="description hidden-lg">
                                            <p class="heading">
                                                Здесь будет заголовок
                                            </p>
                                            <p class="text">
                                                Родиной йоркширского терьера являются графства Йоркшир и Ланкашир в северной Англии. Его возможными предком называют уотерсайдского терьера. Эта порода была популярна
                                            </p>
                                        </div>
                                    </div>
                                    <div class="description show-lg">
                                        <p class="heading">
                                            Здесь будет заголовок
                                        </p>
                                        <p class="text">
                                            Родиной йоркширского терьера являются графства Йоркшир и Ланкашир в северной Англии. Его возможными предком называют уотерсайдского терьера. Эта порода была популярна
                                        </p>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div class="video" data-bg-pic="img/section5/1.png">
                                        <a class="play" href="afveZufjeW0">
                                            <img src="img/section1/play-button.png" alt="pic">
                                            <img src="img/section1/play-button-hover.png" alt="pic">
                                        </a>
                                        <div class="video-container"></div>
                                        <div class="description hidden-lg">
                                            <p class="heading">
                                                Здесь будет заголовок
                                            </p>
                                            <p class="text">
                                                Родиной йоркширского терьера являются графства Йоркшир и Ланкашир в северной Англии. Его возможными предком называют уотерсайдского терьера. Эта порода была популярна
                                            </p>
                                        </div>
                                    </div>
                                    <div class="description show-lg">
                                        <p class="heading">
                                            Здесь будет заголовок
                                        </p>
                                        <p class="text">
                                            Родиной йоркширского терьера являются графства Йоркшир и Ланкашир в северной Англии. Его возможными предком называют уотерсайдского терьера. Эта порода была популярна
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <form class="form" action="ajax/mail.php" method="post">
                                <input class="input" name="phone" data-required type="text" placeholder="Телефон">
                                <input name="result" type="hidden">
                                <input name="frmid" type="hidden" value="form2">
                                <button class="btn show-lg">
                                    <img src="img/mobile/section2/btn.png" alt="pic">
                                    <img src="img/mobile/section2/btn-hover.png" alt="pic">
                                    <span class="btn-text">Зарезервировать</span>
                                </button>
                                <button class="btn hidden-lg">
                                    <img src="img/section5/btn.png" alt="pic">
                                    <img src="img/section5/btn-hover.png" alt="pic">
                                    <span class="btn-text">Зарезервировать</span>
                                </button>
                            </form>
                        </div>
                    </div>
                </section>
                <!-- SECTION 6 -->
                <section class="s6" id="s6" data-block-color="dark-block">
                    <div class="wrapper">
                        <div class="container">
                            <h2 class="title_big">С нами очень удобно</h2>
                            <div class="items">
                                <div class="item">
                                    <div class="pic-wrap hidden-sm">
                                        <img src="img/section6/1.png" alt="pic">
                                    </div>
                                    <div class="pic-wrap show-sm">
                                        <img src="img/mobile/section6/1.png" alt="pic">
                                    </div>
                                    <p class="heading">
                                        Возможность резерва
                                    </p>
                                    <p class="text">
                                        Если Вы выбрали себе щенка, но не имеете возможности его забрать, вы можете зарезервировать его и оставить у нас на определенный срок.
                                    </p>
                                </div>
                                <div class="item">
                                    <div class="pic-wrap hidden-sm">
                                        <img src="img/section6/2.png" alt="pic">
                                    </div>
                                    <div class="pic-wrap show-sm">
                                        <img src="img/mobile/section6/2.png" alt="pic">
                                    </div>
                                    <p class="heading">
                                        Доставка
                                    </p>
                                    <p class="text">
                                        Если Вы проживаете в другом регионе, мы возьмем на себя оформление ветеринарных документов и организуем доставку выбранного Вами щенка.
                                    </p>
                                </div>
                                <div class="item">
                                    <div class="pic-wrap hidden-sm">
                                        <img src="img/section6/3.png" alt="pic">
                                    </div>
                                    <div class="pic-wrap show-sm">
                                        <img src="img/mobile/section6/3.png" alt="pic">
                                    </div>
                                    <p class="heading">
                                        Решили сэкономить?
                                    </p>
                                    <p class="text">
                                        Приобретая друга семьи на 15 лет, не стоит в первую очередь решать проблему экономии. Данное финансовое вложение является разовым.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- SECTION 7 -->
                <section class="s7" id="s7">
                    <img class="dog" src="img/section7/dog.png" alt="pic">
                    <div class="wrapper">
                        <div class="container">
                            <h2 class="title_big">Самые популярные вопросы</h2>
                            <label class="tab">
                                <input name="tab" type="radio">
                                <p class="tab-heading">
                                    <span>
                                        <img src="img/section7/tab-icon.png" alt="pic">
                                        <img src="img/section7/tab-icon-hover.png" alt="pic">
                                    </span>
                                    В случае возникновения у Вас проблем личного характера Вы смогу ли я вернуть собаку?
                                </p>
                                <p class="tab-text">
                                    Приобретая друга семьи на 15 лет, не стоит в первую очередь решать проблему экономии. Данное финансовое вложение является разовым. Вас могут ожидать более внушительные траты, на лечение больного щенка, да и выращивание собаки,
                                </p>
                            </label>
                            <label class="tab">
                                <p class="tab-heading">
                                    <span>
                                        <img src="img/section7/tab-icon.png" alt="pic">
                                        <img src="img/section7/tab-icon-hover.png" alt="pic">
                                    </span>
                                    Присутствует ли сопровождение и информационной поддержки на протяжении всей жизни собаки?
                                </p>
                                <input name="tab" type="radio">
                                <p class="tab-text">
                                    Приобретая друга семьи на 15 лет, не стоит в первую очередь решать проблему экономии. Данное финансовое вложение является разовым. Вас могут ожидать более внушительные траты, на лечение больного щенка, да и выращивание собаки,
                                </p>
                            </label>
                            <label class="tab">
                                <p class="tab-heading">
                                    <span>
                                        <img src="img/section7/tab-icon.png" alt="pic">
                                        <img src="img/section7/tab-icon-hover.png" alt="pic">
                                    </span>
                                    Есть ли риск купить щенка с недостатками по здоровью?
                                </p>
                                <input name="tab" type="radio">
                                <p class="tab-text">
                                    Приобретая друга семьи на 15 лет, не стоит в первую очередь решать проблему экономии. Данное финансовое вложение является разовым. Вас могут ожидать более внушительные траты, на лечение больного щенка, да и выращивание собаки,
                                </p>
                            </label>
                            <label class="tab">
                                <p class="tab-heading">
                                    <span>
                                        <img src="img/section7/tab-icon.png" alt="pic">
                                        <img src="img/section7/tab-icon-hover.png" alt="pic">
                                    </span>
                                    Есть ли скидки в Вашем клубе?
                                </p>
                                <input name="tab" type="radio">
                                <p class="tab-text">
                                    Приобретая друга семьи на 15 лет, не стоит в первую очередь решать проблему экономии. Данное финансовое вложение является разовым. Вас могут ожидать более внушительные траты, на лечение больного щенка, да и выращивание собаки,
                                </p>
                            </label>
                            <div class="social">
                                <div class="show-sm mobile-links">
                                    <a class="social-link" href>
                                        <img src="img/section7/1.png" alt="pic">
                                    </a>
                                    <a class="social-link" href>
                                        <img src="img/section7/2.png" alt="pic">
                                    </a>
                                    <a class="social-link" href>
                                        <img src="img/section7/3.png" alt="pic">
                                    </a>
                                </div>
                                <a class="politics show-sm" href>Политика конфиденциальности</a>
                                <p class="rights">© 2016 · All rights reserved</p>
                                <a class="social-link hidden-sm" href>
                                    <img src="img/section7/instagram.png" alt="pic">
                                    <img src="img/section7/instagram-hover.png" alt="pic">
                                </a>
                                <a class="social-link hidden-sm" href>
                                    <img src="img/section7/vk.png" alt="pic">
                                    <img src="img/section7/vk-hover.png" alt="pic">
                                </a>
                                <a class="social-link hidden-sm" href>
                                    <img src="img/section7/facebook.png" alt="pic">
                                    <img src="img/section7/facebook-hover.png" alt="pic">
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <!-- MODAL WINDOW -->
            <div class="modal hidden">
                <div class="layout" data-btn-type="close">
                </div>
                <div class="menu">
                    <button class="close" data-btn-type="close">
                        <img src="img/modal/close.png" alt="pic">
                        <img src="img/modal/close-hover.png" alt="pic">
                    </button>
                    <ul class="menu__list">
                        <li class="menu__list-item">
                            <a href="#s1">Главная</a>
                        </li>
                        <li class="menu__list-item">
                            <a href="#s2">Узнать стоимость</a>
                        </li>
                        <li class="menu__list-item">
                            <a href="#s3">Почему нельзя экономить</a>
                        </li>
                        <li class="menu__list-item">
                            <a href="#s4">Отзывы владельцев</a>
                        </li>
                        <li class="menu__list-item">
                            <a href="#s5">Щенки в наличии</a>
                        </li>
                        <li class="menu__list-item">
                            <a href="#s6">С нами очень удобно</a>
                        </li>
                        <li class="menu__list-item">
                            <a href="#s7">Популярные вопросы</a>
                        </li>
                    </ul>
                </div>
                <div class="box-modal" id="error-pop">
                    <div class="box-modal_close arcticmodal-close">
                        <img src="img/modal/close.png" alt="pic">
                    </div>
                    Пожалуйста введите данные.
                </div>
                <div class="box-modal" id="success-pop">
                    <div class="box-modal_close arcticmodal-close">
                        <img src="img/modal/close.png" alt="pic">
                    </div>
                    <h2 class="heading">Заявка принята</h2>
                    <p class="text">
                        Мы свяжемся с вами<br> в ближайшее время
                    </p>
                </div>
            </div>
        </div>
        <!--------------------------------------------- SCRIPT ---------------------------------------------------------------->
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
        <script src="js/init.js"></script>
        <?php include('../track/body.php'); ?>
    </body>
</html>