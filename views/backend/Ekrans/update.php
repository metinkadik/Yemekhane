<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model kouosl\Yemekhane\models\Ekran2 */

$this->title = 'Update Ekran2: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Ekran2s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ekran2-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
