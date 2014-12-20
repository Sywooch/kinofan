<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Rezhiser */

$this->title = 'Create Rezhiser';
$this->params['breadcrumbs'][] = ['label' => 'Rezhisers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rezhiser-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
