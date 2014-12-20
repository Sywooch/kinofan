<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Studio */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="studio-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'filmId')->textInput() ?>

    <?= $form->field($model, 'studioId')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
