<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\FStudio */

$this->title = 'Update Fstudio: ' . ' ' . $model->userId;
$this->params['breadcrumbs'][] = ['label' => 'Fstudios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->userId, 'url' => ['view', 'userId' => $model->userId, 'studioId' => $model->studioId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="fstudio-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
