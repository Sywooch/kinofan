<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\CountryName */

$this->title = 'Create Country Name';
$this->params['breadcrumbs'][] = ['label' => 'Country Names', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="country-name-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
