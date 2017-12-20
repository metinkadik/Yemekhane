<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\YemeklerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Yemeklers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="yemekler-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Yemekler', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'yemek_tip',
            'yemek_adi',
            'kalori',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
