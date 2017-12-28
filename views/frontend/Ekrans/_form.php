<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model kouosl\Yemekhane\models\Ekran */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ekran-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'yemek_id')->textInput() ?>

    <?= $form->field($model, 'menu_id')->textInput() ?>

    <?= $form->field($model, 'yemek_adi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'yemek_tip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kalori')->textInput() ?>

    <?= $form->field($model, 'tarih')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
