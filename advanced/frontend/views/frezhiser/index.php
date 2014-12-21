<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\FRezhiserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Frezhisers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="frezhiser-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Frezhiser', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'userId',
            'rezhiserId',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
