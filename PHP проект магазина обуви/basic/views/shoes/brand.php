<?= $this->render('_backheader1');?>
<h1>Бренды</h1>
<?= $this->render('_backheader2');?>
	<div class="container">
		<div class="row">
<section class="lattest-product-area pb-40 category-list">
					<div class="row">
                        <?php foreach ($brand as $p): ?>
						<!-- single product -->
						<div class="col-lg-4 col-md-6">
							<div class="single-product">
								<a href="<?=yii\helpers\Url::to(['shoes/itembrand', 'id'=>$p->id]) //добавление ссылки?>">
									<?= yii\helpers\Html::img('@web/'.$p->img, ['class' => "img-fluid", 'alt' => $p->title]); //добавление картинки средствами yii?>
								</a>
                                
								<div class="product-details">
									<h6><?=$p->title; ?></h6>
									<div class="price">
										<h6><?=$p->slogan; ?></h6>
									</div>
									<div class="prd-bottom">

									</div>
								</div>
							</div>
                        </div>
                        <?php endforeach; ?>
					</div>
				</section>
                </div>
</div>