<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\FCountry */

$this->title = 'Create Fcountry';
$this->params['breadcrumbs'][] = ['label' => 'Fcountries', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fcountry-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
