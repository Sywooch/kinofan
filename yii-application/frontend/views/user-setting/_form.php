<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\UserSeting */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-seting-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'userId')->textInput() ?>

    <?= $form->field($model, 'genres')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'countrys')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'years')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'producers')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'actors')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'studios')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'rezhesers')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
