<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\ProducerName */

$this->title = 'Create Producer Name';
$this->params['breadcrumbs'][] = ['label' => 'Producer Names', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="producer-name-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
