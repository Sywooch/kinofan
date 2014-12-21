<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\FGenreSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Fgenres';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fgenre-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Fgenre', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'userId',
            'genreId',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
