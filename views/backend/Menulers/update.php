<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model kouosl\Yemekhane\models\Menuler */

$this->title = 'Update Menuler: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Menulers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="menuler-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
