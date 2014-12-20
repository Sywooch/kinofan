<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\GenreNameSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Genre Names';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="genre-name-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Genre Name', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'genreName',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
