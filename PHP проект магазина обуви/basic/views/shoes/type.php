<?= $this->render('_backheader1');?>
<h1>Типы обуви</h1>
<?= $this->render('_backheader2');?>
	<div class="container">
		<div class="row">
<!-- Type -->
<div class="product_image_area">
    <?php foreach ($alltypes as $value): //start cicle?> 
		<div class="container">
			<div class="row s_product_inner">
				<div class="col-lg-6">
					<div class="single-prd-item">
                        <a href="<?=yii\helpers\Url::to(['shoes/itemtype', 'id'=>$value->id]) //добавление ссылки?>">
                        <?= yii\helpers\Html::img('@web/'.$value->img, ['class' => "img-fluid", 'alt' => $value->title]); //добавление картинки средствами yii??>              
                        </a>
                    </div>
				</div>
				<div class="col-lg-5 offset-lg-1">
					<div class="s_product_text">
						<h3><?=$value->title; ?></h3>
						<h2><?=$value->about; ?></h2>
					</div>
				</div>
			</div>
		</div>
        <?php endforeach; //end cicle?> 
	</div>
<!-- End Type -->
</div>
</div>