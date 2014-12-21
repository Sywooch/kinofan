<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\FRezhiser */

$this->title = 'Create Frezhiser';
$this->params['breadcrumbs'][] = ['label' => 'Frezhisers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="frezhiser-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
