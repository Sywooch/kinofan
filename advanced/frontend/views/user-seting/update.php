<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\UserSeting */

$this->title = 'Update User Seting: ' . ' ' . $model->userId;
$this->params['breadcrumbs'][] = ['label' => 'User Setings', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->userId, 'url' => ['view', 'id' => $model->userId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="user-seting-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
