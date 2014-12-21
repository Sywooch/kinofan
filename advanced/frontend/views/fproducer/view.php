<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\FProducer */

$this->title = $model->userId;
$this->params['breadcrumbs'][] = ['label' => 'Fproducers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fproducer-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'userId' => $model->userId, 'producerId' => $model->producerId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'userId' => $model->userId, 'producerId' => $model->producerId], [
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
            'userId',
            'producerId',
        ],
    ]) ?>

</div>
