<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Producer */

$this->title = 'Update Producer: ' . ' ' . $model->filmId;
$this->params['breadcrumbs'][] = ['label' => 'Producers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->filmId, 'url' => ['view', 'filmId' => $model->filmId, 'producerId' => $model->producerId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="producer-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
