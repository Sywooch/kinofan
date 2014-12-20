<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\UserSettingSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'User Setings';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-seting-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create User Seting', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'userId',
            'genres:ntext',
            'countrys:ntext',
            'years:ntext',
            'producers:ntext',
            // 'actors:ntext',
            // 'studios:ntext',
            // 'rezhesers:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
