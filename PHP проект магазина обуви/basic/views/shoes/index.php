	<!-- start banner Area -->
	<section class="banner-area">
		<div class="container">
			<div class="row fullscreen align-items-center justify-content-start">
				<div class="col-lg-12">
					<div class="active-banner-slider owl-carousel">
						<!-- single-slide -->
						<div class="row single-slide align-items-center d-flex">
							<div class="col-lg-5 col-md-6">
								<div class="banner-content">
									<h1><br>Новая коллекция <br>Nike!</h1>
									<p>Выйди за рамки привычного представления о технологии Air с Nike Air Max Zephyr EOI. 
										В этом обновленном футуристическом дизайне верх дополнен мягкой видимой вставкой Air. 
										Акценты в виде бесшовных и прошитых накладок выдержаны в лучших традициях обуви для 
										бега, а видимые вставки Air и детали с ультрадышащей рельефной сеткой эффектно 
										дополняют образ. Модель отсылает нас к истории Air Max через материалы, графику 
										и цвета, заимствованные у других культовых моделей линейки.</p>
									<div class="add-bag d-flex align-items-center">
										<a class="add-btn" href=""><span class="lnr lnr-cross"></span></a>
										<span class="add-text text-uppercase">Добавить в корзину</span>
									</div>
								</div>
							</div>
							<div class="col-lg-7">
								<div class="banner-img">
								<?= yii\helpers\Html::img('@web/img/banner/banner-img.png', ['class' => "img-fluid", 'alt' => 'New']); //добавление картинки средствами yii?>
								</div>
							</div>
						</div>
						<!-- single-slide -->
						<div class="row single-slide">
							<div class="col-lg-5">
								<div class="banner-content">
									<h1><br>Лучшие кроссовки <br>Adidas!</h1>
									<p>Adidas Ultraboost 20 – одна из самых популярных моделей Adidas, 
										входит в большинство рейтингов лучших беговых кроссовок 2020. 
										Амортизация полностью из пены Boost, пластина Torsion System для 
										стабильности и прочная подметка Continental. Верх сделан из эластичного, 
										дышащего материала Primeknit+, который усилен специальными швами Tailored Fibre 
										Placement.</p>
									<div class="add-bag d-flex align-items-center">
										<a class="add-btn" href=""><span class="lnr lnr-cross"></span></a>
										<span class="add-text text-uppercase">Добавить в корзину</span>
									</div>
								</div>
							</div>
							<div class="col-lg-7">
								<div class="banner-img">
								<?= yii\helpers\Html::img('@web/img/banner/banner-img2.png', ['class' => "img-fluid", 'alt' => 'New']); //добавление картинки средствами yii?>
							
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->

	<!-- start features Area -->
	<section class="features-area section_gap">
		<div class="container">
			<div class="row features-inner">
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
						<?= yii\helpers\Html::img('@web/img/features/f-icon1.png'); //добавление картинки средствами yii?>

						</div>
						<h6>Бесплатная доставка</h6>
						<p>Бесплатная доставка Новой почтой</p>
					</div>
				</div>
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
						<?= yii\helpers\Html::img('@web/img/features/f-icon2.png'); //добавление картинки средствами yii?>
						</div>
						<h6>Защита покупателя</h6>
						<p>Обмен/возврат в течении 14 дней</p>
					</div>
				</div>
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
						<?= yii\helpers\Html::img('@web/img/features/f-icon3.png'); //добавление картинки средствами yii?>
						</div>
						<h6>Техподдержка 24/7</h6>
						<p>Поддержка техническими специалистами</p>
					</div>
				</div>
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
						<?= yii\helpers\Html::img('@web/img/features/f-icon4.png'); //добавление картинки средствами yii?>
						</div>
						<h6>Безопасная олата</h6>
						<p>Оплата картой при получении</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end features Area -->

	<!-- Start category Area -->
	<section class="category-area">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8 col-md-12">
					<div class="row">
						<div class="col-lg-8 col-md-8">
							<div class="single-deal">
								<div class="overlay"></div>
								<?= yii\helpers\Html::img('@web/img/category/c1.jpg', ['class' => "img-fluid w-100"]); //добавление картинки средствами yii??>
								<a href="img/category/c1.jpg" class="img-pop-up" target="_blank">
									<div class="deal-details">
										<h6 class="deal-title">Кроссовки для ходьбы</h6>
									</div>
								</a>
							</div>
						</div>
						<div class="col-lg-4 col-md-4">
							<div class="single-deal">
								<div class="overlay"></div>
								<?= yii\helpers\Html::img('@web/img/category/c2.jpg', ['class' => "img-fluid w-100"]); //добавление картинки средствами yii??>
								<a href="img/category/c2.jpg" class="img-pop-up" target="_blank">
									<div class="deal-details">
										<h6 class="deal-title">Водонепроницаемая обувь</h6>
									</div>
								</a>
							</div>
						</div>
						<div class="col-lg-4 col-md-4">
							<div class="single-deal">
								<div class="overlay"></div>
								<?= yii\helpers\Html::img('@web/img/category/c3.jpg', ['class' => "img-fluid w-100"]); //добавление картинки средствами yii??>
								<a href="img/category/c3.jpg" class="img-pop-up" target="_blank">
									<div class="deal-details">
										<h6 class="deal-title">Обувь на каждый день</h6>
									</div>
								</a>
							</div>
						</div>
						<div class="col-lg-8 col-md-8">
							<div class="single-deal">
								<div class="overlay"></div>
								<?= yii\helpers\Html::img('@web/img/category/c4.jpg', ['class' => "img-fluid w-100"]); //добавление картинки средствами yii??>
								<a href="img/category/c4.jpg" class="img-pop-up" target="_blank">
									<div class="deal-details">
										<h6 class="deal-title">Макасины для акивного отдыха</h6>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-deal">
						<div class="overlay"></div>
						<?= yii\helpers\Html::img('@web/img/category/c5.jpg', ['class' => "img-fluid w-100"]); //добавление картинки средствами yii??>
						<a href="img/category/c5.jpg" class="img-pop-up" target="_blank">
							<div class="deal-details">
								<h6 class="deal-title">Дата распродажи</h6>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End category Area -->