<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Studio */

$this->title = 'Update Studio: ' . ' ' . $model->filmId;
$this->params['breadcrumbs'][] = ['label' => 'Studios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->filmId, 'url' => ['view', 'filmId' => $model->filmId, 'studioId' => $model->studioId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="studio-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
