<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/components/header.php"); ?>

<div class="cart commercial-offer">
	<div class="block">
		<div class="container">
			<div class="cp-heading">
				<h1 class="h1 cp-heading__title">Коммерческое предложение</h1>
				<div class="cp-heading__back">
					<a class="cp-heading__back-link link" href="javascript:;">
						<svg class="icon icon-fill">
							<use href="img/sprite.svg#chevron-left"></use>
						</svg>
						<span>Назад</span>
					</a>
				</div>
			</div>
		</div>
	</div>

	<div class="block-bottom">
		<div class="container">
			<div class="cp">
				<div class="cp-content">
                    <div class="cart-board">
                        <div class="cart-board__item">
                            <form action="" method="" class="recipient-data">
                                <div class="h4">Данные получателя</div>
                                <div class="recipient-data__row">
                                    <div class="recipient-data__item">
                                        <div class="titled-input">
                                            <div class="input-title">Название компании</div>
                                            <div class="input-wrapper">
                                                <input
                                                        class="input-reset input input-secondary"
                                                        type="text"
                                                        name=""
                                                        value=""
                                                        placeholder="Например ООО “Любимый клиент”"
                                                        required
                                                >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="recipient-data__item">
                                        <div class="titled-input">
                                            <div class="input-title">Название объекта или город</div>
                                            <div class="input-wrapper">
                                                <input
                                                        class="input-reset input input-secondary"
                                                        type="text"
                                                        name=""
                                                        value=""
                                                        placeholder="г. Москва"
                                                        required
                                                >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="recipient-data__item">
                                        <div class="titled-input">
                                            <div class="input-title">ФИО контрактного лица</div>
                                            <div class="input-wrapper">
                                                <input
                                                        class="input-reset input input-secondary"
                                                        type="text"
                                                        name=""
                                                        value=""
                                                        placeholder="Иванов Иван Иванович"
                                                        required
                                                >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="recipient-data__item">
                                        <div class="titled-input">
                                            <div class="input-title">Телефон</div>
                                            <div class="input-wrapper">
                                                <input
                                                        class="input-reset input input-secondary isPhone"
                                                        type="text"
                                                        name=""
                                                        value=""
                                                        placeholder="+7"
                                                        required
                                                >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="recipient-data__item">
                                        <div class="titled-input">
                                            <div class="input-title">Электронная почта</div>
                                            <div class="input-wrapper">
                                                <input
                                                        class="input-reset input input-secondary"
                                                        type="email"
                                                        name=""
                                                        value=""
                                                        placeholder="ivanovivanivanovich@client.ru"
                                                >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="recipient-data__item">
                                        <div class="titled-input">
                                            <div class="input-title">Срок реализации проекта</div>
                                            <div class="input-wrapper">
                                                <input
                                                        class="input-reset input input-secondary"
                                                        type="email"
                                                        name=""
                                                        value=""
                                                        placeholder="23.09.2002"
                                                >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <form action="" method="" class="recipient-data">
                                <div class="h6">Реквизиты организации</div>
                                <div class="recipient-data__row">
                                    <div class="recipient-data__item">
                                        <div class="titled-input">
                                            <div class="input-title">ИНН</div>
                                            <div class="input-wrapper">
                                                <input
                                                        class="input-reset input input-secondary"
                                                        type="text"
                                                        name=""
                                                        value=""
                                                        placeholder="0000000000"
                                                        required
                                                >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="recipient-data__item">
                                        <div class="titled-input">
                                            <div class="input-title">ОГРН</div>
                                            <div class="input-wrapper">
                                                <input
                                                        class="input-reset input input-secondary"
                                                        type="text"
                                                        name=""
                                                        value=""
                                                        placeholder="0000000000"
                                                        required
                                                >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="recipient-data__item">
                                        <div class="titled-input">
                                            <div class="input-title">Адрес</div>
                                            <div class="input-wrapper">
                                                <input
                                                        class="input-reset input input-secondary"
                                                        type="text"
                                                        name=""
                                                        value=""
                                                        placeholder="0000000000"
                                                        required
                                                >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="cart-board__item">
                            <div class="cart-list">
                                <div class="cart-toolbar">
                                    <div class="cart-toolbar-item">
                                        <div class="h4">Состав коммерческого предложения</div>
                                    </div>
                                    <div class="cart-toolbar-item">
                                        <button class="btn-reset cart-toolbar-btn" type="button">
                                            <svg class="icon icon-stroke">
                                                <use href="img/colored_download.svg#colored_download"></use>
                                            </svg>
                                            <span class="text-content">Cкачать в Excel</span>
                                        </button>
                                        <button class="btn-reset cart-toolbar-btn" type="button">
                                            <svg class="icon icon-fill">
                                                <use href="img/colored_send.svg#colored_send"></use>
                                            </svg>
                                            <span class="text-content">Выгрузить в csv</span>
                                        </button>
                                    </div>
                                </div>

                                <div class="card card-product js-cart-card" data-removable>
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

                                <div class="cart-act">
                                    <button class="btn-reset btn btn-sm btn-extra" type="button">
                                        <svg class="icon icon-fill">
                                            <use href="img/sprite.svg#plus"></use>
                                        </svg>
                                        <span class="text-content">добавить нестандартный товар</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <button class="btn-reset btn btn-lg btn-primary" type="button">
                            <span class="text-content">Оформить коммерческое предложение</span>
                        </button>
                    </div>
				</div>
				<div class="cp-sidebar">
                    <div class="cp-sidebar__item-g">
                        <div class="cp-sidebar__item">
                            <div class="cp-sidebar__item-row">
                                <div class="h5">Тип коммерческого предложения</div>
                            </div>
                            <div class="cp-sidebar__item-row">
                                <div class="custom-radio">
                                    <input id="custom-radio-001" class="custom-radio__input" type="radio" name="commercialOfferType">
                                    <label for="custom-radio-001" class="custom-radio__label-for">От Хоббики</label>
                                </div>
                                <div class="custom-radio">
                                    <input id="custom-radio-002" class="custom-radio__input" type="radio" name="commercialOfferType">
                                    <label for="custom-radio-002" class="custom-radio__label-for">От Дилера</label>
                                </div>
                                <div class="custom-radio">
                                    <input id="custom-radio-003" class="custom-radio__input" type="radio" name="commercialOfferType">
                                    <label for="custom-radio-003" class="custom-radio__label-for">От Хоббики с моими контактами</label>
                                </div>
                            </div>
                        </div>
                        <div class="cp-sidebar__item">
                            <div class="cp-sidebar__item-row">
                                <div class="h5">Дополнительные услуги</div>
                            </div>
                            <div class="cp-sidebar__item-row">
                                <div class="custom-radio">
                                    <input id="custom-radio-001" class="custom-radio__input" type="radio" name="commercialOfferService">
                                    <label for="custom-radio-001" class="custom-radio__label-for">Доставка</label>
                                </div>
                                <div class="custom-radio">
                                    <input id="custom-radio-002" class="custom-radio__input" type="radio" name="commercialOfferService">
                                    <label for="custom-radio-002" class="custom-radio__label-for">Сборка</label>
                                </div>
                                <div class="custom-radio">
                                    <input id="custom-radio-003" class="custom-radio__input" type="radio" name="commercialOfferService">
                                    <label for="custom-radio-003" class="custom-radio__label-for">Установка</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cp-sidebar__item-g">
                        <div class="cp-sidebar__item cp-sidebar__item--banner">
                            <a class="cp-sidebar__banner" href="javascript:;" style="background-image: url('img/commercial-offer-img1.png');">
                                <span class="cp-sidebar__banner-title h4">Как мы работаем с КП</span>
                            </a>
                        </div>
                        <div class="cp-sidebar__item cp-sidebar__item--banner">
                            <a class="cp-sidebar__banner" href="javascript:;" style="background-image: url('img/commercial-offer-img2.png');">
                                <span class="cp-sidebar__banner-title h4">Про сроки изготовления и доставки</span>
                            </a>
                        </div>
                    </div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/components/footer.php"); ?>