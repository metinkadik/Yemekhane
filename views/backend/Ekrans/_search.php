<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model kouosl\Yemekhane\models\EkranSearch2 */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ekran2-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'yemek_id') ?>

    <?= $form->field($model, 'menu_id') ?>

    <?= $form->field($model, 'yemek_adi') ?>

    <?= $form->field($model, 'yemek_tip') ?>

    <?php // echo $form->field($model, 'kalori') ?>

    <?php // echo $form->field($model, 'tarih') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
