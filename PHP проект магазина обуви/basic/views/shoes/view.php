<?= $this->render('_backheader1');?>
<h1><?=$product->model?></h1>
<?= $this->render('_backheader2');?>
	<div class="container">
		<div class="row">
<!--================Single Product Area =================-->
	<div>
		<div class="container">
			<div class="row s_product_inner">
				<div class="col-lg-6">
					<div class="s_Product_carousel">
						<div class="single-prd-item">
                        <?= yii\helpers\Html::img('@web/'.$product->img, ['class' => "img-fluid", 'alt' => $product->model]); //добавление картинки средствами yii?>
						</div>
						<div class="single-prd-item">
						<?= yii\helpers\Html::img('@web/'.$product->img, ['class' => "img-fluid", 'alt' => $product->model]); //добавление картинки средствами yii?>
						</div>
						<div class="single-prd-item">
						<?= yii\helpers\Html::img('@web/'.$product->img, ['class' => "img-fluid", 'alt' => $product->model]); //добавление картинки средствами yii?>
						</div>
					</div>
				</div>
				<div class="col-lg-5 offset-lg-1">
					<div class="s_product_text">
						<h3><?=$product->model?></h3>
						<h2><?=$product->price?> grn.</h2>
						<ul class="list">
							<li><a class="active" href="#"><span>Производитель</span> : <?=$brand->title?></a></li>
							<li><a href="#"><span>Тип</span> : <?=$type->title?></a></li>
                            <li><a href="#"><span>Цвет</span> : <?=$product->color?></a></li>
						</ul>
						<p><?=$product->about?></p>
						<div class="product_count">
							<label for="qty">Количество:</label>
							<input type="text" name="qty" id="sst" maxlength="12" value="1" title="Quantity:" class="input-text qty">
							<button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
							 class="increase items-count" type="button"><i class="lnr lnr-chevron-up"></i></button>
							<button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
							 class="reduced items-count" type="button"><i class="lnr lnr-chevron-down"></i></button>
						</div>
						<div class="card_area d-flex align-items-center">
							<a class="primary-btn" href="#">Add to Cart</a>
							<a class="icon_btn" href="#"><i class="lnr lnr lnr-diamond"></i></a>
							<a class="icon_btn" href="#"><i class="lnr lnr lnr-heart"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--================End Single Product Area =================-->
    </div>
</div>