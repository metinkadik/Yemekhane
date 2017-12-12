<?php

namespace kouosl\yemekhane\models;

use Yii;

/**
 * This is the model class for table "yemekler".
 *
 * @property integer $id
 * @property string $yemek_tip
 * @property string $yemek_adi
 * @property integer $kalori
 */
class Yemekler extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'yemekler';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'yemek_tip', 'yemek_adi', 'kalori'], 'required'],
            [['id', 'kalori'], 'integer'],
            [['yemek_tip', 'yemek_adi'], 'string', 'max' => 32],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'yemek_tip' => 'Yemek Tip',
            'yemek_adi' => 'Yemek Adi',
            'kalori' => 'Kalori',
        ];
    }
}
