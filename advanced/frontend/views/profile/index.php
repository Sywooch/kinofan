<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper

?>
<h1>profile/index</h1>

<div>
    <div class="col-lg-10 col-lg-offset-1 bg-info container">
        Favourite Actors: &nbsp
        <?php foreach ($model->actors as $m) { ?>
            <p class="label label-warning"><?= $m->actorName ?> <?= Html::a('<span class="glyphicon glyphicon-remove"></span>', ['profile/dactor', 'id' => $m->id]) ?></p>,
        <?php } ?>
        <?= Html::a('Add', ['profile/addactor'], ['class' => 'btn btn-succes'])?>

    </div>
    <div class="col-lg-10 col-lg-offset-1 bg-info">
        Favourite Countries: &nbsp
        <?php foreach ($model->counties as $m) { ?>
            <p class="label label-warning"><?= $m->countryName ?><?= Html::a('<span class="glyphicon glyphicon-remove"></span>', ['profile/dcountry', 'id' => $m->id]) ?></p>,
        <?php } ?>
        <?php $form = ActiveForm::begin(); ?>
        <div class="col-lg-6">
            <?= $form->field($model, 'counties')->dropDownList($countries) ?>
        </div>
        <div class="col-lg-6">
            <?= Html::submitButton('<span class="glyphicon glyphicon-plus"></span>', ['class' => 'btn btn-lg btn-default']) ?>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
    <div class="col-lg-10 col-lg-offset-1 bg-info">
        Favourite Genres: &nbsp
        <?php foreach ($model->genres as $m) { ?>
            <p class="label label-warning"><?= $m->genreName ?><?= Html::a('<span class="glyphicon glyphicon-remove"></span>', ['profile/dgenre', 'id' => $m->id]) ?></p>,
        <?php } ?>
        <?php $form = ActiveForm::begin(); ?>
        <div class="col-lg-6">
            <?= $form->field($model, 'genres')->dropDownList($genres) ?>
        </div>
        <div class="col-lg-6">
            <?= Html::submitButton('<span class="glyphicon glyphicon-plus"></span>', ['class' => 'btn btn-lg btn-default']) ?>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
    <div class="col-lg-10 col-lg-offset-1 bg-info">
        Favourite Producers: &nbsp
        <?php foreach ($model->producers as $m) { ?>
            <p class="label label-warning"><?= $m->producerName ?><?= Html::a('<span class="glyphicon glyphicon-remove"></span>', ['profile/dproducer', 'id' => $m->id]) ?></p>,
        <?php } ?>
        <?php $form = ActiveForm::begin(); ?>
        <div class="col-lg-6">
            <?= $form->field($model, 'actors')->dropDownList($producers) ?>
        </div>
        <div class="col-lg-6">
            <?= Html::submitButton('<span class="glyphicon glyphicon-plus"></span>', ['class' => 'btn btn-lg btn-default']) ?>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
    <div class="col-lg-10 col-lg-offset-1 bg-info">
        Favourite Rezhisers: &nbsp
        <?php foreach ($model->rezhisers as $m) { ?>
            <p class="label label-warning"><?= $m->rezhiserName ?><?= Html::a('<span class="glyphicon glyphicon-remove"></span>', ['profile/drezhiser', 'id' => $m->id]) ?></p>,
        <?php } ?>
        <?php $form = ActiveForm::begin(); ?>
        <div class="col-lg-6">
            <?= $form->field($model, 'actors')->dropDownList($rezhisers) ?>
        </div>
        <div class="col-lg-6">
            <?= Html::submitButton('<span class="glyphicon glyphicon-plus"></span>', ['class' => 'btn btn-lg btn-default']) ?>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
    <div class="col-lg-10 col-lg-offset-1 bg-info">
        Favourite Studios: &nbsp
        <?php foreach ($model->studios as $m) { ?>
            <p class="label label-warning"><?= $m->studioName ?><?= Html::a('<span class="glyphicon glyphicon-remove"></span>', ['profile/dstudio', 'id' => $m->id]) ?></p>,
        <?php } ?>
        <?php $form = ActiveForm::begin(); ?>
        <div class="col-lg-6">
            <?= $form->field($model, 'actors')->dropDownList($studios) ?>
        </div>
        <div class="col-lg-6">
            <?= Html::submitButton('<span class="glyphicon glyphicon-plus"></span>', ['class' => 'btn btn-lg btn-default']) ?>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
</div>
</div>
