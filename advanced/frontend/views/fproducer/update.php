<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\FProducer */

$this->title = 'Update Fproducer: ' . ' ' . $model->userId;
$this->params['breadcrumbs'][] = ['label' => 'Fproducers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->userId, 'url' => ['view', 'userId' => $model->userId, 'producerId' => $model->producerId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="fproducer-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
