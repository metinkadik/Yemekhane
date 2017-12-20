<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model kouosl\Yemekhane\models\Iliski */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Iliskis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="iliski-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'yemek_id',
            'menu_id',
            'yemek _adi',
            'yemek_tip',
            'kalori',
            'tarih',
        ],
    ]) ?>

</div>
