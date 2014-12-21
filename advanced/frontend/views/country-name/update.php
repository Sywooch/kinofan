<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\CountryName */

$this->title = 'Update Country Name: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Country Names', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="country-name-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
