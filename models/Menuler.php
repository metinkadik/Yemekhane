<?php

namespace kouosl\Yemekhane\models;

use Yii;

/**
 * This is the model class for table "menuler".
 *
 * @property integer $id
 * @property string $Tarih
 */
class Menuler extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'menuler';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'Tarih'], 'required'],
            [['id'], 'integer'],
            [['Tarih'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Tarih' => 'Tarih',
        ];
    }
}
