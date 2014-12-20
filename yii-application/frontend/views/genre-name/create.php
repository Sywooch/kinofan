<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\GenreName */

$this->title = 'Create Genre Name';
$this->params['breadcrumbs'][] = ['label' => 'Genre Names', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="genre-name-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
