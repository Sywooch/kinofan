<?php

namespace frontend\controllers;

use frontend\models\AddActorForm;
use Yii;
use common\models\FActor;
use common\models\ActorName;
use common\models\CountryName;
use common\models\GenreName;
use common\models\ProducerName;
use common\models\RezhiserName;
use common\models\StudioName;
use common\models\UserSeting;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class ProfileController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $id = Yii::$app->user->id;
        $model = $this->findModel($id);


        $actors = ActorName::find()->asArray()->orderBy('actorName')->all();
        $actors = ArrayHelper::map($actors, 'id', 'actorName');

        $countries = CountryName::find()->asArray()->orderBy('countryName')->all();
        $countries = ArrayHelper::map($countries, 'id', 'countryName');

        $genres = GenreName::find()->asArray()->orderBy('genreName')->all();
        $genres = ArrayHelper::map($genres, 'id', 'genreName');

        $producers = ProducerName::find()->asArray()->orderBy('producerName')->all();
        $producers = ArrayHelper::map($producers, 'id', 'producerName');

        $rezhisers = RezhiserName::find()->asArray()->orderBy('rezhiserName')->all();
        $rezhisers = ArrayHelper::map($rezhisers, 'id', 'rezhiserName');

        $studios = StudioName::find()->asArray()->orderBy('studioName')->all();
        $studios = ArrayHelper::map($studios, 'id', 'studioName');


        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->goHome();
        } else {
            return $this->render('index', [
                'model' => $model,
                'actors' => $actors,
                'countries' => $countries,
                'genres' => $genres,
                'producers' => $producers,
                'rezhisers' => $rezhisers,
                'studios' => $studios,
            ]);
        }
    }

    public function actionAddactor()
    {
        $model = new FActor();

        $actors = ActorName::find()->asArray()->orderBy('actorName')->all();
        $actors = ArrayHelper::map($actors, 'id', 'actorName');

        if ($model->actorId = Yii::$app->request->post('id') !== null
            && $model->userId = Yii::$app->user->id !== null) {
            return $this->actionIndex();
        } else {
            return $this->render('create', [
                'model' => $model,
                'item' => $actors
            ]);
        }
    }

    public function actionDactor()
    {
        $request = Yii::$app->request;
        $get = $request->get();
        $this->findActor($get['id'])->delete();
        return $this->actionIndex();
    }

    public function actionDcountry()
    {
        $request = Yii::$app->request;
        $get = $request->get();
        $this->findCountry($get['id'])->delete();
        return $this->actionIndex();
    }

    public function actionDgenre()
    {
        $request = Yii::$app->request;
        $get = $request->get();
        $this->findGenre($get['id'])->delete();
        return $this->actionIndex();
    }

    public function actionDproducer()
    {
        $request = Yii::$app->request;
        $get = $request->get();
        $this->findProducer($get['id'])->delete();
        return $this->actionIndex();
    }

    public function actionDrezhiser()
    {
        $request = Yii::$app->request;
        $get = $request->get();
        $this->findRezhiser($get['id'])->delete();
        return $this->actionIndex();
    }

    public function actionDstudio()
    {
        $request = Yii::$app->request;
        $get = $request->get();
        $this->findStudio($get['id'])->delete();
        return $this->actionIndex();
    }

    protected function findModel($id)
    {
        if ($model = UserSeting::findOne((['userId' => $id]) !== null)) {
            return $model;
        } else {
            $profile = new UserSeting();
            $profile->userId = $id;
            $profile->save();
            return ($model = UserSeting::findOne($id));
        }
    }

    protected function findActor($id)
    {
        if (($model = FActor::findOne(['actorId' => $id, 'userId' => Yii::$app->user->id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    protected function findCountry($id)
    {
        if (($model = FCountry::findOne(['countyId' => $id, 'userId' => Yii::$app->user->id])) !== null) {
            return $model;
        } else
            throw new NotFoundHttpException('The requested page does not exist.');
    }

    protected function findGenre($id)
    {
        if (($model = FGenre::findOne(['genreId' => $id, 'userId' => Yii::$app->user->id])) !== null) {
            return $model;
        } else
            throw new NotFoundHttpException('The requested page does not exist.');
    }

    protected function findProducer($id)
    {
        if (($model = FProducer::findOne(['producerId' => $id, 'userId' => Yii::$app->user->id])) !== null) {
            return $model;
        } else
            throw new NotFoundHttpException('The requested page does not exist.');
    }

    protected function findRezhiser($id)
    {
        if (($model = FRezhiser::findOne(['rezhiserId' => $id, 'userId' => Yii::$app->user->id])) !== null) {
            return $model;
        } else
            throw new NotFoundHttpException('The requested page does not exist.');
    }

    protected function findStudio($id)
    {
        if (($model = FStudio::findOne(['studioId' => $id, 'userId' => Yii::$app->user->id])) !== null) {
            return $model;
        } else
            throw new NotFoundHttpException('The requested page does not exist.');
    }
}
