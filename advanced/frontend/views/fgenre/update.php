<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\FGenre */

$this->title = 'Update Fgenre: ' . ' ' . $model->userId;
$this->params['breadcrumbs'][] = ['label' => 'Fgenres', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->userId, 'url' => ['view', 'userId' => $model->userId, 'genreId' => $model->genreId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="fgenre-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
