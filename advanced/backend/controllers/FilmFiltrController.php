<?php

namespace backend\controllers\;

class FilmFiltrController extends \yii\rest\ActiveController
{
    public $modelClass = 'common\models\Film';

    public function actionIndex()
    {
        return $this->render('index');
    }

    protected function actionGenres($id)
    {
        if (($model = GenreName::findOne($id)) !== null) {
            return $model->films;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    protected function actionActors($id)
    {
        if (($model = ActorName::findOne($id)) !== null) {
            return $model->films;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    protected function actionProducers($id)
    {
        if (($model = ProducerName::findOne($id)) !== null) {
            return $model->films;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    protected function actionRezhisers($id)
    {
        if (($model = RezhiserName::findOne($id)) !== null) {
            return $model->films;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    protected function actionStudios($id)
    {
        if (($model = StudioName::findOne($id)) !== null) {
            return $model->films;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    protected function actionCountries($id)
    {
        if (($model = CountryName::findOne($id)) !== null) {
            return $model->films;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
