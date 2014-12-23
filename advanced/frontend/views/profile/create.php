<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\ActorName */

$this->title = 'Create Actor Name';
$this->params['breadcrumbs'][] = ['label' => 'Actor Names', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="actor-name-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'item' => $item
    ]) ?>

</div>
