<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Actor */

$this->title = 'Update Actor: ' . ' ' . $model->filmId;
$this->params['breadcrumbs'][] = ['label' => 'Actors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->filmId, 'url' => ['view', 'filmId' => $model->filmId, 'actorId' => $model->actorId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="actor-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
