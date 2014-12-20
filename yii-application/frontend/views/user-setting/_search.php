<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\UserSettingSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-seting-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'userId') ?>

    <?= $form->field($model, 'genres') ?>

    <?= $form->field($model, 'countrys') ?>

    <?= $form->field($model, 'years') ?>

    <?= $form->field($model, 'producers') ?>

    <?php // echo $form->field($model, 'actors') ?>

    <?php // echo $form->field($model, 'studios') ?>

    <?php // echo $form->field($model, 'rezhesers') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
