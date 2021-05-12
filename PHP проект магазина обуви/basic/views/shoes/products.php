<?= $this->render('_backheader1');?>
<h1>Кроссовки</h1>
<?= $this->render('_backheader2');?>
	<div class="container">
		<div class="row">
		<section class="lattest-product-area pb-40 category-list">
					<div class="row">
                        <?php foreach ($products as $p): ?>
						<!-- single product -->
						<div class="col-lg-4 col-md-6">
							<div class="single-product">
								<a href="<?=yii\helpers\Url::to(['shoes/item', 'id'=>$p->id]) //добавление ссылки?>">
									<?= yii\helpers\Html::img('@web/'.$p->img, ['class' => "img-fluid", 'alt' => $p->model]); //добавление картинки средствами yii?>
								</a>
                                
								<div class="product-details">
									<h6><?=$p->model; ?></h6>
									<div class="price">
										<h6><?=$p->price; ?></h6>
										<h6 class="l-through"><?=($p->price * 1.3); ?></h6>
									</div>
									<div class="prd-bottom">

										<a href="" class="social-info">
											<span class="ti-bag"></span>
											<p class="hover-text">Добавить в корзину</p>
										</a>
										<a href="" class="social-info">
											<span class="lnr lnr-heart"></span>
											<p class="hover-text">Добавить в избранное</p>
										</a>
										<a href="" class="social-info">
											<span class="lnr lnr-sync"></span>
											<p class="hover-text">Компарнуть</p>
										</a>
										<a href="" class="social-info">
											<span class="lnr lnr-move"></span>
											<p class="hover-text">Подробнее</p>
										</a>
									</div>
								</div>
							</div>
                        </div>
                        <?php endforeach; ?>
					</div>
				</section>

	</div>
</div>