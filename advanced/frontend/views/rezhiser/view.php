<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Rezhiser */

$this->title = $model->filmId;
$this->params['breadcrumbs'][] = ['label' => 'Rezhisers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rezhiser-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'filmId' => $model->filmId, 'rezhiserId' => $model->rezhiserId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'filmId' => $model->filmId, 'rezhiserId' => $model->rezhiserId], [
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
            'rezhiserId',
        ],
    ]) ?>

</div>
