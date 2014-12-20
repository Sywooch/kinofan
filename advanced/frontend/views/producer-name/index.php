<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ProducerNameSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Producer Names';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="producer-name-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Producer Name', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'producerName',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
