<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\RezhiserName */

$this->title = 'Update Rezhiser Name: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Rezhiser Names', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="rezhiser-name-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
