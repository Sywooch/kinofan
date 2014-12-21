<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\FRezhiser */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="frezhiser-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'userId')->textInput() ?>

    <?= $form->field($model, 'rezhiserId')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
