<?php

namespace app\models;
use yii\db\ActiveRecord;
class Types extends ActiveRecord
{
    public static function tableName()
    {
        return 'type_products';
    }
}

?>