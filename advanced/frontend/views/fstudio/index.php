<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\FStudioSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Fstudios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fstudio-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Fstudio', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'userId',
            'studioId',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
