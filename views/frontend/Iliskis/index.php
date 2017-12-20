<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel kouosl\Yemekhane\models\IliskiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Iliskis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="iliski-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Iliski', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'yemek_id',
            'menu_id',
            'yemek _adi',
            'yemek_tip',
            // 'kalori',
            // 'tarih',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
