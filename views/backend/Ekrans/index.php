<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel kouosl\Yemekhane\models\EkranSearch2 */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ekran2s';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ekran2-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Ekran2', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'yemek_id',
            'menu_id',
            'yemek_adi',
            'yemek_tip',
            // 'kalori',
            // 'tarih',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
