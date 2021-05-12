<?= $this->render('_backheader1');?>
<h1><?=$types->title; ?></h1>
<?= $this->render('_backheader2');?>
	<div class="container">
		<div class="row">
<!-- Brand -->
<div>
		<div class="container">
			<div class="row s_product_inner">
				<div class="col-lg-6">
					<div class="single-prd-item">
                        <?= yii\helpers\Html::img('@web/'.$types->img, ['class' => "img-fluid", 'alt' => $brand->title]); //добавление картинки средствами yii??>              
					</div>
				</div>
				<div class="col-lg-5 offset-lg-1">
					<div class="s_product_text">
						<h3><?=$types->title; ?></h3>
						<h2><?=$types->about; ?></h2>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- EndBrand -->

<!-- Products of this brand -->

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
											<p class="hover-text">add to bag</p>
										</a>
										<a href="" class="social-info">
											<span class="lnr lnr-heart"></span>
											<p class="hover-text">Wishlist</p>
										</a>
										<a href="" class="social-info">
											<span class="lnr lnr-sync"></span>
											<p class="hover-text">compare</p>
										</a>
										<a href="" class="social-info">
											<span class="lnr lnr-move"></span>
											<p class="hover-text">view more</p>
										</a>
									</div>
								</div>
							</div>
                        </div>
                        <?php endforeach; ?>
					</div>
				</section>
<!-- End Products of this brand -->
</div>
</div>