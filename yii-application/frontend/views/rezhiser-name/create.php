<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\RezhiserName */

$this->title = 'Create Rezhiser Name';
$this->params['breadcrumbs'][] = ['label' => 'Rezhiser Names', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rezhiser-name-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
