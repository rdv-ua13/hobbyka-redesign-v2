<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#111111">

    <title>Хоббика - производство садовой и парковой мебели!</title>

    <link rel="preload" href="fonts/Manrope-Regular.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="fonts/Manrope-SemiBold.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="fonts/Manrope-Medium.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="fonts/Manrope-Bold.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="fonts/Inter-Light.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="fonts/Inter-Regular.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="fonts/Inter-SemiBold.ttf" as="font" type="font/ttf" crossorigin>
    <link rel="preload" href="fonts/Inter-Bold.ttf" as="font" type="font/ttf" crossorigin>

    <link rel="stylesheet" href="css/main.css" type="text/css">

    <?/* Подключение библиотек (отдельно)*/?>
    <script defer src="js/jquery.js"></script>                  <!-- jquery -->
	<?/*<script defer src="js/jquery.maskedinput.js"></script>      <!-- maskedinput -->*/?>
    <?/*<script defer src="js/jquery.validate.js"></script>         <!-- validate -->*/?>
    <?/*<script defer src="js/messages_ru.js"></script>             <!-- validate -->*/?>
    <script defer src="js/popper.js"></script>                  <!-- popper -->
    <script defer src="js/swiper-bundle.js"></script>           <!-- swiper -->
    <script defer src="js/tippy-bundle.umd.js"></script>        <!-- tippy -->
    <script defer src="js/fancybox.umd.js"></script>            <!-- fancybox -->
    <script defer src="js/select2.js"></script>                 <!-- select2 -->
    <script defer src="js/readmore.js"></script>                <!-- readmore -->
    <?/*<script defer src="js/flatpickr.min.js"></script>           <!-- flatpickr -->*/?>
    <?/*<script defer src="js/ru.js"></script>                      <!-- flatpickr -->*/?>
    <?/*<script defer src="js/nouislider.js"></script>              <!-- nouislider -->*/?>
    <?/*<script defer src="js/accordion.js"></script>               <!-- accordion -->*/?>
    <?/*<script defer src="js/sticky.min.js"></script>              <!-- sticky -->*/?>

	<?/* Подключение библиотек (объединённо)
    <script defer src="js/libs.min.js"></script> */?>

    <script defer src="js/main.js"></script>
</head>

<? if (strpos($_SERVER["REQUEST_URI"], "index.php")) : ?>
<body class="index">
<? else : ?>
<body>
<? endif; ?>
<header class="header fixed-block">
    <div class="header-top">
        <div class="container header-container">
            <div class="header-mobile-menu">
                <button
                        class="btn-reset burger"
                        aria-label="Открыть меню"
                        aria-expanded="false"
                        data-menu-spoiler
                        data-overlay
                >
                    <svg class="icon icon-fill">
                        <use href="img/sprite.svg#menu"></use>
                    </svg>
                </button>

                <div class="header-logo">
                    <a class="logo" href="javascript:;">
                        <img
                                loading="lazy"
                                class="image"
                                src="img/sprite.svg#logo-light"
                                width="84"
                                height="42"
                                alt="Хоббика - производство садовой и парковой мебели!"
                        >
                    </a>
                </div>
            </div>

            <div class="header-top-nav">
                <ul class="list-reset header-top-nav__list">
                    <li><a class="header-top__link" href="javascript:;"><span class="text-content">Каталог</span></a></li>
                    <li><a class="header-top__link" href="javascript:;"><span class="text-content">Производство</span></a></li>
                    <li><a class="header-top__link" href="javascript:;"><span class="text-content">Наши работы</span></a></li>
                    <li><a class="header-top__link" href="javascript:;"><span class="text-content">Дилерам</span></a></li>
                    <li><a class="header-top__link" href="javascript:;"><span class="text-content">Инфоцентр</span></a></li>
                    <li><a class="header-top__link" href="javascript:;"><span class="text-content">Услуги</span></a></li>
                    <li><a class="header-top__link" href="javascript:;"><span class="text-content">Контакты</span></a></li>
                </ul>
            </div>

            <div class="header-social social">
                <ul class="list-reset social__list">
                    <li>
                        <a href="javascript:;" target="_blank" aria-label="Наша страничка в WhatsApp">
                            <img
                                    loading="lazy"
                                    class="image"
                                    src="img/soc-wa.png"
                                    width="24"
                                    height="24"
                                    alt="Изображение блока"
                            >
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" target="_blank" aria-label="Наша страничка в Telegram">
                            <img
                                    loading="lazy"
                                    class="image"
                                    src="img/soc-tg.png"
                                    width="24"
                                    height="24"
                                    alt="Изображение блока"
                            >
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" target="_blank" aria-label="Напишите нам на почту">
                            <img
                                    loading="lazy"
                                    class="image"
                                    src="img/soc-email.png"
                                    width="24"
                                    height="24"
                                    alt="Изображение блока"
                            >
                        </a>
                    </li>
                </ul>
            </div>

            <div class="header-contacts">
                <a class="header-contacts__item header-contacts__tel" href="tel:+74956467094">
                    <svg class="icon icon-fill">
                        <use href="img/call.svg#call"></use>
                    </svg>
                    <span class="text-content">+7 495 646-70-94</span>
                </a>
            </div>
        </div>
    </div>

    <div class="header-nav">
        <div class="container header-container header-nav-container">
            <div class="header-main">
                <a class="header-logo logo" href="javascript:;">
                    <img
                            loading="lazy"
                            class="image"
                            src="img/logo.svg#logo"
                            width="175"
                            height="50"
                            alt="Хоббика - производство садовой и парковой мебели!"
                    >
                </a>

                <div class="header-search">
                    <form id="" method="" action="javascript:;">
                        <div class="input-wrapper has-icon-l">
                            <input
                                    id="ui-input-search-example-1"
                                    class="input-reset input input-search"
                                    type="text"
                                    name=""
                                    value=""
                                    placeholder="Скамейка или 14232 (артикул)..."
                            >
                            <label for="ui-input-search-example-1" class="input-icon input-icon-l c-pointer">
                                <svg class="icon icon-md icon-fill">
                                    <use href="img/sprite.svg#search"></use>
                                </svg>
                            </label>
                            <button class="btn-reset btn btn-sm btn-primary" type="button">
                                <span class="text-content">Найти</span>
                            </button>
                        </div>
                    </form>
                </div>

                <div class="header-profile">
                    <ul class="list-reset header-profile__list">
                        <li>
                            <button class="btn-reset btn btn-header" data-fancybox data-src="#modal-auth">
                                <svg class="icon icon-fill">
                                    <use href="img/sprite.svg#filled-user"></use>
                                </svg>
								<?/*<span class="text-content">Войти</span>*/?>
                            </button>
                        </li>
                        <li>
                            <button class="btn-reset btn btn-header">
                                <span class="btn-header__count">1</span>
                                <svg class="icon icon-fill">
                                    <use href="img/sprite.svg#filled-favourite"></use>
                                </svg>
                                <?/*<span class="text-content">Избранное</span>*/?>
                            </button>
                        </li>
                        <li>
                            <button class="btn-reset btn btn-header">
                                <span class="btn-header__count">1</span>
                                <svg class="icon icon-fill">
                                    <use href="img/sprite.svg#filled-cart"></use>
                                </svg>
                                <?/*<span class="text-content price">152 800 ₽</span>*/?>
                            </button>
                        </li>
                    </ul>
                </div>

                <div class="header-categories">
                    <a class="btn-reset btn btn-primary header-categories__catalog" href="javascript:;">
                        <svg class="icon icon-fill">
                            <use href="img/sprite.svg#catalog"></use>
                        </svg>
                        <span class="text-content">Каталог</span>
                    </a>
                    <?/*<div class="tag-wrapper slider-out basic-slider-wrap">
                        <div class="tag-bar basic-slider basic-slider-overflow-visible swiper" data-tag-bar-slider>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide tag-bar__item">
                                    <label class="tag-wrapper">
                                        <input
                                                class="visually-hidden"
                                                type="checkbox"
                                                name="CATALOG_CATEGORIES[]"
                                                value=""
                                        >
                                        <span class="tag">
                                            <span>Скамейки</span>
                                        </span>
                                    </label>
                                </div>
                                <div class="swiper-slide tag-bar__item">
                                    <label class="tag-wrapper">
                                        <input
                                                class="visually-hidden"
                                                type="checkbox"
                                                name="CATALOG_CATEGORIES[]"
                                                value=""
                                        >
                                        <span class="tag">
                                            <span>Урны</span>
                                        </span>
                                    </label>
                                </div>
                                <div class="swiper-slide tag-bar__item">
                                    <label class="tag-wrapper">
                                        <input
                                                class="visually-hidden"
                                                type="checkbox"
                                                name="CATALOG_CATEGORIES[]"
                                                value=""
                                        >
                                        <span class="tag">
                                            <span>навесы</span>
                                        </span>
                                    </label>
                                </div>
                                <div class="swiper-slide tag-bar__item">
                                    <label class="tag-wrapper">
                                        <input
                                                class="visually-hidden"
                                                type="checkbox"
                                                name="CATALOG_CATEGORIES[]"
                                                value=""
                                        >
                                        <span class="tag">
                                            <span>детские игровые</span>
                                        </span>
                                    </label>
                                </div>
                                <div class="swiper-slide tag-bar__item">
                                    <label class="tag-wrapper">
                                        <input
                                                class="visually-hidden"
                                                type="checkbox"
                                                name="CATALOG_CATEGORIES[]"
                                                value=""
                                        >
                                        <span class="tag">
                                            <span>дачная мебель</span>
                                        </span>
                                    </label>
                                </div>
                                <div class="swiper-slide tag-bar__item">
                                    <label class="tag-wrapper">
                                        <input
                                                class="visually-hidden"
                                                type="checkbox"
                                                name="CATALOG_CATEGORIES[]"
                                                value=""
                                        >
                                        <span class="tag tag--yellow">
                                            <span>Мебель для кафе</span>
                                        </span>
                                    </label>
                                </div>
                                <div class="swiper-slide tag-bar__item">
                                    <label class="tag-wrapper">
                                        <input
                                                class="visually-hidden"
                                                type="checkbox"
                                                name="CATALOG_CATEGORIES[]"
                                                value=""
                                        >
                                        <span class="tag tag--green">
                                            <span>Контейнерные площадки</span>
                                        </span>
                                    </label>
                                </div>
                                <div class="swiper-slide tag-bar__item">
                                    <label class="tag-wrapper">
                                        <input
                                                class="visually-hidden"
                                                type="checkbox"
                                                name="CATALOG_CATEGORIES[]"
                                                value=""
                                        >
                                        <span class="tag tag--green">
                                            <span>в наличии</span>
                                        </span>
                                    </label>
                                </div>
                                <div class="swiper-slide tag-bar__item">
                                    <label class="tag-wrapper">
                                        <input
                                                class="visually-hidden"
                                                type="checkbox"
                                                name="CATALOG_CATEGORIES[]"
                                                value=""
                                        >
                                        <span class="tag tag--green">
                                            <span>Еще...</span>
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>*/?>
                    <div class="header-categories__list">
                        <a class="btn-reset btn header-categories__item" href="javascript:;">
                            <span class="text-content">Скамейки</span>
                        </a>
                        <a class="btn-reset btn header-categories__item" href="javascript:;">
                            <span class="text-content">Урны</span>
                        </a>
                        <a class="btn-reset btn header-categories__item" href="javascript:;">
                            <span class="text-content">навесы</span>
                        </a>
                        <a class="btn-reset btn header-categories__item" href="javascript:;">
                            <span class="text-content">детские игровые</span>
                        </a>
                        <a class="btn-reset btn header-categories__item" href="javascript:;">
                            <span class="text-content">дачная мебель</span>
                        </a>
                        <a class="btn-reset btn header-categories__item" href="javascript:;">
                            <span class="text-content">Мебель для кафе</span>
                        </a>
                        <a class="btn-reset btn header-categories__item" href="javascript:;">
                            <span class="text-content">Контейнерные площадки</span>
                        </a>
                        <a class="btn-reset btn header-categories__item" href="javascript:;">
                            <span class="text-content">в наличии</span>
                        </a>
                        <a class="btn-reset btn header-categories__item" href="javascript:;">
                            <span class="text-content">Еще...</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="mobile-menu" data-menu>
    <div class="mobile-menu-close" data-menu-close>
        <svg class="icon icon-fill">
            <use href="img/sprite.svg#cross"></use>
        </svg>
    </div>

    <div class="mobile-menu-header">
        <div class="mobile-menu-container">
            <div class="header-logo">
                <a class="logo" href="javascript:;">
                    <img
                            loading="lazy"
                            class="image"
                            src="img/sprite.svg#logo-dark"
                            width="116"
                            height="58"
                            alt="Хоббика - производство садовой и парковой мебели!"
                    >
                </a>
                <div class="logo-text fz-caption">Оборудование<br> для блаугоустройства<br> от производителя</div>
            </div>

            <div class="mobile-menu-contacts">
                <div class="header-contacts">
                    <a class="header-contacts__tel" href="tel:+88003333778"><span>8 800 333-37-78</span></a>
                    <a class="header-contacts__office link link-tdu link-dashed" href="javascript:;"><span>Все офисы</span></a>
                </div>

                <div class="header-social social">
                    <ul class="list-reset social__list">
                        <li>
                            <a href="javascript:;" target="_blank" aria-label="Наша страничка в Telegram">
                                <svg class="icon icon-fill">
                                    <use href="img/sprite.svg#soc-tg"></use>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" target="_blank" aria-label="Наша страничка в Whatsapp">
                                <svg class="icon icon-fill">
                                    <use href="img/sprite.svg#soc-wa"></use>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <ul class="list-reset mobile-menu-list">
        <li>
            <div class="dropdown-container">
                <a class="mobile-menu__item mobile-menu__link link link-dropdown dropdown-spoiler" href="javascript:;">
                    <span class="text-content">Покупателям</span>
                    <svg class="icon icon-sm icon-fill">
                        <use href="img/sprite.svg#chevron-down"></use>
                    </svg>
                </a>
				<?/*<ul class="list-reset dropdown-menu">
                                <li>
                                    <a href="javascript:;" class="link link-primary">
                                        <span>Название</span>
                                        <svg class="icon icon-fill">
                                            <use href="img/sprite.svg#chevron-down"></use>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;" class="link link-primary">
                                        <span>Название</span>
                                        <svg class="icon icon-fill">
                                            <use href="img/sprite.svg#chevron-down"></use>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;" class="link link-primary">
                                        <span>Название</span>
                                        <svg class="icon icon-fill">
                                            <use href="img/sprite.svg#chevron-down"></use>
                                        </svg>
                                    </a>
                                </li>
                            </ul>*/?>
            </div>
        </li>
        <li><a class="mobile-menu__item mobile-menu__link" href="javascript:;"><span>Корпоративным клиентам</span></a></li>
        <li><a class="mobile-menu__item mobile-menu__link" href="javascript:;"><span>Наше производство</span></a></li>
        <li><a class="mobile-menu__item mobile-menu__link" href="javascript:;"><span>Инфоцентр</span></a></li>
        <li><a class="mobile-menu__item mobile-menu__link" href="javascript:;"><span>Контакты</span></a></li>
    </ul>

    <div class="mobile-menu-footer">
        <div class="mobile-menu-container">
            <div class="mobile-menu-login">
                <button class="btn-reset btn btn-md btn-secondary" data-fancybox data-src="#modal-auth">
                    <span class="text-content">Войти</span>
                </button>
                <button class="btn-reset btn btn-md btn-light" data-fancybox data-src="#modal-reg">
                    <span class="text-content">Регистрация</span>
                </button>
            </div>
        </div>
    </div>
</div>

<div class="mobile-menu-panel">
    <div class="mobile-menu-panel__toolbar">
        <ul class="list-reset mobile-menu-panel__list">
            <li>
                <a class="btn-reset btn btn-header active" href="javascript:;">
                    <svg class="icon icon-fill">
                        <use href="img/sprite.svg#filled-home"></use>
                    </svg>
                    <span class="text-content">Главная</span>
                </a>
            </li>
            <li>
                <a class="btn-reset btn btn-header" href="javascript:;">
                    <svg class="icon icon-fill">
                        <use href="img/sprite.svg#filled-catalog"></use>
                    </svg>
                    <span class="text-content">Каталог</span>
                </a>
            </li>
            <li>
                <button class="btn-reset btn btn-header">
                    <span class="btn-header__count">16</span>
                    <svg class="icon icon-fill">
                        <use href="img/sprite.svg#filled-heart"></use>
                    </svg>
                    <span class="text-content">Избранное</span>
                </button>
            </li>
            <li>
                <button class="btn-reset btn btn-header">
                    <span class="btn-header__count">2</span>
                    <svg class="icon icon-fill">
                        <use href="img/sprite.svg#filled-cart"></use>
                    </svg>
                    <span class="text-content price">152 800 ₽</span>
                </button>
            </li>
            <li>
                <button class="btn-reset btn btn-header" data-fancybox data-src="#modal-auth">
                    <svg class="icon icon-fill">
                        <use href="img/sprite.svg#filled-user"></use>
                    </svg>
                    <span class="text-content">Войти</span>
                </button>
            </li>
        </ul>
    </div>
</div>

<main class="main">