<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model kouosl\Yemekhane\models\Menuler */

$this->title = 'Create Menuler';
$this->params['breadcrumbs'][] = ['label' => 'Menulers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="menuler-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
