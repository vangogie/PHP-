<?php

namespace app\models;
use yii\db\ActiveRecord;
class Shoes extends ActiveRecord
{
    public static function tableName()
    {
        return 'shoes';
    }
}

?>