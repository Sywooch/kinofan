<?php
/* @var $this yii\web\View */
$this->title = 'My Yii Application';
?>
<div class="site-index">
    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        <div class="container">
            <?php foreach ($films->models as $film) { ?>
                <div class="col-lg-3 bg-info" style="margin: 10px">
                    <div class="col-lg-12 lead">
                        <?= $film->title; ?>
                    </div>
                    <img src="<?= $film->poster; ?>">

                    <div class="col-lg-7">
                        &nbsp Описание: <br/>
                        <?= $film->description; ?>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>

    </div>
</div>
