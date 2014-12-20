<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ActiveForm;

$this->title = 'My Yii Application';
?>
<div class="site-index">
    <div class="container">
        <?php foreach ($films->models as $film) { ?>
            <div class="col-lg-12 bg-info" style="margin: 10px">
                <div class="col-lg-12 lead">
                    <?= $film->title; ?>
                </div>
                <div class="col-lg-3">
                    <img class="img-rounded" style="width: 200px; height: 300px" src="<?= $film->poster; ?>">
                </div>
                <div class="col-lg-9">
                    <div>
                        &nbsp Год: <?= $film->year; ?>
                    </div>
                    <div>
                        &nbsp Страна: <?= $film->country; ?>
                    </div>
                    <div>
                        &nbsp Описание: <br/>
                        &nbsp <?= $film->description; ?>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>

</div>

