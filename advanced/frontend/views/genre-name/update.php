<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\GenreName */

$this->title = 'Update Genre Name: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Genre Names', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="genre-name-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
