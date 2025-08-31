<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/components/header.php"); ?>

<div class="cart">
	<div class="block-top block-bottom-md desktop-only"> <?/* todo: скрыт на мобиле до уточнения */?>
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

	<div class="">
		<div class="container">
            <div class="cp">
                <div class="cp-content">
                    <div class="result-empty">
                        <div class="result-empty__view">
                            <svg class="icon icon-stroke">
                                <use href="img/stroke_cart-empty.svg#stroke_cart-empty"></use>
                            </svg>
                        </div>
                        <div class="result-empty__descr">
                            <div class="h3">Тут пока ничего нет</div>
                            <div class="result-empty__subtitle">Добавьте товары, чтобы оформить заказ</div>
                        </div>
                    </div>
                </div>
            </div>
		</div>
	</div>
</div>

<?php include($_SERVER["DOCUMENT_ROOT"] . "/build/components/footer.php"); ?>