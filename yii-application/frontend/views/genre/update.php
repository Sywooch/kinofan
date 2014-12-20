<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Genre */

$this->title = 'Update Genre: ' . ' ' . $model->filmId;
$this->params['breadcrumbs'][] = ['label' => 'Genres', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->filmId, 'url' => ['view', 'filmId' => $model->filmId, 'genreId' => $model->genreId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="genre-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
