<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ViewSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

?>
<div class="site-index">
    <div class="container">
        <?php foreach ($views as $view) { ?>
            <div class="col-lg-12 bg-success" style="margin: 10px; padding: 10px">
                <div class="text-right">
                    <?= Html::a('<span class="glyphicon glyphicon-remove"></span>', ['del', 'id' => $view->filmId])?>
                </div>
                <div class="col-lg-12 lead">
                    <?= $view->film->title; ?>
                </div>
                <div class="col-lg-3">
                    <img class="img-rounded" style="width: 200px; height: 300px" src="<?= $view->film->poster; ?>">
                </div>
                <div class="col-lg-9 row">
                    <div>
                        &nbsp Year: <?= $view->film->year; ?>
                    </div>
                    <div>
                        &nbsp Genres: <?php foreach ($view->film->genres as $genre) { ?>
                            <?= Html::a($genre->genreName, ['filtr/genres', 'id' => $genre->id]) ?>, &nbsp
                        <?php }; ?>
                    </div>
                    <div>
                        &nbsp Studio: <?php foreach ($view->film->studios as $studio) { ?>
                            <?= Html::a($studio->studioName, ['filtr/studios', 'id' => $studio->id]) ?>, &nbsp
                        <?php }; ?>
                    </div>
                    <div>
                        &nbsp Rezhiser: <?php foreach ($view->film->rezhisers as $rezhiser) { ?>
                            <?= Html::a($rezhiser->rezhiserName, ['filtr/rezhisers', 'id' => $rezhiser->id]) ?>, &nbsp
                        <?php }; ?>
                    </div>
                    <div>
                        &nbsp Producers: <?php foreach ($view->film->producers as $producer) { ?>
                            <?= Html::a($producer->producerName, ['filtr/producers', 'id' => $producer->id]) ?>, &nbsp
                        <?php }; ?>
                    </div>
                    <div>
                        &nbsp Actors: <?php foreach ($view->film->actors as $country) { ?>
                            <?= Html::a($country->actorName, ['filtr/actors', 'id' => $country->id]) ?>, &nbsp
                        <?php }; ?>
                    </div>
                    <div>
                        &nbsp Country: <?php foreach ($view->film->countries as $country) { ?>
                            <?= Html::a($country->countryName, ['filtr/countries', 'id' => $country->id]) ?>, &nbsp
                        <?php }; ?>
                    </div>
                    <div>
                        &nbsp Description: <br/>
                        &nbsp <?= $view->film->description; ?>
                    </div>
                    <div class="text-right">
                        <?= Html::a('Complete', ['complete', 'id' => $view->filmId], ['class' => 'btn btn-primary'])?>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</div>

