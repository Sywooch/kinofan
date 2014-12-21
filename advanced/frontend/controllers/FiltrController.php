<?php

namespace frontend\controllers;

use Yii;
use common\models\GenreName;
use common\models\ActorName;
use common\models\ProducerName;
use common\models\RezhiserName;
use common\models\StudioName;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class FiltrController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionGenres(){
        $request = Yii::$app->request;
        $get = $request->get();
        return $this->render('../site/index', [
            'films' => $this->findGenres($get['id']),
        ]);
    }

    public function actionActors(){
        $request = Yii::$app->request;
        $get = $request->get();
        return $this->render('../site/index', [
            'films' => $this->findActors($get['id']),
        ]);
    }

    public function actionProducers(){
        $request = Yii::$app->request;
        $get = $request->get();
        return $this->render('../site/index', [
            'films' => $this->findProducers($get['id']),
        ]);
    }

    public function actionRezhisers(){
        $request = Yii::$app->request;
        $get = $request->get();
        return $this->render('../site/index', [
            'films' => $this->findRezhisers($get['id']),
        ]);
    }

    public function actionStudios(){
        $request = Yii::$app->request;
        $get = $request->get();
        return $this->render('../site/index', [
            'films' => $this->findStudios($get['id']),
        ]);
    }


    protected function findGenres($id)
    {
        if (($model = GenreName::findOne($id)) !== null) {
            return $model->films;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    protected function findActors($id)
    {
        if (($model = ActorName::findOne($id)) !== null) {
            return $model->films;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    protected function findProducers($id)
    {
        if (($model = ProducerName::findOne($id)) !== null) {
            return $model->films;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    protected function findRezhisers($id)
    {
        if (($model = RezhiserName::findOne($id)) !== null) {
            return $model->films;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    protected function findStudios($id)
    {
        if (($model = StudioName::findOne($id)) !== null) {
            return $model->films;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
