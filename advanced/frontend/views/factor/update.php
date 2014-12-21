<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\FActor */

$this->title = 'Update Factor: ' . ' ' . $model->userId;
$this->params['breadcrumbs'][] = ['label' => 'Factors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->userId, 'url' => ['view', 'userId' => $model->userId, 'actorId' => $model->actorId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="factor-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
