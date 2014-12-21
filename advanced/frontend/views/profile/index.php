<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<h1>profile/index</h1>

<div class="user-seting-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'genres')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'countrys')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'yearS')->textInput(['maxlength' => 4]) ?>

    <?= $form->field($model, 'yearF')->textInput(['maxlength' => 4]) ?>

    <?= $form->field($model, 'producers')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'actors')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'studios')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'rezhesers')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
