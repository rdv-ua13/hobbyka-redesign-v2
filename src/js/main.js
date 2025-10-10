document.addEventListener("DOMContentLoaded", () => {
    const app = new application();
    app.init();
});

function application() {
    //variable
    //this.myMap;
}
application.prototype.init = function () {
    this.initTouch();
    this.initHeaderScroll();
    this.initBurger();
    this.initCatalogMenu();
    this.initOverlay();
    this.initBasicSlider();
    this.initSliders();
    this.initTooltips();
    this.initCardActTooltips();
    this.initInputSearch();
    this.initMaskedInput();
    this.initSwitchContent();
    this.initContactsMap();
    this.initBasicTabs();
    this.initAccordion();
    this.initContactsAccordion();
    this.initFancyboxBehavior();
    this.initCartQuantity();
    this.initCheckall();
    this.initPageUp();
};

// Initialization device check
application.prototype.initTouch = function () {
    if ('ontouchstart' in document.documentElement) {
        $('html').addClass('touch');
    }
};

// Initialization header scroll
application.prototype.initHeaderScroll = function () {
    $(window).scroll(function () {
        setHeaderScroll();
    });
    setHeaderScroll();
    $(window).resize(setHeaderScroll);

    function setHeaderScroll() {
        let sensDistance = 1;

        if (window.matchMedia('(min-width: 1200px)').matches) {
            sensDistance = $('.header-top').outerHeight();
        }
        else if (window.matchMedia('(min-width: 992px) and (max-width: 1199px)').matches) {
            sensDistance = 14;
        }

        if ($(window).scrollTop() > sensDistance) {
            $('.header').addClass('scrolled');
        }
        else {
            $('.header').removeClass('scrolled');
        }
    }
};

// Initialization burger-menu
application.prototype.initBurger = function () {
    const body = document?.querySelector('body');
    const burger = document?.querySelector('[data-menu-spoiler]');
    const menu = document?.querySelector('[data-menu]');
    const menuClose = document?.querySelector('[data-menu-close]');

    burger?.addEventListener('click', (e) => {
        burger?.classList.toggle('active');
        menu?.classList.toggle('active');

        if (menu?.classList.contains('active')) {
            burger?.setAttribute('aria-expanded', 'true');
            burger?.setAttribute('aria-label', 'Закрыть меню');
            $('body').addClass('overflow-hidden');
        } else {
            burger?.setAttribute('aria-expanded', 'false');
            burger?.setAttribute('aria-label', 'Открыть меню');
            $('body').removeClass('overflow-hidden');
        }
    });

    menuClose?.addEventListener('click', () => {
        setMenuClose();
        $('.overlay').remove();
    });

    $(window).on('resize', function () {
        setMenuClose();
    });

    $(document).on('keyup', function (e) {
        if (e.key == 'Escape') {
            setMenuClose();
        }
    });

    $(document).on('click', function (e) {
        if ($('.overlay').is(e.target)) {
            setMenuClose();
        }
    });

    function setMenuClose() {
        burger?.setAttribute('aria-expanded', 'false');
        burger?.setAttribute('aria-label', 'Открыть меню');
        burger?.classList.remove('active');
        menu?.classList.remove('active');
        body?.classList.remove('overflow-hidden');
        $('.overlay').remove();
        $('body').removeClass('overflow-hidden');
    }
};

// Initialize menu call
application.prototype.initCatalogMenu = function () {
    const body = $('body');
    const burger = $('[data-menu-spoiler]');
    const menu = $('[data-menu]');
    const catalogSpoiler = $('[data-catalog-spoiler]');
    const catalog = $('[data-catalog]');
    const catalogClose = $('[data-catalog-close]');
    let overlayTrigger = $('[data-overlay-transparent]');

    catalogSpoiler.on('click', () => {
        setCatalogSwitch();
    });

    catalogClose.on('click', () => {
        setClose();
    });

    setOverlay();

    $(window).on('resize', function () {
        setClose();
    });

    $(document).on('keyup', function (e) {
        if (e.key == 'Escape') {
            setClose();
        }
    });

    function setCatalogSwitch() {
        if (catalog.hasClass('active') && catalogSpoiler.hasClass('active')) {
            catalogSpoiler.attr('aria-expanded', 'false');
            catalogSpoiler.attr('aria-label', 'Открыть меню');
            catalogSpoiler.removeClass('active');
            catalog.removeClass('active');
            $('body').removeClass('overflow-hidden');
        } else {
            catalogSpoiler.attr('aria-expanded', 'true');
            catalogSpoiler.attr('aria-label', 'Закрыть меню');
            catalogSpoiler.addClass('active');
            catalog.addClass('active');
            $('body').addClass('overflow-hidden');
        }
    }

    function setClose() {
        catalogSpoiler.attr('aria-expanded', 'false');
        catalogSpoiler.attr('aria-label', 'Открыть меню');
        catalogSpoiler.removeClass('active');
        catalog.removeClass('active');
        $('.overlay-transparent').remove();

        $('body').removeClass('overflow-hidden');
    }

    function setOverlay() {
        overlayTrigger.on('click', function () {
            $('<div class="overlay-transparent"></div>').insertAfter($(this));
        });

        $(document).on('click', function (e) {
            if ($('.overlay-transparent').is(e.target)) {
                setClose();

                $('[data-menu-spoiler]').attr('aria-expanded', 'false');
                $('[data-menu-spoiler]').attr('aria-label', 'Открыть меню');
                $('[data-menu-spoiler]').removeClass('active');
                $('[data-menu]').removeClass('active');

                $('body').removeClass('overflow-hidden');
                $('.overlay').remove();
            }
        });
    }
};

// Initialization overlay element
application.prototype.initOverlay = function () {
    if($('[data-overlay]').length) {
        const triggerEl = $('[data-overlay]');

        $(triggerEl).on('click', function () {
            $('body').addClass('overflow-hidden');
            $("<div class='overlay'></div>").insertAfter($(this));
        });

        $(document).on('click', function (e) {
            if ($('.overlay').is(e.target)) {
                setTargetAction()
            }
        });

        $(document).on('keyup', function (e) {
            if (e.key == 'Escape') {
                setTargetAction()
            }
        });

        function setTargetAction() {
            $('body').removeClass('overflow-hidden');
            $('.overlay').remove();
        }
    }
};

// Initialization basic slider
application.prototype.initBasicSlider = function () {
    if ($('.basic-slider-wrap').length) {
        const slider = $('[data-basic-slider]');
        let basicSlider = null;
        let spaceBetween = 8;

        if(window.matchMedia('(min-width: 992px)').matches) {
            spaceBetween = 16;
        }

        slider.each(function (i) {
            slider.eq(i).closest('.basic-slider-wrap').addClass('basic-slider-wrap-' + i);
            const basicSliderSetting = {
                slidesPerView: 'auto',
                slidesPerGroup: 1,
                spaceBetween: spaceBetween,
                direction: 'horizontal',
                navigation: {
                    nextEl: '.basic-slider-wrap-' + i + ' .swiper-button-next',
                    prevEl: '.basic-slider-wrap-' + i + ' .swiper-button-prev',
                }
            };

            basicSlider = new Swiper('.basic-slider-wrap-' + i + ' .basic-slider', basicSliderSetting);
        });
    }
};

// Initialization sliders
application.prototype.initSliders = function () {
    if ($('.nav-breadcrumbs').length) {
        let sliderNavBreadcrumbs = new Swiper('.nav-breadcrumbs', {
            slidesPerView: 'auto',
            spaceBetween: 0,
        });
    }

    if ($('.product-category').length) {
        let $slides = $('.product-category .swiper-slide').length;
        let $initialSlide = ($slides / 2) - 1;

        const productCategorySlider = new Swiper('.product-category', {
            slidesPerView: 'auto',
            spaceBetween: 16,
            direction: 'horizontal',
            scrollbar: {
                el: '.product-category .swiper-scrollbar',
                draggable: true,
            },
            breakpoints: {
                992: {
                    initialSlide: $initialSlide,
                },
            }
        });
    }

    if ($('.banner-slider').length) {
        const slider = $('.banner-slider');
        let bannerSlider = null;
        let bannerSliderSettings = null;

        slider.each(function (i) {
            slider.eq(i).closest('.banner-slider-wrap').addClass('banner-slider-wrap-' + i);

            if($(this).is('.nav-none')) {
                bannerSliderSettings = {
                    slidesPerView: 1,
                    autoHeight: true,
                    effect: 'fade',
                    watchOverflow: true,
                    navigation: false,
                    pagination: {
                        el: '.banner-slider-wrap-' + i + ' .swiper-pagination',
                        clickable: true,
                    },
                }
            }
            else {
                bannerSliderSettings = {
                    slidesPerView: 1,
                    autoHeight: true,
                    effect: 'fade',
                    watchOverflow: true,
                    navigation: {
                        nextEl: '.banner-slider-wrap-' + i + ' .swiper-button-next',
                        prevEl: '.banner-slider-wrap-' + i + ' .swiper-button-prev',
                    },
                    pagination: {
                        el: '.banner-slider-wrap-' + i + ' .swiper-pagination',
                        clickable: true,
                    },
                }
            }

            bannerSlider = new Swiper('.banner-slider-wrap-' + i + ' .banner-slider', bannerSliderSettings);
        });
    }

    if ($('.index-events-wrap').length) {
        const slider = $('.index-events-wrap .swiper');
        let indexEventsSlider = null;

        const indexEventsSliderSetting = {
            slidesPerView: 'auto',
            slidesPerGroup: 1,
            spaceBetween: 8,
            direction: 'horizontal',
            pagination: {
                el: '.index-events-wrap .swiper-pagination',
                clickable: true,
            },
        };

        reinitSlider();
        $(window).on('resize', reinitSlider);

        function reinitSlider() {
            if (window.matchMedia('(min-width: 992px)').matches) {
                if(indexEventsSlider !== null) {
                    indexEventsSlider.destroy(true, true);
                    indexEventsSlider = null;
                }
            } else if (window.matchMedia('(max-width: 991px)').matches) {
                slider.each(function (i) {
                    slider.eq(i).closest('.index-events-wrap').addClass('index-events-wrap-' + i);

                    indexEventsSlider = new Swiper('.index-events-wrap-' + i + ' .swiper', indexEventsSliderSetting);
                });

            }
        }


    }

    if ($('[data-cp-nav]').length) {
        let initialSlide = $('[data-cp-nav]').data('cp-nav-initial');
        let sliderCpNav = new Swiper('[data-cp-nav]', {
            slidesPerView: 'auto',
            spaceBetween: 0,
            initialSlide: initialSlide,
        });
    }

    if ($('[data-history-slider]').length) {
        let sliderHistory = new Swiper('[data-history-slider]', {
            slidesPerView: 'auto',
            spaceBetween: 24,
        });
    }

    if ($('[data-tagbar-slider]').length) {
        const slider = $('[data-tagbar-slider]');
        let tagbarSlider = null;

        slider.each(function (i) {
            slider.eq(i).addClass('tagbar-slider-' + i);

            const tagbarSliderSettings = {
                slidesPerView: 'auto',
                spaceBetween: 8,
                direction: 'horizontal',
            };

            reinitSlider();
            $(window).on('resize', reinitSlider);

            function reinitSlider() {
                if (window.matchMedia('(min-width: 992px)').matches) {
                    if(tagbarSlider !== null) tagbarSlider.destroy(true, true);
                    tagbarSlider = null;
                } else if (window.matchMedia('(max-width: 991px)').matches) {
                    tagbarSlider = new Swiper('[data-tagbar-slider].tagbar-slider-' + i, tagbarSliderSettings);
                }
            }
        });
    }

    if ($('.detail-thumb-slider').length) {
        let detailThumbSliderPointer = new Swiper('.detail-thumb-slider-pointer', {
            slidesPerView: 'auto',
            spaceBetween: 8,
            direction: "horizontal",
            freeMode: true,
            watchSlidesProgress: true
        });
        let detailThumbSlider = new Swiper('.detail-thumb-slider', {
            slidesPerView: 1,
            effect: 'fade',
            watchOverflow: true,
            navigation: {
                nextEl: '.detail-thumb-slider .swiper-button-next',
                prevEl: '.detail-thumb-slider .swiper-button-prev',
            },
            thumbs: {
                swiper: detailThumbSliderPointer,
            }
        });
    }
};

// Initialization tooltips
application.prototype.initTooltips = function () {
    if ($('.tooltip').length) {
        tippy('.tooltip', {
            allowHTML: true,
            trigger: 'mouseenter click',
        });
    }
};

// Initialization tooltips card__act
application.prototype.initCardActTooltips = function () {
    if ($('.card-tooltip').length) {
        let instance = null;

        reinitTooltip();
        $(window).on('resize', reinitTooltip);

        function reinitTooltip() {
            if (window.matchMedia('(min-width: 992px)').matches) {
                instance = tippy('.card-tooltip', {
                    allowHTML: true,
                    placement: 'bottom',
                    trigger: 'mouseenter click',
                });
            } else if (window.matchMedia('(max-width: 991px)').matches) {
                if (instance != null) {
                    instance.destroy();
                    instance = null;
                }
            }
        }
    }
};

// Initialization input-search behavior
application.prototype.initInputSearch = function () {
    if ($('.input-search').length) {
        $('.input-search').on('input', function () {
            if ($(this).val() === '' || $(this).val() === null) {
                $(this).removeClass('has-data');
                $(this).closest('.input-search-wrapper').removeClass('has-data');
            } else if ($(this).val() !== '' && $(this).val() !== null) {
                $(this).addClass('has-data');
                $(this).closest('.input-search-wrapper').addClass('has-data');
            }
        });

        $('.input-delete-btn').on('click', function () {
            $(this).closest('.input-search-wrapper').removeClass('has-data');
            $(this).closest('.input-search-wrapper').find('.input-search').val('').removeClass('has-data');
        });
    }
};

// Initialization mobile number mask
application.prototype.initMaskedInput = function () {
    if ($('.isPhone').length) {
        $(".isPhone").mask("+7-999-999-99-99", { autoclear: false });
    }
};

// Initialization switch content
application.prototype.initSwitchContent = function () {
    $('.switch-content').on('click', function () {
        if($(this).hasClass('active')) {
            $(this).removeClass('active');
        }
        else {
            $(this).addClass('active');
        }
    });
};

// Initialization contacts map
application.prototype.initContactsMap = function () {
    if ($('.contacts-map').length) {
        ymaps.ready(init);

        let map,
            placemark,
            mapItem = $('.contacts-map-content');

        function init () {
            mapItem.each(function (i) {
                mapItem.eq(i).attr('id', 'contactsMap' + i);

                let coordX = $(this).data('x'),
                    coordY = $(this).data('y'),
                    hint = $(this).data('hint'),
                    zoomControl = new ymaps.control.ZoomControl({
                        options: {
                            size: 'large',
                            float: 'none',
                            position: {
                                top: 50,
                                right: 10,
                                left: 'auto',
                            },
                        }
                    });

                // Параметры карты можно задать в конструкторе.
                map = new ymaps.Map(
                    // ID DOM-элемента, в который будет добавлена карта.
                    'contactsMap' + i,
                    // Параметры карты.
                    {
                        // Географические координаты центра отображаемой карты.
                        center: [
                            coordX,
                            coordY
                        ],
                        // Масштаб.
                        zoom: 15,
                        controls: ['fullscreenControl'],
                    }, {
                        // Поиск по организациям.
                        searchControlProvider: 'yandex#search'
                    }
                );

                placemark = new ymaps.Placemark([coordX, coordY]);
                /*placemark = new ymaps.Placemark([coordX, coordY], {}, {
                    iconLayout: 'default#image',
                    iconImageHref: '/build/img/map-pin.svg',
                    iconImageSize: [47, 59],
                    iconImageOffset: [0, 0]
                });*/

                map.geoObjects.add(placemark);
                map.controls.add(zoomControl);
            });
        }
    }
};

// Initialization basic tabs
application.prototype.initBasicTabs = function () {
    if ($('.basic-tabs').length) {
        const tabsContainer = $('.basic-tabs-container');
        let currentSelected = 0;
        let currentTabBlockId = null;

        $('.basic-tabs-item').on('click', function () {
            currentTabBlockId = $(this).closest(tabsContainer).data('tab');

            $(".basic-tabs-container[data-tab='" + currentTabBlockId + "']").find('.basic-tabs-trigger').removeClass('active');
            $(this).find('.basic-tabs-trigger').addClass('active');

            currentSelected = $(this).find(".basic-tabs-trigger").data("target");
            $(".basic-tabs-content[data-tab-content='" + currentTabBlockId + "']").find('.basic-tabs-content__panel').removeClass('active');
            $(".basic-tabs-content[data-tab-content='" + currentTabBlockId + "']").find(".basic-tabs-content__panel[data-id='" + currentSelected + "']").addClass('active');
        });
    }
};

// Initialization accordion
application.prototype.initAccordion = function () {
    if ($(".accordion-arr").length) {
        let accordion = new Accordion([".accordion-arr"],{
            duration: 200,
            showMultiple: true,
        });
    }
};

// Initialization contacts accordion
application.prototype.initContactsAccordion = function () {
    if ($(".index-contacts").length) {
        let accordion = null;

        if (window.matchMedia('(max-width: 991px)').matches) {
            initAccordionResponsive();
        }
        $(window).on("resize", initAccordionResponsive);

        function initAccordionResponsive() {
            if (window.matchMedia('(min-width: 992px)').matches) {
                if(accordion != null) {
                    accordion.destroy();
                    accordion = null;
                }
                return;
            } else if (window.matchMedia('(max-width: 991px)').matches) {
                accordion = new Accordion([".index-contacts"],{
                    openOnInit: [0],
                    duration: 200,
                });
            }
        }
    }
};

// Initialize custom fancybox behavior
application.prototype.initFancyboxBehavior = function () {
    const fancybox = $('[data-fancybox]');
    const burger = $('[data-menu-spoiler]');
    const menu = $('[data-menu]');
    const catalog = $('[data-catalog]');
    const catalogSpoiler = $('[data-catalog-spoiler]');

    fancybox.on('click', function () {
        let currentSrc = $(this).data('src');

        menu.removeClass('active');
        burger.attr('aria-expanded', 'false');
        burger.attr('aria-label', 'Открыть меню');
        catalog.removeClass('active');
        catalogSpoiler.attr('aria-expanded', 'false');
        catalogSpoiler.attr('aria-label', 'Открыть меню');
        $('.overlay').remove();
        $('.overlay-transparent').remove();

        $('.modal').not(currentSrc).closest('.fancybox__container.is-animated').click();
    });

    $(document).on('click', function (e) {
        if ($('.fancybox__slide.is-selected.has-inline').is(e.target) || $('.fancybox__slide .carousel__button.is-close').is(e.target)) {
            $('body').removeClass('overflow-hidden');
            $('[data-open-promocode]').removeClass('selected');
            $('[data-open-promocode]').closest('.modal-order-promocode__list').removeClass('has-active');
            $('[data-open-promocode]').closest('.modal-order-promocode__item').removeClass('active');
        }
    });
};

// Initialization cart quantity
application.prototype.initCartQuantity = function () {
    if ($('.cart-quantity').length) {
        $('.cart-buy .cart-in').on("click", function() {
            if(!$(this).hasClass('active')) {
                $(this).addClass('active');
                console.log("success");
                $(this).closest('.card-product').addClass('active');
                $(this).closest('.cart-buy').find('.cart-quantity').removeClass('disabled');
                $(this).closest('.cart-buy').find('.cart-quantity-btn--remove').addClass('selected');
                $('body').addClass('note-show');
                setTimeout(
                    function () {
                        $('body').removeClass('note-show');
                    }, 6000
                );
            } else {
                $(this).removeClass('active');
                $(this).closest('.card-product').removeClass('active');
                $(this).closest('.cart-buy').find('.cart-quantity').addClass('disabled');
                $(this).closest('.cart-buy').find('.cart-quantity-btn--remove').removeClass('selected');
                $(this).closest('.cart-buy').find('input.cart-quantity-input').val(1);
            }
        });

        $(document).on('click','.cart-quantity-btn--remove', function() {
            if ($(this).hasClass('selected')) {
                $(this).removeClass('selected');
                $(this).closest('.cart-buy').find('.cart-in').removeClass('active');
                $(this).closest('.cart-buy').find('.cart-quantity').addClass('disabled');
                console.log("success2");
            }
        });

        $(document).on('click','[data-cart-quantity-remove]', function() {
            $(this).closest('.cart-buy').find('.cart-in').removeClass('active');
            $(this).closest('.cart-buy').find('.cart-quantity').addClass('disabled');
            $(this).closest('.cart-buy').find('.cart-quantity input.cart-quantity-input').val(1).trigger('change');
            console.log("success22");
        });

        $(document).on('click', '.cart-quantity-btn', function(e) {
            let $button = $(this);
            let oldValue = $button.closest('.cart-quantity').find('input.cart-quantity-input').val();
            let mult = parseInt($button.closest('.cart-quantity').find('input.cart-quantity-input').data('mult'));
            let newVal = null;

            if(mult <= 0 || isNaN(mult)) {
                mult = 1;
            }

            if($button.data('value') === 'qty-add') {
                newVal = parseInt(oldValue) + mult;

                if(newVal > 1) {
                    $(this).closest('.cart-quantity').find('.cart-quantity-btn--remove').removeClass('selected');
                } else {
                    $(this).closest('.cart-quantity').find('.cart-quantity-btn--remove').addClass('selected');
                }
            } else {
                if (oldValue > 0) {
                    newVal = parseInt(oldValue) - mult;
                    $(this).closest('.cart-quantity').find('.cart-quantity-btn--remove').removeClass('selected');

                    if(oldValue > 1 && oldValue < 3) {
                        $(this).closest('.cart-quantity').find('.cart-quantity-btn--remove').addClass('selected');
                    }
                } else {
                    newVal = 0;
                }
            }

            if(newVal == 0) {
                newVal = mult;
            }

            $button.closest('.cart-quantity').find('input.cart-quantity-input').val(newVal).trigger('change');
        });
    }
};

// Initialization check all group
application.prototype.initCheckall = function () {
    if ($('.js-checkall-for').length) {
        initOnloadCheckall();
        initOnclickCheckallFor();
        initOnclickCheckallGroup();

        function initOnloadCheckall() {
            $('.js-checkall-for').each(function () {
                const checkallFor = $(this);
                const checkallForData = checkallFor.data('checkall-for');
                let checkallForState = false;
                let checkallGroupState = [];
                let checkallGroupCheckedState = [];

                checkallForHandling();
                compareGroupState(checkallGroupState);

                function checkallForHandling() {
                    $(".js-checkall-group[data-checkall-group='" + checkallForData + "']").each(function (e) {
                        let checkallGroupElem = $(this);

                        if(checkallGroupElem.is(':checked')) {
                            checkallForState = true;
                            checkallGroupState.push(true);
                        } else if(!checkallGroupElem.is(':checked')) {
                            checkallGroupState.push(false);
                        }
                    });

                    if(checkallForState === false) {
                        checkallFor.prop('checked', false);
                    } else if(checkallForState === true) {
                        checkallFor.prop('checked', true);
                    }
                }

                function compareGroupState(arr) {
                    $.each(arr, function(i) {
                        if(arr[i] === true) {
                            checkallGroupCheckedState.push('checked');
                        } else if(arr[i] === false) {
                            checkallGroupCheckedState.push('notChecked');
                        }
                    });

                    const allChecked = checkallGroupCheckedState.every(elem => elem === 'checked');

                    if(allChecked) checkallFor.removeClass('custom-checkbox__input--checkline');
                }
            });
        }

        function initOnclickCheckallFor() {
            $('.js-checkall-for').on('click', function (e) {
                const checkallFor = $(this);
                const checkallForData = checkallFor.data('checkall-for');

                if(checkallFor.is(':checked')) {
                    checkallFor.prop('checked', true);
                    checkallFor.removeClass('custom-checkbox__input--checkline');
                    $(".js-checkall-group[data-checkall-group='" + checkallForData + "']").prop("checked", true);

                    $('.js-checkall-wrap').addClass('hasChecked');
                    $('.js-cart-card').addClass('active');
                }
                else if(!checkallFor.is(':checked')) {
                    checkallFor.prop('checked', false);
                    $(".js-checkall-group[data-checkall-group='" + checkallForData + "']").prop("checked", false);

                    $('.js-checkall-wrap').removeClass('hasChecked');
                    $('.js-cart-card').removeClass('active');
                }
            });
        }

        function initOnclickCheckallGroup() {
            $('.js-checkall-group').on('click', function (e) {
                const checkallGroup = $(this);
                const checkallGroupData = checkallGroup.data('checkall-group');

                let checkallGroupState = [];
                let checkallGroupCheckedState = [];

                checkallGroupHandling();
                compareGroupState(checkallGroupState);

                function checkallGroupHandling() {
                    $(".js-checkall-group[data-checkall-group='" + checkallGroupData + "']").each(function (e) {
                        let checkallGroupElem = $(this);

                        if(checkallGroupElem.is(':checked')) {
                            checkallGroupState.push(true);
                            checkallGroupElem.closest('.js-cart-card').addClass('active');
                        }
                        else if(!checkallGroupElem.is(':checked')) {
                            checkallGroupState.push(false);
                            checkallGroupElem.closest('.js-cart-card').removeClass('active');
                        }
                    });
                }

                function compareGroupState(arr) {
                    $.each(arr, function(i) {
                        if(arr[i] === true) {
                            checkallGroupCheckedState.push('checked');
                        }
                        else if(arr[i] === false) {
                            checkallGroupCheckedState.push('notChecked');
                        }
                    });

                    const allChecked = checkallGroupCheckedState.every(elem => elem === 'checked');
                    const allNotChecked = checkallGroupCheckedState.every(elem => elem === 'notChecked');

                    if(allChecked) {
                        $(".js-checkall-for[data-checkall-for='" + checkallGroupData + "']").prop('checked', true);
                        $(".js-checkall-for[data-checkall-for='" + checkallGroupData + "']").removeClass('custom-checkbox__input--checkline');

                        $('.js-checkall-wrap').addClass('hasChecked');
                    }
                    else if(allNotChecked) {
                        $(".js-checkall-for[data-checkall-for='" + checkallGroupData + "']").prop('checked', false);

                        $('.js-checkall-wrap').removeClass('hasChecked');
                    }
                    else if(!allChecked && !allNotChecked) {
                        $(".js-checkall-for[data-checkall-for='" + checkallGroupData + "']").prop('checked', true);

                        if(!$(".js-checkall-for[data-checkall-for='" + checkallGroupData + "']").hasClass('custom-checkbox__input--checkline')) {
                            $(".js-checkall-for[data-checkall-for='" + checkallGroupData + "']").addClass('custom-checkbox__input--checkline');
                        }

                        $('.js-checkall-wrap').addClass('hasChecked');
                    }
                }
            });
        }
    }
};

// Initialize page up move
application.prototype.initPageUp = function () {
    if ($('.page-up').length) {
        const btn = $('.page-up');

        setPageUpShow();
        $(window).on('scroll', setPageUpShow);

        btn.on('click', function () {
            $('html, body').animate({
                scrollTop: $('body').scrollTop()
            }, 300);
        });

        function setPageUpShow() {
            let sensDistance = $(window).height() + 50;

            if ($(window).scrollTop() > sensDistance) {
                btn.removeClass('visually-hidden');
            } else {
                btn.addClass('visually-hidden');
            }
        }
    }
};

