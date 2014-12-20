<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\RezhiserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Rezhisers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rezhiser-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Rezhiser', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'filmId',
            'rezhiserId',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
