<?php

namespace app\controllers;
use yii\web\Controller;
use app\models\Shoes;
use app\models\Brand;
use app\models\Types;

class ShoesController extends Controller
{
    //index page
    public function actionIndex()
    {
        return $this->render('index');
    }
///////////////////////////////////////////////////////////////////////////
    //products
    public function actionProducts()
    {
        $products = Shoes::find()->select('id, brand_id, type_id, price, model, img, about, color ')->all();
        return $this->render('products', compact('products'));
    }

    public function actionItem()
    {
        $id = \Yii::$app->request->get('id');
        $product = Shoes::findOne($id);
        if (empty($product)) //если нет такого товара то выдаем исключение
        {
            throw new \yii\web\HttpException(404, 'Упс... Что-то пошло не так...');
        }
        $brand = Brand::findOne($product->brand_id);
        $type = Types::findOne($product->type_id);
        return $this->render('view', compact('product', 'brand', 'type'));
    }

///////////////////////////////////////////////////////////////////////////
    //brand
    public function actionBrand()
    {
        $brand = Brand::find()->select('id, title, img, slogan')->all();
        return $this->render('brand', compact('brand'));
    }

    public function actionItembrand()
    {
        $id = \Yii::$app->request->get('id');
        $brand = Brand::findOne($id);
        if (empty($brand)) //если нет такого бренда то выдаем исключение
        {
            throw new \yii\web\HttpException(404, 'Упс... Что-то пошло не так...');
        }
        $products = Shoes::find()->select('id, brand_id, type_id, price, model, img, about, color ')->where(['brand_id'=>$id])->all();
        return $this->render('itembrand', compact('brand', 'products'));
    }
////////////////////////////////////////////////////////////////////
    //type
    public function actionType()
    {
        $alltypes = Types::find()->select('id, title, about, img')->all();
        return $this->render('type', compact('alltypes'));
    }

    public function actionItemtype()
    {
        $id = \Yii::$app->request->get('id');
        $types = Types::findOne($id);
        if (empty($types)) //если нет такого бренда то выдаем исключение
        {
            throw new \yii\web\HttpException(404, 'Упс... Что-то пошло не так...');
        }
        $products = Shoes::find()->select('id, brand_id, type_id, price, model, img, about, color ')->where(['type_id'=>$id])->all();
        return $this->render('Itemtype', compact('types', 'products'));

    }

////////////////////////////////////////////////////////////////////
    //test
    public function actionTest1()
    {
        return $this->render('test1');
    }
    
    public function actionTest2()
    {
        return $this->render('test2');
    }

////////////////////////////////////////////////////////////////////
//contacts
    public function actionContacts()
    {
        return $this->render('contacts');
    }
}

?>