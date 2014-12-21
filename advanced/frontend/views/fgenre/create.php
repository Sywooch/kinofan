<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\FGenre */

$this->title = 'Create Fgenre';
$this->params['breadcrumbs'][] = ['label' => 'Fgenres', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fgenre-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
