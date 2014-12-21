<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\FCountrySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Fcountries';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fcountry-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Fcountry', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'userId',
            'countyId',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
