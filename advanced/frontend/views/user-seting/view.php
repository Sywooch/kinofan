<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\UserSeting */

$this->title = $model->userId;
$this->params['breadcrumbs'][] = ['label' => 'User Setings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-seting-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->userId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->userId], [
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
            'genres:ntext',
            'countrys:ntext',
            'yearS',
            'yearF',
            'producers:ntext',
            'actors:ntext',
            'studios:ntext',
            'rezhesers:ntext',
        ],
    ]) ?>

</div>
