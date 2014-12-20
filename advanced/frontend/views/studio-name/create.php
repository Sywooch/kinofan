<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\StudioName */

$this->title = 'Create Studio Name';
$this->params['breadcrumbs'][] = ['label' => 'Studio Names', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="studio-name-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
