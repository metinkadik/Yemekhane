<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model kouosl\Yemekhane\models\Ekran2 */

$this->title = 'Create Ekran2';
$this->params['breadcrumbs'][] = ['label' => 'Ekran2s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ekran2-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
