<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\FCountry */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="fcountry-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'userId')->textInput() ?>

    <?= $form->field($model, 'countyId')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
