<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 21.12.2014
 * Time: 18:27
 */

namespace frontend\models;

use common\models\FActor;
use yii\base\Model;
use Yii;

class AddActorForm extends
{
    public $userId;
    public $actorName;

    public function addActor()
    {
        if ($this->validate()) {
            $actor = new Actor();
            $actor->actorId = $this->id;
            $actor->userId = Yii::$app->user->id;
            $actor->save();
            return $actor;
        }

        return null;
    }
}