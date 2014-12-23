<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ActiveForm;

$this->title = 'My Yii Application';
?>
<div class="site-index">
    <div class="container">
        <?php foreach ($films as $film) { ?>
            <div class="col-lg-12 bg-danger" style="margin: 10px; padding: 10px">
                <div class="col-lg-12 lead">
                    <?= $film->title; ?>
                </div>
                <div class="col-lg-3">
                    <img class="img-rounded" style="width: 200px; height: 300px" src="<?= $film->poster; ?>">
                </div>
                <div class="col-lg-9 row">
                    <div>
                        &nbsp Year: <?= $film->year; ?>
                    </div>
                    <div>
                        &nbsp Genres: <?php foreach($film->genres as $genre){?>
                            <?= Html::a($genre->genreName,['filtr/genres' , 'id' => $genre->id]) ?>, &nbsp
                        <?php }; ?>
                    </div>
                    <div>
                        &nbsp Studio: <?php foreach($film->studios as $studio){?>
                            <?= Html::a($studio->studioName,['filtr/studios', 'id' => $studio->id]) ?>, &nbsp
                        <?php }; ?>
                    </div>
                    <div>
                        &nbsp Rezhiser: <?php foreach($film->rezhisers as $rezhiser){?>
                            <?= Html::a($rezhiser->rezhiserName,['filtr/rezhisers', 'id' => $rezhiser->id]) ?>, &nbsp
                        <?php }; ?>
                    </div>
                    <div>
                        &nbsp Producers: <?php foreach($film->producers as $producer){?>
                            <?= Html::a($producer->producerName,['filtr/producers', 'id' => $producer->id]) ?>, &nbsp
                        <?php }; ?>
                    </div>
                    <div>
                        &nbsp Actors: <?php foreach($film->actors as $country){?>
                            <?= Html::a($country->actorName,['filtr/actors', 'id' => $country->id]) ?>, &nbsp
                        <?php }; ?>
                    </div>
                    <div>
                        &nbsp Country: <?php foreach($film->countries as $country){?>
                            <?= Html::a($country->countryName,['filtr/countries', 'id' => $country->id]) ?>, &nbsp
                        <?php }; ?>
                    </div>
                    <div>
                        &nbsp Description: <br/>
                        &nbsp <?= $film->description; ?>
                    </div>
                    <div class="text-right">
                        <?= Html::a('<span class="glyphicon glyphicon-film"></span>', ['view/add', 'id' =>$film->id], ['class' => 'btn btn-lg'])?>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>

</div>

