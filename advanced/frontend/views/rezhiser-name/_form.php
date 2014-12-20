<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\RezhiserName */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rezhiser-name-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'rezhiserName')->textInput(['maxlength' => 255]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
