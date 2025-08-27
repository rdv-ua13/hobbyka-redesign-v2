<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/components/header.php"); ?>

<div class="cart cart-empty-page">
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
                    <div class="cart-empty">
                        <a class="cart-empty__view" href="javascript:;">
                            <svg class="icon icon-stroke">
                                <use href="img/stroke_cart-empty.svg#stroke_cart-empty"></use>
                            </svg>
                        </a>
                        <div class="cart-empty__descr">
                            <div class="h3">Тут пока ничего нет</div>
                            <div class="cart-empty__subtitle">Добавьте товары, чтобы оформить заказ</div>
                        </div>
                    </div>
                </div>
            </div>
		</div>
	</div>
</div>

<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/components/footer.php"); ?>