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
            cart content (dev)
            <?/*
            <div class="cp">
                <div class="cp-content">
                    <div class="cart-quick-add">
                        <div class="cart-quick-add__search">
                            <div class="input-wrapper input-wrapper-search has-icon-l">
                                <input
                                        class="input-reset input input-secondary  testShowDropmenu01"
                                        type="search"
                                        name=""
                                        placeholder="Быстрое добавление товара"
                                >
                                <label class="input-icon input-icon-l">
                                    <svg class="icon icon-fill">
                                        <use href="img/sprite.svg#search"></use>
                                    </svg>
                                </label>
                                <button class="btn-reset btn input-delete-btn">
                                    <svg class="icon icon-fill">
                                        <use href="img/sprite.svg#cross"></use>
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <div class="cart-quick-add__results">
                            <div class="search-results">
                                <div class="search-results__header">
                                    <div class="search-results__header-top">
                                        <div class="search-results__title h4">Быстрое добавление товара</div>
                                        <div class="search-results__close  testHideDropmenu01">
                                            <svg class="icon icon-fill icon-lg">
                                                <use href="img/sprite.svg#cross"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="search-results__search">
                                        <div class="search-results__search-item">
                                            <div class="input-wrapper input-wrapper-search has-icon-l">
                                                <input
                                                        class="input-reset input has-data"
                                                        type="search"
                                                        name=""
                                                        value="геотекстиль"
                                                        placeholder="Быстрое добавление товара"
                                                >
                                                <label class="input-icon input-icon-l">
                                                    <svg class="icon icon-fill">
                                                        <use href="img/sprite.svg#search"></use>
                                                    </svg>
                                                </label>
                                                <button class="btn-reset btn input-delete-btn input-delete-btn--text">
                                                    <span class="text-content">Очистить</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="search-results__preview-title">Товары:</div>
                                </div>
                                <div class="search-results__suggest">
                                    <div class="search-results__suggest-list-wrapper">
                                        <div class="search-results__suggest-list">
                                            <a href="javascript:;" class="search-results-product">
                                                <div class="search-results-product__view">
                                                    <img
                                                            loading="lazy"
                                                            src="img/cp1.png"
                                                            class="image"
                                                            width="40"
                                                            height="40"
                                                            alt="Изображение блока"
                                                    >
                                                </div>
                                                <div class="search-results-product__descr">
                                                    <div class="search-results-product__info">
                                                        <div class="search-results-product__title">Геотекстиль для грядок, шир. 2*10 м.п</div>
                                                        <div class="search-results-product__price">
                                                            <div class="search-results-product__price-current">910,50 ₽</div>
                                                        </div>
                                                    </div>
                                                    <div class="search-results-product__cart">
                                                        <button class="btn-reset btn" type="button">
                                                            <svg class="icon icon-fill">
                                                                <use href="img/sprite.svg#shopping-cart"></use>
                                                            </svg>
                                                            <span class="text-content">В корзину</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="javascript:;" class="search-results-product">
                                                <div class="search-results-product__view">
                                                    <img
                                                            loading="lazy"
                                                            src="img/cp2.png"
                                                            class="image"
                                                            width="40"
                                                            height="40"
                                                            alt="Изображение блока"
                                                    >
                                                </div>
                                                <div class="search-results-product__descr">
                                                    <div class="search-results-product__info">
                                                        <div class="search-results-product__title">Техническая пленка 100 мкм, шир. 3х10</div>
                                                        <div class="search-results-product__price">
                                                            <div class="search-results-product__price-current">300 ₽</div>
                                                            <div class="search-results-product__price-originally">1230,50 ₽</div>
                                                        </div>
                                                    </div>
                                                    <div class="search-results-product__cart">
                                                        <button class="btn-reset btn" type="button">
                                                            <svg class="icon icon-fill">
                                                                <use href="img/sprite.svg#shopping-cart"></use>
                                                            </svg>
                                                            <span class="text-content">В корзину</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="javascript:;" class="search-results-product">
                                                <div class="search-results-product__view">
                                                    <img
                                                            loading="lazy"
                                                            src="img/cp3.png"
                                                            class="image"
                                                            width="40"
                                                            height="40"
                                                            alt="Изображение блока"
                                                    >
                                                </div>
                                                <div class="search-results-product__descr">
                                                    <div class="search-results-product__info">
                                                        <div class="search-results-product__title">Тент универсальный 80 гр, 2х3 с люверсами</div>
                                                        <div class="search-results-product__price">
                                                            <div class="search-results-product__price-current">225 ₽</div>
                                                        </div>
                                                    </div>
                                                    <div class="search-results-product__cart">
                                                        <button class="btn-reset btn" type="button">
                                                            <svg class="icon icon-fill">
                                                                <use href="img/sprite.svg#shopping-cart"></use>
                                                            </svg>
                                                            <span class="text-content">В корзину</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="javascript:;" class="search-results-product">
                                                <div class="search-results-product__view">
                                                    <img
                                                            loading="lazy"
                                                            src="img/cp1.png"
                                                            class="image"
                                                            width="40"
                                                            height="40"
                                                            alt="Изображение блока"
                                                    >
                                                </div>
                                                <div class="search-results-product__descr">
                                                    <div class="search-results-product__info">
                                                        <div class="search-results-product__title">Геотекстиль для грядок, шир. 2*10 м.п</div>
                                                        <div class="search-results-product__price">
                                                            <div class="search-results-product__price-current">910,50 ₽</div>
                                                        </div>
                                                    </div>
                                                    <div class="search-results-product__cart">
                                                        <button class="btn-reset btn" type="button">
                                                            <svg class="icon icon-fill">
                                                                <use href="img/sprite.svg#shopping-cart"></use>
                                                            </svg>
                                                            <span class="text-content">В корзину</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="javascript:;" class="search-results-product">
                                                <div class="search-results-product__view">
                                                    <img
                                                            loading="lazy"
                                                            src="img/cp2.png"
                                                            class="image"
                                                            width="40"
                                                            height="40"
                                                            alt="Изображение блока"
                                                    >
                                                </div>
                                                <div class="search-results-product__descr">
                                                    <div class="search-results-product__info">
                                                        <div class="search-results-product__title">Техническая пленка 100 мкм, шир. 3х10</div>
                                                        <div class="search-results-product__price">
                                                            <div class="search-results-product__price-current">300 ₽</div>
                                                            <div class="search-results-product__price-originally">1230,50 ₽</div>
                                                        </div>
                                                    </div>
                                                    <div class="search-results-product__cart">
                                                        <button class="btn-reset btn" type="button">
                                                            <svg class="icon icon-fill">
                                                                <use href="img/sprite.svg#shopping-cart"></use>
                                                            </svg>
                                                            <span class="text-content">В корзину</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="javascript:;" class="search-results-product">
                                                <div class="search-results-product__view">
                                                    <img
                                                            loading="lazy"
                                                            src="img/cp3.png"
                                                            class="image"
                                                            width="40"
                                                            height="40"
                                                            alt="Изображение блока"
                                                    >
                                                </div>
                                                <div class="search-results-product__descr">
                                                    <div class="search-results-product__info">
                                                        <div class="search-results-product__title">Тент универсальный 80 гр, 2х3 с люверсами</div>
                                                        <div class="search-results-product__price">
                                                            <div class="search-results-product__price-current">225 ₽</div>
                                                        </div>
                                                    </div>
                                                    <div class="search-results-product__cart">
                                                        <button class="btn-reset btn" type="button">
                                                            <svg class="icon icon-fill">
                                                                <use href="img/sprite.svg#shopping-cart"></use>
                                                            </svg>
                                                            <span class="text-content">В корзину</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="javascript:;" class="search-results-product">
                                                <div class="search-results-product__view">
                                                    <img
                                                            loading="lazy"
                                                            src="img/cp1.png"
                                                            class="image"
                                                            width="40"
                                                            height="40"
                                                            alt="Изображение блока"
                                                    >
                                                </div>
                                                <div class="search-results-product__descr">
                                                    <div class="search-results-product__info">
                                                        <div class="search-results-product__title">Геотекстиль для грядок, шир. 2*10 м.п</div>
                                                        <div class="search-results-product__price">
                                                            <div class="search-results-product__price-current">910,50 ₽</div>
                                                        </div>
                                                    </div>
                                                    <div class="search-results-product__cart">
                                                        <button class="btn-reset btn" type="button">
                                                            <svg class="icon icon-fill">
                                                                <use href="img/sprite.svg#shopping-cart"></use>
                                                            </svg>
                                                            <span class="text-content">В корзину</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="javascript:;" class="search-results-product">
                                                <div class="search-results-product__view">
                                                    <img
                                                            loading="lazy"
                                                            src="img/cp2.png"
                                                            class="image"
                                                            width="40"
                                                            height="40"
                                                            alt="Изображение блока"
                                                    >
                                                </div>
                                                <div class="search-results-product__descr">
                                                    <div class="search-results-product__info">
                                                        <div class="search-results-product__title">Техническая пленка 100 мкм, шир. 3х10</div>
                                                        <div class="search-results-product__price">
                                                            <div class="search-results-product__price-current">300 ₽</div>
                                                            <div class="search-results-product__price-originally">1230,50 ₽</div>
                                                        </div>
                                                    </div>
                                                    <div class="search-results-product__cart">
                                                        <button class="btn-reset btn" type="button">
                                                            <svg class="icon icon-fill">
                                                                <use href="img/sprite.svg#shopping-cart"></use>
                                                            </svg>
                                                            <span class="text-content">В корзину</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="javascript:;" class="search-results-product">
                                                <div class="search-results-product__view">
                                                    <img
                                                            loading="lazy"
                                                            src="img/cp3.png"
                                                            class="image"
                                                            width="40"
                                                            height="40"
                                                            alt="Изображение блока"
                                                    >
                                                </div>
                                                <div class="search-results-product__descr">
                                                    <div class="search-results-product__info">
                                                        <div class="search-results-product__title">Тент универсальный 80 гр, 2х3 с люверсами</div>
                                                        <div class="search-results-product__price">
                                                            <div class="search-results-product__price-current">225 ₽</div>
                                                        </div>
                                                    </div>
                                                    <div class="search-results-product__cart">
                                                        <button class="btn-reset btn" type="button">
                                                            <svg class="icon icon-fill">
                                                                <use href="img/sprite.svg#shopping-cart"></use>
                                                            </svg>
                                                            <span class="text-content">В корзину</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cart-list">
                        <div class="card card-product">
                            <a class="card__view" href="javascript:;">
                                <img
                                        loading="lazy"
                                        class="image"
                                        src="img/cp1.png"
                                        width="40"
                                        height="40"
                                        alt="Изображение блока"
                                >
                            </a>
                            <div class="card__descr">
                                <a class="card__title " href="javascript:;">Геотекстиль для грядок, шир. 2*10 м.п</a>

                                <div class="card__stock product-stock in-stock">
                                    <svg class="icon icon-fill">
                                        <use href="img/sprite.svg#checkbox-rec"></use>
                                    </svg>
                                    <span>Доставим завтра</span>
                                </div>

                                <div class="card__cta">
                                    <div class="card__price">
                                        <span class="card__price-current">910 ₽</span>
                                        <span class="card__price-origin">300 ₽ за рулон</span>
                                    </div>

                                    <div class="card__cart cart-buy">
                                        <div class="cart-quantity enabled">
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
                                        <button class="btn-reset btn btn-icon btn-ghost card__cart-remove" type="button" data-delete-trigger data-fancybox data-src="#modal-delete-product">
                                            <svg class="icon icon-fill">
                                                <use href="img/sprite.svg#trash"></use>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card card-product" data-removable>
                            <a class="card__view" href="javascript:;">
                                <img
                                        loading="lazy"
                                        class="image"
                                        src="img/cp2.png"
                                        width="40"
                                        height="40"
                                        alt="Изображение блока"
                                >
                            </a>
                            <div class="card__descr">
                                <a class="card__title " href="javascript:;">Техническая пленка 100 мкм, шир. 3х10</a>

                                <div class="card__stock product-stock in-stock">
                                    <svg class="icon icon-fill">
                                        <use href="img/sprite.svg#checkbox-rec"></use>
                                    </svg>
                                    <span>Доставим завтра</span>
                                </div>

                                <div class="card__cta">
                                    <div class="card__price">
                                        <span class="card__price-current">300 ₽</span>
                                        <span class="card__price-origin">300 ₽ за шт.</span>
                                    </div>

                                    <div class="card__cart cart-buy">
                                        <div class="cart-quantity enabled">
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
                                        <button class="btn-reset btn btn-icon btn-ghost card__cart-remove" type="button" data-delete-trigger>
                                            <svg class="icon icon-fill">
                                                <use href="img/sprite.svg#trash"></use>
                                            </svg>
                                        </button>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="card card-product">
                            <a class="card__view" href="javascript:;">
                                <img
                                        loading="lazy"
                                        class="image"
                                        src="img/cp3.png"
                                        width="40"
                                        height="40"
                                        alt="Изображение блока"
                                >
                            </a>
                            <div class="card__descr">
                                <a class="card__title " href="javascript:;">Тент универсальный 80 гр, 2х3 с люверсами</a>

                                <div class="card__stock product-stock in-stock">
                                    <svg class="icon icon-fill">
                                        <use href="img/sprite.svg#checkbox-rec"></use>
                                    </svg>
                                    <span>Доставим завтра</span>
                                </div>

                                <div class="card__cta">
                                    <div class="card__price">
                                        <span class="card__price-current">225 ₽</span>
                                        <span class="card__price-origin">225 ₽ за шт.</span>
                                    </div>

                                    <div class="card__cart cart-buy">
                                        <div class="cart-quantity enabled">
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
                                        <button class="btn-reset btn btn-icon btn-ghost card__cart-remove" type="button" data-delete-trigger>
                                            <svg class="icon icon-fill">
                                                <use href="img/sprite.svg#trash"></use>
                                            </svg>
                                        </button>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="card card-product">
                            <a class="card__view" href="javascript:;">
                                <img
                                        loading="lazy"
                                        class="image"
                                        src="img/cp1.png"
                                        width="40"
                                        height="40"
                                        alt="Изображение блока"
                                >
                            </a>
                            <div class="card__descr">
                                <a class="card__title " href="javascript:;">Геотекстиль Дорнит ГЕО 300 гр/м2 шир. 2х50 м.п, 100 м2 с длинным названием</a>

                                <div class="card__stock product-stock in-stock">
                                    <svg class="icon icon-fill">
                                        <use href="img/sprite.svg#checkbox-rec"></use>
                                    </svg>
                                    <span>Доставим завтра</span>
                                </div>

                                <div class="card__cta">
                                    <div class="card__price">
                                        <span class="card__price-current">5800 ₽</span>
                                        <span class="card__price-origin">5800 ₽ за шт.</span>
                                    </div>

                                    <div class="card__cart cart-buy">
                                        <div class="cart-quantity enabled">
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
                                        <button class="btn-reset btn btn-icon btn-ghost card__cart-remove" type="button" data-delete-trigger>
                                            <svg class="icon icon-fill">
                                                <use href="img/sprite.svg#trash"></use>
                                            </svg>
                                        </button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="gap-md cp-sidebar cp-content-sidebar">
                        <div class="cp-sidebar__item">
                            <div class="cp-sidebar__item-row cp-sidebar__item-row--divider cp-sidebar__item-row--divider-top">
                                <button class="btn-reset btn w-100" type="button">
                                    <span class="text-content">Перейти к оформлению</span>
                                </button>
                            </div>
                            <div class="cp-sidebar__item-row cp-sidebar__item-row--divider">
                                <table class="table-descr table-descr--sb table-descr--total">
                                    <tbody>
                                    <tr>
                                        <td>
                                            <span>Итого</span>
                                        </td>
                                        <td>
                                            <span>7950 ₽</span>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <div class="input-wrapper">
                                    <input
                                            class="input-reset input input-secondary"
                                            type="text"
                                            name=""
                                            value=""
                                            placeholder="Промокод"
                                    >
                                </div>
                            </div>
                            <div class="cp-sidebar__item-row cp-sidebar__item-row--divider">
                                <table class="table-descr table-descr--sb">
                                    <tbody>
                                    <tr>
                                        <td>
                                            <span class="fw-normal">4 товара</span>
                                        </td>
                                        <td>
                                            <span class="fw-semibold">7950 ₽</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="fw-normal">Скидки на товары</span>
                                        </td>
                                        <td>
                                            <span class="brand-color fw-semibold">-570 ₽</span>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cp-sidebar">
                    <div class="cp-sidebar__item">
                        <div class="cp-sidebar__item-row cp-sidebar__item-row--divider cp-sidebar__item-row--divider-top">
                            <button class="btn-reset btn w-100" type="button">
                                <span class="text-content">Перейти к оформлению</span>
                            </button>
                        </div>
                        <div class="cp-sidebar__item-row cp-sidebar__item-row--divider">
                            <table class="table-descr table-descr--sb table-descr--total">
                                <tbody>
                                <tr>
                                    <td>
                                        <span>Итого</span>
                                    </td>
                                    <td>
                                        <span>7950 ₽</span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <div class="input-wrapper">
                                <input
                                        class="input-reset input input-secondary"
                                        type="text"
                                        name=""
                                        value=""
                                        placeholder="Промокод"
                                >
                            </div>
                        </div>
                        <div class="cp-sidebar__item-row cp-sidebar__item-row--divider">
                            <table class="table-descr table-descr--sb">
                                <tbody>
                                <tr>
                                    <td>
                                        <span class="fw-normal">4 товара</span>
                                    </td>
                                    <td>
                                        <span class="fw-semibold">7950 ₽</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="fw-normal">Скидки на товары</span>
                                    </td>
                                    <td>
                                        <span class="brand-color fw-semibold">-570 ₽</span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>*/?>
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
                                                    <svg class="icon icon-fill">
                                                        <use href="img/sprite.svg#favourite"></use>
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
                                            <div class="card__stock product-stock in-stock">
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
                                                    <svg class="icon icon-fill">
                                                        <use href="img/sprite.svg#favourite"></use>
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
                                            <div class="card__stock product-stock in-stock">
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
                                                    <svg class="icon icon-fill">
                                                        <use href="img/sprite.svg#favourite"></use>
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
                                            <div class="card__stock product-stock in-stock">
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
                                                    <svg class="icon icon-fill">
                                                        <use href="img/sprite.svg#favourite"></use>
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
                                            <div class="card__stock product-stock in-stock">
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
                                                    <svg class="icon icon-fill">
                                                        <use href="img/sprite.svg#favourite"></use>
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
                                            <div class="card__stock product-stock in-stock">
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
                                                    <svg class="icon icon-fill">
                                                        <use href="img/sprite.svg#favourite"></use>
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
                                            <div class="card__stock product-stock in-stock">
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