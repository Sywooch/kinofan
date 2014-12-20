<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\StudioName */

$this->title = 'Update Studio Name: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Studio Names', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="studio-name-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
