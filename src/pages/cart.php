<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/components/header.php"); ?>

<div class="cart">
    <div class="block">
        <div class="container">
            <div class="cp-heading">
                <h1 class="h1 cp-heading__title">Корзина</h1>
                <div class="cp-heading__back">
                    <a class="cp-heading__back-link link" href="javascript:;">
                        <svg class="icon icon-fill">
                            <use href="img/sprite.svg#chevron-left"></use>
                        </svg>
                        <span>Назад к покупкам</span>
                    </a>
                </div>
                <div class="cp-heading__placeholder">— 12 товара</div>
            </div>
        </div>
    </div>

    <div class="block-bottom">
        <div class="container">
            <div class="cp">
                <div class="cp-content">
                    <div class="cart-list">
                        <div class="cart-toolbar js-checkall-wrap">
                            <div class="cart-toolbar-item">
                                <div class="custom-checkbox">
                                    <input id="custom-checkbox-001" class="custom-checkbox__input custom-checkbox__input--checkline js-checkall-for" type="checkbox" name="" data-checkall-for="cartCheckall">
                                    <label for="custom-checkbox-001" class="custom-checkbox__label-for">Выбрать все</label>
                                </div>
                            </div>
                            <div class="cart-toolbar-item cart-toolbar-action">
                                <button class="btn-reset cart-toolbar-btn" type="button">
                                    <svg class="icon icon-stroke">
                                        <use href="img/sprite.svg#stroke_share"></use>
                                    </svg>
                                    <span class="text-content desktop-only">Поделиться</span>
                                </button>
                                <button class="btn-reset cart-toolbar-btn cart-toolbar-btn--del" type="button">
                                    <svg class="icon icon-fill">
                                        <use href="img/colored_trash.svg#colored_trash"></use>
                                    </svg>
                                    <span class="text-content desktop-only">Удалить выбранные</span>
                                </button>
                            </div>
                        </div>

                        <div class="card card-product js-cart-card" data-removable>
                            <span class="card__check">
                                <span class="custom-checkbox">
                                    <input
                                            class="custom-checkbox__input js-checkall-group"
                                            type="checkbox"
                                            name=""
                                            data-checkall-group="cartCheckall"
                                    >
                                </span>
                            </span>
                            <a class="card__view" href="javascript:;">
                                <img
                                        loading="lazy"
                                        class="image"
                                        src="img/category-5.png"
                                        width="46"
                                        height="46"
                                        alt="Изображение блока"
                                >
                            </a>
                            <div class="card__cart-descr">
                                <div class="card__descr">
                                    <div class="card__caption">
                                        <div class="tag-list">
                                            <span class="tag">9566603</span>
                                            <span class="tag tag-mod tag--yellow">Хит сезона</span>
                                            <span class="stock in-stock">
                                            <svg class="icon icon-fill">
                                                <use href="img/sprite.svg#checkbox-rec"></use>
                                            </svg>
                                            <span>Товар в наличии</span>
                                        </span>
                                        </div>
                                    </div>
                                    <a class="card__title" href="javascript:;">Комплект садовой мебели «Краун»</a>
                                    <div class="card__info">
                                        <div class="card__compound">
                                            <span class="card__compound-text">1500x760x750 мм, 1500x470x460 мм</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card__price reduced">
                                    <div class="card__price-content">
                                        <div class="card__price-current">2 956,80
                                            <svg class="icon icon-fill icon-ruble">
                                                <use href="img/ruble_fw_bold.svg#ruble_fw_bold"></use>
                                            </svg>
                                        </div>
                                        <div class="card__price-current-addititonal">1 шт</div>
                                        <div class="card__price-originally">1 478,40
                                            <svg class="icon icon-fill icon-ruble">
                                                <use href="img/ruble_fw_normal.svg#ruble_fw_normal"></use>
                                            </svg>
                                            за шт.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card__cart cart-buy">
                                <div class="cart-quantity-wrap">
                                    <div class="cart-quantity disabled">
                                        <button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" data-value="qty-remove">
                                            <svg class="icon icon-fill">
                                                <use href="img/sprite.svg#minus"></use>
                                            </svg>
                                        </button>
                                        <input
                                                id=""
                                                class="input-reset cart-quantity-input"
                                                type="text"
                                                placeholder="999"
                                                value="1"
                                                max="999"
                                                data-mult="1"
                                        >
                                        <button class="btn-reset cart-quantity-btn cart-quantity-btn--add" data-value="qty-add">
                                            <svg class="icon icon-fill">
                                                <use href="img/sprite.svg#plus"></use>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="cart-quantity-remove">
                                        <button class="btn-reset cart-quantity-remove__btn" data-cart-quantity-remove>
                                            <svg class="icon icon-fill">
                                                <use href="img/sprite.svg#trash"></use>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card card-product js-cart-card" data-removable>
                            <span class="card__check">
                                <span class="custom-checkbox">
                                    <input
                                            class="custom-checkbox__input js-checkall-group"
                                            type="checkbox"
                                            name=""
                                            data-checkall-group="cartCheckall"
                                    >
                                </span>
                            </span>
                            <a class="card__view" href="javascript:;">
                                <img
                                        loading="lazy"
                                        class="image"
                                        src="img/category-5.png"
                                        width="46"
                                        height="46"
                                        alt="Изображение блока"
                                >
                            </a>
                            <div class="card__cart-descr">
                                <div class="card__descr">
                                    <div class="card__caption">
                                        <div class="tag-list">
                                            <span class="tag">9566603</span>
                                            <span class="tag tag-mod tag--yellow">Хит сезона</span>
                                            <span class="stock in-stock">
                                            <svg class="icon icon-fill">
                                                <use href="img/sprite.svg#checkbox-rec"></use>
                                            </svg>
                                            <span>Товар в наличии</span>
                                        </span>
                                        </div>
                                    </div>
                                    <a class="card__title" href="javascript:;">Комплект садовой мебели «Краун»</a>
                                    <div class="card__info">
                                        <div class="card__compound">
                                            <span class="card__compound-text">1500x760x750 мм, 1500x470x460 мм</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card__price reduced">
                                    <div class="card__price-content">
                                        <div class="card__price-current">2 956,80
                                            <svg class="icon icon-fill icon-ruble">
                                                <use href="img/ruble_fw_bold.svg#ruble_fw_bold"></use>
                                            </svg>
                                        </div>
                                        <div class="card__price-current-addititonal">1 шт</div>
                                        <div class="card__price-originally">1 478,40
                                            <svg class="icon icon-fill icon-ruble">
                                                <use href="img/ruble_fw_normal.svg#ruble_fw_normal"></use>
                                            </svg>
                                            за шт.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card__cart cart-buy">
                                <div class="cart-quantity-wrap">
                                    <div class="cart-quantity disabled">
                                        <button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" data-value="qty-remove">
                                            <svg class="icon icon-fill">
                                                <use href="img/sprite.svg#minus"></use>
                                            </svg>
                                        </button>
                                        <input
                                                id=""
                                                class="input-reset cart-quantity-input"
                                                type="text"
                                                placeholder="999"
                                                value="1"
                                                max="999"
                                                data-mult="1"
                                        >
                                        <button class="btn-reset cart-quantity-btn cart-quantity-btn--add" data-value="qty-add">
                                            <svg class="icon icon-fill">
                                                <use href="img/sprite.svg#plus"></use>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="cart-quantity-remove">
                                        <button class="btn-reset cart-quantity-remove__btn" data-cart-quantity-remove>
                                            <svg class="icon icon-fill">
                                                <use href="img/sprite.svg#trash"></use>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card card-product js-cart-card" data-removable>
                            <span class="card__check">
                                <span class="custom-checkbox">
                                    <input
                                            class="custom-checkbox__input js-checkall-group"
                                            type="checkbox"
                                            name=""
                                            data-checkall-group="cartCheckall"
                                    >
                                </span>
                            </span>
                            <a class="card__view" href="javascript:;">
                                <img
                                        loading="lazy"
                                        class="image"
                                        src="img/category-5.png"
                                        width="46"
                                        height="46"
                                        alt="Изображение блока"
                                >
                            </a>
                            <div class="card__cart-descr">
                                <div class="card__descr">
                                    <div class="card__caption">
                                        <div class="tag-list">
                                            <span class="tag">9566603</span>
                                            <span class="tag tag-mod tag--yellow">Хит сезона</span>
                                            <span class="stock in-stock">
                                            <svg class="icon icon-fill">
                                                <use href="img/sprite.svg#checkbox-rec"></use>
                                            </svg>
                                            <span>Товар в наличии</span>
                                        </span>
                                        </div>
                                    </div>
                                    <a class="card__title" href="javascript:;">Комплект садовой мебели «Краун»</a>
                                    <div class="card__info">
                                        <div class="card__compound">
                                            <span class="card__compound-text">1500x760x750 мм, 1500x470x460 мм</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card__price reduced">
                                    <div class="card__price-content">
                                        <div class="card__price-current">2 956,80
                                            <svg class="icon icon-fill icon-ruble">
                                                <use href="img/ruble_fw_bold.svg#ruble_fw_bold"></use>
                                            </svg>
                                        </div>
                                        <div class="card__price-current-addititonal">1 шт</div>
                                        <div class="card__price-originally">1 478,40
                                            <svg class="icon icon-fill icon-ruble">
                                                <use href="img/ruble_fw_normal.svg#ruble_fw_normal"></use>
                                            </svg>
                                            за шт.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card__cart cart-buy">
                                <div class="cart-quantity-wrap">
                                    <div class="cart-quantity disabled">
                                        <button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" data-value="qty-remove">
                                            <svg class="icon icon-fill">
                                                <use href="img/sprite.svg#minus"></use>
                                            </svg>
                                        </button>
                                        <input
                                                id=""
                                                class="input-reset cart-quantity-input"
                                                type="text"
                                                placeholder="999"
                                                value="1"
                                                max="999"
                                                data-mult="1"
                                        >
                                        <button class="btn-reset cart-quantity-btn cart-quantity-btn--add" data-value="qty-add">
                                            <svg class="icon icon-fill">
                                                <use href="img/sprite.svg#plus"></use>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="cart-quantity-remove">
                                        <button class="btn-reset cart-quantity-remove__btn" data-cart-quantity-remove>
                                            <svg class="icon icon-fill">
                                                <use href="img/sprite.svg#trash"></use>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cp-sidebar">
                    <div class="cp-sidebar__item">
                        <div class="cp-sidebar__item-row">
                            <div class="h5">Детали заказа</div>
                        </div>
                        <div class="cp-sidebar__item-row">
                            <table class="table-descr table-descr--sb table-descr--sm table-descr--primary">
                                <tbody>
                                <tr>
                                    <td>
                                        <span>4 товара</span>
                                    </td>
                                    <td>
                                        <span class="price-elem">
                                            <span>18 276</span>
                                            <svg class="icon icon-fill icon-ruble">
                                                <use href="img/ruble_fw_bold.svg#ruble_fw_bold"></use>
                                            </svg>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span>Скидки на товары</span>
                                    </td>
                                    <td>
                                        <span class="price-elem price-elem--bonus">
                                            <span>- 1 071</span>
                                            <svg class="icon icon-fill icon-ruble">
                                                <use href="img/ruble_fw_bold.svg#ruble_fw_bold"></use>
                                            </svg>
                                        </span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <table class="table-descr table-descr--sb table-descr--total table-descr--primary">
                                <tbody>
                                <tr>
                                    <td>
                                        <span>Итого</span>
                                    </td>
                                    <td>
                                        <span class="price-elem">
                                            <span>14 263</span>
                                            <svg class="icon icon-fill icon-ruble">
                                                <use href="img/ruble_fw_bold.svg#ruble_fw_bold"></use>
                                            </svg>
                                        </span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="cp-sidebar__item-row">
                            <div class="btn-g">
                                <button class="btn-reset btn btn-lg btn-primary w-100 desktop-only" type="button">
                                    <span class="text-content">Перейти к оформлению</span>
                                </button>
                                <button class="btn-reset btn btn-lg btn-extra w-100" type="button">
                                    <span class="text-content">Запросить кп</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="block-top">
        <div class="container">
            <div class="basic-hca">
                <div class="basic-hca__heading">
                    <div class="h4">С этим товаром покупают</div>
                </div>

                <div class="basic-hca__content">
                    <div class="slider-out basic-slider-wrap nav-out-wrap product-slider-wrap">
                        <div class="product-slider basic-slider nav-out swiper" data-basic-slider>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="card card-product">
                                        <div class="card__caption">
                                            <div class="tag-list">
                                                <span class="tag">9566603</span>
                                            </div>

                                            <div class="card__act">
                                                <button class="btn-reset btn card__act-btn switch-content card-tooltip" data-tippy-content="В избранное">
                                                    <svg class="icon">
                                                        <use href="img/fill-stroke_favourite.svg#fill-stroke_favourite"></use>
                                                    </svg>
                                                    <span class="text-content">В избранное</span>
                                                </button>
                                            </div>
                                        </div>
                                        <a class="card__view" href="javascript:;">
                                            <img
                                                    loading="lazy"
                                                    class="image"
                                                    src="img/product.png"
                                                    width="276"
                                                    height="212"
                                                    alt="Изображение блока"
                                            >
                                        </a>
                                        <div class="card__descr">
                                            <div class="card__stock stock in-stock">
                                                <svg class="icon icon-fill">
                                                    <use href="img/sprite.svg#checkbox-rec"></use>
                                                </svg>
                                                <span>Товар в наличии</span>
                                            </div>
                                            <a class="card__title" href="javascript:;">Комплект садовой мебели «Краун»</a>
                                            <div class="card__info">
                                                <div class="card__compound">
                                                    <span class="card__compound-title">Сталь, дерево-композит</span>
                                                    <span class="card__compound-text">1500x760x750 мм, 1500x470x460 мм</span>
                                                </div>
                                                <div class="card__price reduced discount">
                                                    <div class="card__price-title">Цена за штуку</div>
                                                    <div class="card__price-content">
                                                        <div class="card__price-current">45 500
                                                            <svg class="icon icon-fill icon-ruble">
                                                                <use href="img/ruble_fw_bold.svg#ruble_fw_bold"></use>
                                                            </svg>
                                                        </div>
                                                        <div class="card__price-discount">
                                                            <div class="card__price-originally">49 500
                                                                <svg class="icon icon-fill icon-ruble">
                                                                    <use href="img/ruble_fw_bold.svg#ruble_fw_bold"></use>
                                                                </svg>
                                                            </div>
                                                            <div class="card__price-discount-label">-30%</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card__cart cart-buy">
                                                    <button class="btn-reset btn btn-primary cart-in" type="button">
                                                        <span class="text-content">В корзину</span>
                                                    </button>
                                                    <div class="cart-quantity-wrap">
                                                        <div class="cart-quantity disabled">
                                                            <button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" data-value="qty-remove">
                                                                <svg class="icon icon-fill">
                                                                    <use href="img/sprite.svg#minus"></use>
                                                                </svg>
                                                            </button>
                                                            <input
                                                                    id=""
                                                                    class="input-reset cart-quantity-input"
                                                                    type="text"
                                                                    placeholder="999"
                                                                    value="1"
                                                                    max="999"
                                                                    data-mult="1"
                                                            >
                                                            <button class="btn-reset cart-quantity-btn cart-quantity-btn--add" data-value="qty-add">
                                                                <svg class="icon icon-fill">
                                                                    <use href="img/sprite.svg#plus"></use>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="cart-quantity-remove">
                                                            <button class="btn-reset cart-quantity-remove__btn" data-cart-quantity-remove>
                                                                <svg class="icon icon-fill">
                                                                    <use href="img/sprite.svg#trash"></use>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card card-product">
                                        <div class="card__caption">
                                            <div class="tag-list">
                                                <span class="tag">9566603</span>
                                                <span class="tag tag-mod tag--red">До 15 мая</span>
                                            </div>

                                            <div class="card__act">
                                                <button class="btn-reset btn card__act-btn switch-content card-tooltip" data-tippy-content="В избранное">
                                                    <svg class="icon">
                                                        <use href="img/fill-stroke_favourite.svg#fill-stroke_favourite"></use>
                                                    </svg>
                                                    <span class="text-content">В избранное</span>
                                                </button>
                                            </div>
                                        </div>
                                        <a class="card__view" href="javascript:;">
                                            <img
                                                    loading="lazy"
                                                    class="image"
                                                    src="img/product.png"
                                                    width="276"
                                                    height="212"
                                                    alt="Изображение блока"
                                            >
                                        </a>
                                        <div class="card__descr">
                                            <div class="card__stock stock in-stock">
                                                <svg class="icon icon-fill">
                                                    <use href="img/sprite.svg#checkbox-rec"></use>
                                                </svg>
                                                <span>Товар в наличии</span>
                                            </div>
                                            <a class="card__title" href="javascript:;">Комплект садовой мебели «Краун»</a>
                                            <div class="card__info">
                                                <div class="card__compound">
                                                    <span class="card__compound-title">Сталь, дерево-композит</span>
                                                    <span class="card__compound-text">1500x760x750 мм, 1500x470x460 мм</span>
                                                </div>
                                                <div class="card__price reduced">
                                                    <div class="card__price-title">Цена за штуку</div>
                                                    <div class="card__price-content">
                                                        <div class="card__price-current">45 500
                                                            <svg class="icon icon-fill icon-ruble">
                                                                <use href="img/ruble_fw_bold.svg#ruble_fw_bold"></use>
                                                            </svg>
                                                        </div>
                                                        <div class="card__price-originally">49 500
                                                            <svg class="icon icon-fill icon-ruble">
                                                                <use href="img/ruble_fw_normal.svg#ruble_fw_normal"></use>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card__cart cart-buy">
                                                    <button class="btn-reset btn btn-primary cart-in" type="button">
                                                        <span class="text-content">В корзину</span>
                                                    </button>
                                                    <div class="cart-quantity-wrap">
                                                        <div class="cart-quantity disabled">
                                                            <button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" data-value="qty-remove">
                                                                <svg class="icon icon-fill">
                                                                    <use href="img/sprite.svg#minus"></use>
                                                                </svg>
                                                            </button>
                                                            <input
                                                                    id=""
                                                                    class="input-reset cart-quantity-input"
                                                                    type="text"
                                                                    placeholder="999"
                                                                    value="1"
                                                                    max="999"
                                                                    data-mult="1"
                                                            >
                                                            <button class="btn-reset cart-quantity-btn cart-quantity-btn--add" data-value="qty-add">
                                                                <svg class="icon icon-fill">
                                                                    <use href="img/sprite.svg#plus"></use>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="cart-quantity-remove">
                                                            <button class="btn-reset cart-quantity-remove__btn" data-cart-quantity-remove>
                                                                <svg class="icon icon-fill">
                                                                    <use href="img/sprite.svg#trash"></use>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card card-product">
                                        <div class="card__caption">
                                            <div class="tag-list">
                                                <span class="tag">9566603</span>
                                                <span class="tag tag-mod tag--yellow">Выбор покупателей</span>
                                            </div>

                                            <div class="card__act">
                                                <button class="btn-reset btn card__act-btn switch-content card-tooltip" data-tippy-content="В избранное">
                                                    <svg class="icon">
                                                        <use href="img/fill-stroke_favourite.svg#fill-stroke_favourite"></use>
                                                    </svg>
                                                    <span class="text-content">В избранное</span>
                                                </button>
                                            </div>
                                        </div>
                                        <a class="card__view" href="javascript:;">
                                            <img
                                                    loading="lazy"
                                                    class="image"
                                                    src="img/product.png"
                                                    width="276"
                                                    height="212"
                                                    alt="Изображение блока"
                                            >
                                        </a>
                                        <div class="card__descr">
                                            <div class="card__stock stock in-stock">
                                                <svg class="icon icon-fill">
                                                    <use href="img/sprite.svg#checkbox-rec"></use>
                                                </svg>
                                                <span>Товар в наличии</span>
                                            </div>
                                            <a class="card__title" href="javascript:;">Комплект садовой мебели «Краун»</a>
                                            <div class="card__info">
                                                <div class="card__compound">
                                                    <span class="card__compound-title">Сталь, дерево-композит</span>
                                                    <span class="card__compound-text">1500x760x750 мм, 1500x470x460 мм</span>
                                                </div>
                                                <div class="card__price">
                                                    <div class="card__price-title">Цена за штуку</div>
                                                    <div class="card__price-content">
                                                        <div class="card__price-current">45 500
                                                            <svg class="icon icon-fill icon-ruble">
                                                                <use href="img/ruble_fw_bold.svg#ruble_fw_bold"></use>
                                                            </svg>
                                                        </div>
                                                        <div class="card__price-originally">49 500
                                                            <svg class="icon icon-fill icon-ruble">
                                                                <use href="img/ruble_fw_normal.svg#ruble_fw_normal"></use>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card__cart cart-buy">
                                                    <button class="btn-reset btn btn-primary cart-in" type="button">
                                                        <span class="text-content">В корзину</span>
                                                    </button>
                                                    <div class="cart-quantity-wrap">
                                                        <div class="cart-quantity disabled">
                                                            <button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" data-value="qty-remove">
                                                                <svg class="icon icon-fill">
                                                                    <use href="img/sprite.svg#minus"></use>
                                                                </svg>
                                                            </button>
                                                            <input
                                                                    id=""
                                                                    class="input-reset cart-quantity-input"
                                                                    type="text"
                                                                    placeholder="999"
                                                                    value="1"
                                                                    max="999"
                                                                    data-mult="1"
                                                            >
                                                            <button class="btn-reset cart-quantity-btn cart-quantity-btn--add" data-value="qty-add">
                                                                <svg class="icon icon-fill">
                                                                    <use href="img/sprite.svg#plus"></use>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="cart-quantity-remove">
                                                            <button class="btn-reset cart-quantity-remove__btn" data-cart-quantity-remove>
                                                                <svg class="icon icon-fill">
                                                                    <use href="img/sprite.svg#trash"></use>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card card-product">
                                        <div class="card__caption">
                                            <div class="tag-list">
                                                <span class="tag">9566603</span>
                                            </div>

                                            <div class="card__act">
                                                <button class="btn-reset btn card__act-btn switch-content card-tooltip" data-tippy-content="В избранное">
                                                    <svg class="icon">
                                                        <use href="img/fill-stroke_favourite.svg#fill-stroke_favourite"></use>
                                                    </svg>
                                                    <span class="text-content">В избранное</span>
                                                </button>
                                            </div>
                                        </div>
                                        <a class="card__view" href="javascript:;">
                                            <img
                                                    loading="lazy"
                                                    class="image"
                                                    src="img/product.png"
                                                    width="276"
                                                    height="212"
                                                    alt="Изображение блока"
                                            >
                                        </a>
                                        <div class="card__descr">
                                            <div class="card__stock stock in-stock">
                                                <svg class="icon icon-fill">
                                                    <use href="img/sprite.svg#checkbox-rec"></use>
                                                </svg>
                                                <span>Товар в наличии</span>
                                            </div>
                                            <a class="card__title" href="javascript:;">Комплект садовой мебели «Краун»</a>
                                            <div class="card__info">
                                                <div class="card__compound">
                                                    <span class="card__compound-title">Сталь, дерево-композит</span>
                                                    <span class="card__compound-text">1500x760x750 мм, 1500x470x460 мм</span>
                                                </div>
                                                <div class="card__price">
                                                    <div class="card__price-title">Цена за штуку</div>
                                                    <div class="card__price-content">
                                                        <div class="card__price-current">45 500
                                                            <svg class="icon icon-fill icon-ruble">
                                                                <use href="img/ruble_fw_bold.svg#ruble_fw_bold"></use>
                                                            </svg>
                                                        </div>
                                                        <div class="card__price-originally">49 500
                                                            <svg class="icon icon-fill icon-ruble">
                                                                <use href="img/ruble_fw_normal.svg#ruble_fw_normal"></use>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card__cart cart-buy">
                                                    <button class="btn-reset btn btn-primary cart-in" type="button">
                                                        <span class="text-content">В корзину</span>
                                                    </button>
                                                    <div class="cart-quantity-wrap">
                                                        <div class="cart-quantity disabled">
                                                            <button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" data-value="qty-remove">
                                                                <svg class="icon icon-fill">
                                                                    <use href="img/sprite.svg#minus"></use>
                                                                </svg>
                                                            </button>
                                                            <input
                                                                    id=""
                                                                    class="input-reset cart-quantity-input"
                                                                    type="text"
                                                                    placeholder="999"
                                                                    value="1"
                                                                    max="999"
                                                                    data-mult="1"
                                                            >
                                                            <button class="btn-reset cart-quantity-btn cart-quantity-btn--add" data-value="qty-add">
                                                                <svg class="icon icon-fill">
                                                                    <use href="img/sprite.svg#plus"></use>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="cart-quantity-remove">
                                                            <button class="btn-reset cart-quantity-remove__btn" data-cart-quantity-remove>
                                                                <svg class="icon icon-fill">
                                                                    <use href="img/sprite.svg#trash"></use>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card card-product">
                                        <div class="card__caption">
                                            <div class="tag-list">
                                                <span class="tag">9566603</span>
                                            </div>

                                            <div class="card__act">
                                                <button class="btn-reset btn card__act-btn switch-content card-tooltip" data-tippy-content="В избранное">
                                                    <svg class="icon">
                                                        <use href="img/fill-stroke_favourite.svg#fill-stroke_favourite"></use>
                                                    </svg>
                                                    <span class="text-content">В избранное</span>
                                                </button>
                                            </div>
                                        </div>
                                        <a class="card__view" href="javascript:;">
                                            <img
                                                    loading="lazy"
                                                    class="image"
                                                    src="img/product.png"
                                                    width="276"
                                                    height="212"
                                                    alt="Изображение блока"
                                            >
                                        </a>
                                        <div class="card__descr">
                                            <div class="card__stock stock in-stock">
                                                <svg class="icon icon-fill">
                                                    <use href="img/sprite.svg#checkbox-rec"></use>
                                                </svg>
                                                <span>Товар в наличии</span>
                                            </div>
                                            <a class="card__title" href="javascript:;">Комплект садовой мебели «Краун»</a>
                                            <div class="card__info">
                                                <div class="card__compound">
                                                    <span class="card__compound-title">Сталь, дерево-композит</span>
                                                    <span class="card__compound-text">1500x760x750 мм, 1500x470x460 мм</span>
                                                </div>
                                                <div class="card__price">
                                                    <div class="card__price-title">Цена за штуку</div>
                                                    <div class="card__price-content">
                                                        <div class="card__price-current">45 500
                                                            <svg class="icon icon-fill icon-ruble">
                                                                <use href="img/ruble_fw_bold.svg#ruble_fw_bold"></use>
                                                            </svg>
                                                        </div>
                                                        <div class="card__price-originally">49 500
                                                            <svg class="icon icon-fill icon-ruble">
                                                                <use href="img/ruble_fw_normal.svg#ruble_fw_normal"></use>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card__cart cart-buy">
                                                    <button class="btn-reset btn btn-primary cart-in" type="button">
                                                        <span class="text-content">В корзину</span>
                                                    </button>
                                                    <div class="cart-quantity-wrap">
                                                        <div class="cart-quantity disabled">
                                                            <button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" data-value="qty-remove">
                                                                <svg class="icon icon-fill">
                                                                    <use href="img/sprite.svg#minus"></use>
                                                                </svg>
                                                            </button>
                                                            <input
                                                                    id=""
                                                                    class="input-reset cart-quantity-input"
                                                                    type="text"
                                                                    placeholder="999"
                                                                    value="1"
                                                                    max="999"
                                                                    data-mult="1"
                                                            >
                                                            <button class="btn-reset cart-quantity-btn cart-quantity-btn--add" data-value="qty-add">
                                                                <svg class="icon icon-fill">
                                                                    <use href="img/sprite.svg#plus"></use>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="cart-quantity-remove">
                                                            <button class="btn-reset cart-quantity-remove__btn" data-cart-quantity-remove>
                                                                <svg class="icon icon-fill">
                                                                    <use href="img/sprite.svg#trash"></use>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="card card-product">
                                        <div class="card__caption">
                                            <div class="tag-list">
                                                <span class="tag">9566603</span>
                                            </div>

                                            <div class="card__act">
                                                <button class="btn-reset btn card__act-btn switch-content card-tooltip" data-tippy-content="В избранное">
                                                    <svg class="icon">
                                                        <use href="img/fill-stroke_favourite.svg#fill-stroke_favourite"></use>
                                                    </svg>
                                                    <span class="text-content">В избранное</span>
                                                </button>
                                            </div>
                                        </div>
                                        <a class="card__view" href="javascript:;">
                                            <img
                                                    loading="lazy"
                                                    class="image"
                                                    src="img/product.png"
                                                    width="276"
                                                    height="212"
                                                    alt="Изображение блока"
                                            >
                                        </a>
                                        <div class="card__descr">
                                            <div class="card__stock stock in-stock">
                                                <svg class="icon icon-fill">
                                                    <use href="img/sprite.svg#checkbox-rec"></use>
                                                </svg>
                                                <span>Товар в наличии</span>
                                            </div>
                                            <a class="card__title" href="javascript:;">Комплект садовой мебели «Краун»</a>
                                            <div class="card__info">
                                                <div class="card__compound">
                                                    <span class="card__compound-title">Сталь, дерево-композит</span>
                                                    <span class="card__compound-text">1500x760x750 мм, 1500x470x460 мм</span>
                                                </div>
                                                <div class="card__price">
                                                    <div class="card__price-title">Цена за штуку</div>
                                                    <div class="card__price-content">
                                                        <div class="card__price-current">45 500
                                                            <svg class="icon icon-fill icon-ruble">
                                                                <use href="img/ruble_fw_bold.svg#ruble_fw_bold"></use>
                                                            </svg>
                                                        </div>
                                                        <div class="card__price-originally">49 500
                                                            <svg class="icon icon-fill icon-ruble">
                                                                <use href="img/ruble_fw_normal.svg#ruble_fw_normal"></use>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card__cart cart-buy">
                                                    <button class="btn-reset btn btn-primary cart-in" type="button">
                                                        <span class="text-content">В корзину</span>
                                                    </button>
                                                    <div class="cart-quantity-wrap">
                                                        <div class="cart-quantity disabled">
                                                            <button class="btn-reset cart-quantity-btn cart-quantity-btn--remove" data-value="qty-remove">
                                                                <svg class="icon icon-fill">
                                                                    <use href="img/sprite.svg#minus"></use>
                                                                </svg>
                                                            </button>
                                                            <input
                                                                    id=""
                                                                    class="input-reset cart-quantity-input"
                                                                    type="text"
                                                                    placeholder="999"
                                                                    value="1"
                                                                    max="999"
                                                                    data-mult="1"
                                                            >
                                                            <button class="btn-reset cart-quantity-btn cart-quantity-btn--add" data-value="qty-add">
                                                                <svg class="icon icon-fill">
                                                                    <use href="img/sprite.svg#plus"></use>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="cart-quantity-remove">
                                                            <button class="btn-reset cart-quantity-remove__btn" data-cart-quantity-remove>
                                                                <svg class="icon icon-fill">
                                                                    <use href="img/sprite.svg#trash"></use>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-navigation">
                            <div class="swiper-button-next">
                                <button class="btn-reset btn btn-square">
                                    <svg class="icon icon-fill">
                                        <use href="img/sprite.svg#arrow-right"></use>
                                    </svg>
                                </button>
                            </div>
                            <div class="swiper-button-prev">
                                <button class="btn-reset btn btn-square">
                                    <svg class="icon icon-fill">
                                        <use href="img/sprite.svg#arrow-left"></use>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/components/footer.php"); ?>