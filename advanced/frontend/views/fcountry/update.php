<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\FCountry */

$this->title = 'Update Fcountry: ' . ' ' . $model->userId;
$this->params['breadcrumbs'][] = ['label' => 'Fcountries', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->userId, 'url' => ['view', 'userId' => $model->userId, 'countyId' => $model->countyId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="fcountry-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
