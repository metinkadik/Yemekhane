<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel kouosl\Yemekhane\models\MenulerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Menulers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="menuler-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Menuler', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'Tarih',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
