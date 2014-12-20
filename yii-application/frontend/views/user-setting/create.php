<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\UserSeting */

$this->title = 'Create User Seting';
$this->params['breadcrumbs'][] = ['label' => 'User Setings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-seting-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
