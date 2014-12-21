<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\FProducer */

$this->title = 'Create Fproducer';
$this->params['breadcrumbs'][] = ['label' => 'Fproducers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fproducer-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
