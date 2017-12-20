<?php

namespace kouosl\Yemekhane\models;

use Yii;

/**
 * This is the model class for table "iliski".
 *
 * @property integer $id
 * @property integer $yemek_id
 * @property integer $menu_id
 * @property string $yemek _adi
 * @property string $yemek_tip
 * @property integer $kalori
 * @property string $tarih
 *
 * @property Menuler $menu
 * @property Yemekler $yemek
 */
class Iliski extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'iliski';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['yemek_id', 'menu_id', 'yemek _adi', 'yemek_tip', 'kalori', 'tarih'], 'required'],
            [['yemek_id', 'menu_id', 'kalori'], 'integer'],
            [['tarih'], 'safe'],
            [['yemek _adi', 'yemek_tip'], 'string', 'max' => 45],
            [['menu_id'], 'exist', 'skipOnError' => true, 'targetClass' => Menuler::className(), 'targetAttribute' => ['menu_id' => 'id']],
            [['yemek_id'], 'exist', 'skipOnError' => true, 'targetClass' => Yemekler::className(), 'targetAttribute' => ['yemek_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'yemek_id' => 'Yemek ID',
            'menu_id' => 'Menu ID',
            'yemek _adi' => 'Yemek  Adi',
            'yemek_tip' => 'Yemek Tip',
            'kalori' => 'Kalori',
            'tarih' => 'Tarih',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMenu()
    {
        return $this->hasOne(Menuler::className(), ['id' => 'menu_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getYemek()
    {
        return $this->hasOne(Yemekler::className(), ['id' => 'yemek_id']);
    }
}
