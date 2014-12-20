<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Producer */

$this->title = $model->filmId;
$this->params['breadcrumbs'][] = ['label' => 'Producers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="producer-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'filmId' => $model->filmId, 'producerId' => $model->producerId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'filmId' => $model->filmId, 'producerId' => $model->producerId], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'filmId',
            'producerId',
        ],
    ]) ?>

</div>
