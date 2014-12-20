<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Rezhiser */

$this->title = 'Update Rezhiser: ' . ' ' . $model->filmId;
$this->params['breadcrumbs'][] = ['label' => 'Rezhisers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->filmId, 'url' => ['view', 'filmId' => $model->filmId, 'rezhiserId' => $model->rezhiserId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="rezhiser-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
