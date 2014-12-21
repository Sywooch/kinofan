<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\FStudio */

$this->title = 'Create Fstudio';
$this->params['breadcrumbs'][] = ['label' => 'Fstudios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fstudio-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
