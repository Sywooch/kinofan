<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\FProducerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Fproducers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fproducer-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Fproducer', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'userId',
            'producerId',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
