<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\FRezhiser */

$this->title = 'Update Frezhiser: ' . ' ' . $model->userId;
$this->params['breadcrumbs'][] = ['label' => 'Frezhisers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->userId, 'url' => ['view', 'userId' => $model->userId, 'rezhiserId' => $model->rezhiserId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="frezhiser-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
