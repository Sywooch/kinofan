<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ActorName */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="actor-name-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="col-lg-6">
        <?= $form->field($model, 'actorId')->dropDownList($item) ?>
    </div>
    <div class="col-lg-6">
        <?= Html::submitButton('<span class="glyphicon glyphicon-plus"></span>', ['class' => 'btn btn-lg btn-default']) ?>
    </div>
    <?php ActiveForm::end(); ?>

</div>
