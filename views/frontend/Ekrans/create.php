<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model kouosl\Yemekhane\models\Ekran */

$this->title = 'Create Ekran';
$this->params['breadcrumbs'][] = ['label' => 'Ekrans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ekran-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
